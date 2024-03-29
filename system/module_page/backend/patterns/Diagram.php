<?php

##################################################################
### Copyright © 2017—2024 Maxim Rysevets. All rights reserved. ###
##################################################################

namespace effcore;

use stdClass;

#[\AllowDynamicProperties]

class Diagram extends Container {

    public $tag_name = 'x-diagram';
    public $title_tag_name = 'x-diagram-title';
    public $title_attributes = [
        'data-diagram-title' => true];
    public $type = 'linear'; # linear | radial
    public $slices = [];

    function __construct($title = null, $type = null, $attributes = [], $weight = +0) {
        if ($type) $this->type = $type;
        parent::__construct(null, $title, null, $attributes, [], $weight);
    }

    function build() {
        if (!$this->is_builded) {

            $this->attribute_insert('data-type', $this->type);
            switch ($this->type) {

                case 'linear':
                    foreach ($this->slices as $c_slice) {
                        $c_param = new Markup('x-param', $c_slice->attributes, [], $c_slice->weight);
                        $c_param->child_insert(new Markup('x-title', [], $c_slice->title));
                        $c_param->child_insert(new Markup('x-scale', [], new Markup('x-scale-fill', ['style' => ['width: '.(int)$c_slice->persent_value.'%']]) ));
                        $c_param->child_insert(new Markup('x-value', [], [
                            $c_slice->complex_value ?
                            $c_slice->complex_value.' ('.Locale::format_persent($c_slice->persent_value, 1).')' :
                                                         Locale::format_persent($c_slice->persent_value, 1)
                        ]));
                        $this->child_insert($c_param);
                    }
                    break;

                case 'radial':
                    $coords = ['r' => '25%', 'cx' => '50%', 'cy' => '50%'];
                    $diagram = new Markup_XML('svg', ['viewBox' => '0 0 64 64', 'width' => '100', 'height' => '100']);
                    $params = new Markup('x-params');
                    $diagram->child_insert(new Markup_XML_simple('circle', $coords + ['style' => 'stroke: lightgray; stroke-width: 30%; fill: none']));
                    $this->child_insert($diagram, 'diagram');
                    $this->child_insert($params, 'params');
                    $c_offset = 0;
                    foreach ($this->slices as $c_slice) {
                        $diagram->child_insert(new Markup_XML_simple('circle', $coords + ['style' =>
                            'stroke: '           .                    $c_slice->color            .    '; '.
                            'stroke-dasharray: ' .Core::format_number($c_slice->persent_value, 2).' 100; '.
                            'stroke-dashoffset: '.Core::format_number($c_offset              , 2).    '; '.
                            'stroke-width: 30%; '.
                            'fill: none']));
                        $c_offset -= $c_slice->persent_value;
                        $c_param = new Markup('x-param', $c_slice->attributes, [], $c_slice->weight);
                        $c_param->child_insert(new Markup('x-color', ['style' => 'background: '.$c_slice->color]));
                        $c_param->child_insert(new Markup('x-title', [], $c_slice->title));
                        $c_param->child_insert(new Markup('x-value', [], [
                            $c_slice->complex_value ?
                            $c_slice->complex_value.' ('.Locale::format_persent($c_slice->persent_value, 1).')' :
                                                         Locale::format_persent($c_slice->persent_value, 1) ]));
                        $params->child_insert($c_param);
                    }
                    break;
            }

            $this->is_builded = true;
        }
    }

    function slice_insert($title, $persent_value, $complex_value = null, $color = null, $attributes = [], $weight = +0) {
        $new_slice = new stdClass;
        $new_slice->title         = $title;
        $new_slice->persent_value = $persent_value;
        $new_slice->complex_value = $complex_value;
        $new_slice->color         = $color;
        $new_slice->attributes    = $attributes;
        $new_slice->weight        = $weight;
        $this->slices[] = $new_slice;
    }

    function render() {
        $this->build();
        return parent::render();
    }

}

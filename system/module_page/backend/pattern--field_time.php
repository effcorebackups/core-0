<?php

  ##################################################################
  ### Copyright © 2017—2018 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class field_time extends field_text {

  const input_min_time = '00:00:00';
  const input_max_time = '23:59:59';

  public $title = 'Time';
  public $attributes = ['x-type' => 'time'];
  public $element_attributes_default = [
    'type'     => 'time',
    'name'     => 'time',
    'required' => 'required',
    'min'      => self::input_min_time,
    'max'      => self::input_max_time,
    'step'     => 60
  ];

  function build() {
    $this->attribute_insert('value', core::time_get(), 'element_attributes_default');
    parent::build();
  }

  ###########################
  ### static declarations ###
  ###########################

  static function get_min_value($element) {$min = $element->attribute_select('min') !== null ? $element->attribute_select('min') : self::input_min_time; return strlen($min) == 5 ? $min.':00' : $min;}
  static function get_max_value($element) {$max = $element->attribute_select('max') !== null ? $element->attribute_select('max') : self::input_max_time; return strlen($max) == 5 ? $max.':00' : $max;}

  static function validate($field, $form, $npath) {
    $element = $field->child_select('element');
    $name = $field->get_element_name();
    $type = $field->get_element_type();
    if ($name && $type) {
      if (static::is_disabled($field, $element)) return true;
      if (static::is_readonly($field, $element)) return true;
      $cur_index = static::get_cur_index($name);
      $new_value = static::get_new_value($name, $cur_index);
      $new_value = strlen($new_value) == 5 ? $new_value.':00' : $new_value;
      $result = static::validate_required ($field, $form, $npath, $element, $new_value) &&
                static::validate_minlength($field, $form, $npath, $element, $new_value) &&
                static::validate_maxlength($field, $form, $npath, $element, $new_value) &&
                static::validate_value    ($field, $form, $npath, $element, $new_value) &&
                static::validate_min      ($field, $form, $npath, $element, $new_value) &&
                static::validate_max      ($field, $form, $npath, $element, $new_value) &&
                static::validate_pattern  ($field, $form, $npath, $element, $new_value);
      $element->attribute_insert('value', $new_value);
      return $result;
    }
  }

  static function validate_value($field, $form, $npath, $element, &$new_value) {
    if (strlen($new_value) &&
       !preg_match('%^(?<H>[0-1][0-9]|20|21|22|23)'.
                 '(?::(?<i>[0-5][0-9]))'.
                 '(?::(?<s>[0-5][0-9])|)$%', $new_value, $matches)) {
      $form->add_error($npath.'/element',
        translation::get('Field "%%_title" contains an incorrect time!', ['title' => translation::get($field->title)])
      );
    } else {
      return true;
    }
  }

}}
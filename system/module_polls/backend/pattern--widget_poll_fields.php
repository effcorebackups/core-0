<?php

  ##################################################################
  ### Copyright © 2017—2020 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class widget_poll_fields extends container {

  public $tag_name = 'x-widget';
  public $attributes = ['data-type' => 'poll_fields'];

  function __construct($attributes = [], $weight = 0) {
    parent::__construct(null, null, null, $attributes, [], $weight);
  }

  function build() {
    if (!$this->is_builded) {
      $widgets_group_manage = new markup('x-widgets-group', [
        'data-type'              => 'manage',
        'data-has-rearrangeable' => 'true']);
    # widgets for manage each item
      $c_widget_manage_weight = 0;
      for ($i = 0; $i < 2; $i++) {
      # field for answer text
        $c_field_answer_text = new field_text('Text');
        $c_field_answer_text->description_state = 'hidden';
        $c_field_answer_text->build();
        $c_field_answer_text->name_set('answer_text_'.$i);
        $c_field_answer_text->required_set($i == 0 || $i == 1);
      # field for answer weight
        $c_field_answer_weight = new field_weight();
        $c_field_answer_weight->description_state = 'hidden';
        $c_field_answer_weight->build();
        $c_field_answer_weight->name_set('answer_weight_'.$i);
        $c_field_answer_weight->required_set(false);
        $c_field_answer_weight->value_set($c_widget_manage_weight);
      # group fields to widget 'manage'
        $c_widget_manage_weight -= 5;
        $c_widget_manage = new markup('x-widget', ['data-rearrangeable' => 'true', 'data-fields-is-inline' => 'true']);
        $c_widget_manage     ->child_insert($c_field_answer_weight, 'weight'    );
        $c_widget_manage     ->child_insert($c_field_answer_text,   'text'      );
        $widgets_group_manage->child_insert($c_widget_manage,       'manage_'.$i);}
    # insert all widgets
      $this->child_insert($widgets_group_manage, 'manage');
      $this->is_builded = true;
    }
  }

  function items_get() {
  }

  function items_set($items) {
  }

  function on_click_insert($group, $form, $npath, $value) {
  }

  function on_click_delete($group, $form, $npath) {
  }

}}
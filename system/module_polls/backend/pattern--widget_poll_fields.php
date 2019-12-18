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
      for ($i = 0; $i < 10; $i++) {
        $c_field_answer_text = new field_text('Text');
        $c_field_answer_text->description_state = 'hidden';
        $c_field_answer_text->build();
        $c_field_answer_text->name_set('answer_text_'.$i);
        $c_field_answer_text->required_set($i == 0 || $i == 1);
        $c_widget_insert = new markup('x-widget', ['data-rearrangeable' => 'true', 'data-fields-is-inline' => 'true']);
        $c_widget_insert     ->child_insert($c_field_answer_text, 'answer_text');
        $widgets_group_manage->child_insert($c_widget_insert, 'insert_'.$i);
      }
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
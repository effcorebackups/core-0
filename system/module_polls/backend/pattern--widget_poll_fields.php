<?php

  ##################################################################
  ### Copyright © 2017—2020 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class widget_poll_fields extends container {

  public $tag_name = 'x-widget';
  public $attributes = ['data-type' => 'poll_fields'];
  public $unique_prefix = '';

  function __construct($unique_prefix = null, $attributes = [], $weight = 0) {
    if ($unique_prefix) $this->unique_prefix = $unique_prefix;
    parent::__construct(null, null, null, $attributes, [], $weight);
  }

  function build() {
    if (!$this->is_builded) {
      $this->widgets_group_manage_build();
    # button for insert new item
      $button_insert = new button('insert', ['title' => new text('insert')]);
      $button_insert->build();
      $button_insert->value_set($this->unique_prefix.'button_insert');
      $this->child_insert($button_insert, 'insert');
      $this->is_builded = true;
    }
  }

  function widgets_group_manage_build() {
    $widgets_group_manage = new markup('x-widgets-group', [
      'data-type'              => 'manage',
      'data-has-rearrangeable' => 'true']);
    $this->child_insert($widgets_group_manage, 'manage');
    foreach ($this->items_get() as $c_row_id => $c_item) {
      $widgets_group_manage->child_insert(
        $this->widget_manage_get($c_item, $this->unique_prefix, $c_row_id), $c_row_id
      );
    }
  }

  function widget_manage_get($item, $prefix, $suffix) {
  # field for weight
    $field_weight = new field_weight;
    $field_weight->description_state = 'hidden';
    $field_weight->build();
    $field_weight->name_set($prefix.'weight'.$suffix);
    $field_weight->required_set(false);
    $field_weight->value_set($item->weight);
  # field for text
    $field_text = new field_text('Text');
    $field_text->description_state = 'hidden';
    $field_text->build();
    $field_text->name_set($prefix.'text'.$suffix);
    $field_text->value_set($item->text);
  # group the fields in widget 'manage'
    $widget_manage = new markup('x-widget', ['data-rearrangeable' => 'true', 'data-fields-is-inline' => 'true'], [], $item->weight);
    $widget_manage->child_insert($field_weight, 'weight');
    $widget_manage->child_insert($field_text,   'text'  );
    return $widget_manage;
  }

  function items_get() {
    return $this->cform->validation_cache_get($this->unique_prefix.'items') ?: [];
  }

  function items_set($items) {
    $this->cform->validation_cache_is_persistent = true;
    $this->cform->validation_cache_set($this->unique_prefix.'items', $items);
    $this->widgets_group_manage_build();
  }

  function items_set_once($items) {
    if ($this->cform->validation_cache_get($this->unique_prefix.'items') === null) {
      $this->items_set($items);
    }
  }

  function on_cache_update($form, $npath) {
    $items = $this->items_get();
    foreach ($items as $c_row_id => $c_item) {
      $c_item->weight = (int)(field::request_value_get($this->unique_prefix.'weight'.$c_row_id));
      $c_item->text   =       field::request_value_get($this->unique_prefix.'text'.  $c_row_id);}
    $this->items_set($items);
  }

  function on_button_click_insert($form, $npath) {
    $min_weight = 0;
    $items = $this->items_get();
    foreach ($items as $c_row_id => $c_item)
      $min_weight = min($min_weight, $c_item->weight);
    $new_item = new \stdClass;
    $new_item->id = 0;
    $new_item->weight = $min_weight - 5;
    $new_item->text = '';
    $items[] = $new_item;
    $this->items_set($items);
    message::insert(new text_multiline([
      'Field "%%_title" (%%_id) was inserted.',
      'Click the button "%%_name" to save your changes!'], [
      'id'    => $new_item->id,
      'title' => translation::get('Text'),
      'name'  => translation::get('update')]));
    return true;
  }

  function on_button_click_delete($form, $npath) {
    return true;
  }

  ###########################
  ### static declarations ###
  ###########################

  static function on_validate(&$group, $form, $npath) {
    $group->on_cache_update($form, $npath);
  }

  static function on_submit(&$group, $form, $npath) {
    $button = $group->child_select('insert');
    if ($button->is_clicked()) {
      $group->on_button_click_insert($form, $npath);
    }
  }

}}
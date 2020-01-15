<?php

  ##################################################################
  ### Copyright © 2017—2020 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class widget_poll_fields extends widget_fields {

  public $attributes = ['data-type' => 'poll_fields'];
  public $item_title = 'Answer';

  function widget_manage_get($item, $c_row_id, $prefix) {
    $widget = parent::widget_manage_get($item, $c_row_id, $prefix);
  # field for text
    $field_text = new field_text;
    $field_text->description_state = 'hidden';
    $field_text->build();
    $field_text->name_set($prefix.'text'.$c_row_id);
    $field_text->value_set($item->text);
    $this->_fields['text'.$c_row_id] = $field_text;
  # group the previous elements in widget 'manage'
    $widget->child_insert($field_text, 'text');
    return $widget;
  }

  function on_cache_update($form, $npath) {
    $items = $this->items_get();
    foreach ($items as $c_row_id => $c_item) {
      $c_item->weight = (int)$this->_fields['weight'.$c_row_id]->value_get();
      $c_item->text   =      $this->_fields['text'.  $c_row_id]->value_get();}
    $this->items_set($items);
  }

}}
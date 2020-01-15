<?php

  ##################################################################
  ### Copyright © 2017—2020 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class widget_poll_fields extends widget_fields {

  public $attributes = ['data-type' => 'poll_fields'];
  public $item_title = 'Answer';

  function on_cache_update($form, $npath) {
    $items = $this->items_get();
    foreach ($items as $c_row_id => $c_item) {
      $c_item->weight = (int)$this->_fields['weight'.$c_row_id]->value_get();
      $c_item->text   =      $this->_fields['text'.  $c_row_id]->value_get();}
    $this->items_set($items);
  }

}}
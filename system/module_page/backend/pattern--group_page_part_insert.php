<?php

  ##################################################################
  ### Copyright © 2017—2019 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class group_page_part_insert extends fieldset {

  public $attributes = ['data-type' => 'page_part_insert'];
  public $id_area;

  function build() {
    if (!$this->is_builded) {
         $this->is_builded = true;
      parent::build();
      $page_parts = page_part::select_all($this->id_area);
      $c_field_page_part = new field_select;
      $c_field_page_part->build();
      $c_field_page_part->name_set('page_part_for_'.$this->id_area);
      $c_field_page_part->required_set(false);
      $c_field_page_part->option_insert('- no -', 'not_selected');
      foreach ($page_parts as $c_row_id => $c_part) {
        $c_field_page_part->option_insert($c_part->managing_title, $c_row_id);
      }
      $c_button_add = new button('add');
      $c_button_add->build();
      $c_button_add->novalidate = true;
      $c_button_add->value_set('button_add_for_'.$this->id_area);
      $this->child_insert($c_field_page_part);
      $this->child_insert($c_button_add);
    }
  }

}}
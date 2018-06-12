<?php

  ##################################################################
  ### Copyright © 2017—2018 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class group_radiobuttons extends container {

  public $tag_name = 'x-group';
  public $attributes = ['x-type' => 'radiobuttons'];
# ─────────────────────────────────────────────────────────────────────
  public $field_tag_name = 'x-field';
  public $field_class = '\\effcore\\field_radiobutton';
  public $field_title_tag_name = 'label';
  public $field_title_position = 'bottom';
  public $element_attributes = [];
  public $values   = [];
  public $required = [];
  public $disabled = [];
  public $checked  = [];

  function __construct($values = null, $required = null, $disabled = null, $checked = null) {
    if ($values)   $this->values   = $values;
    if ($required) $this->required = $required;
    if ($disabled) $this->disabled = $disabled;
    if ($checked)  $this->checked  = $checked;
    parent::__construct();
  }

  function build() {
    foreach ($this->values as $value => $title) {
      $this->field_insert($title, ['value' => $value]);
    }
  }

  function field_insert($title = null, $attributes = [], $new_id = null) {
    $field = new $this->field_class();
    $field->title = $title;
    $field->title_tag_name = $this->field_title_tag_name;
    $field->title_position = $this->field_title_position;
    $field->build();
    $element = $field->child_select('element');
    foreach ($attributes + $this->attributes_select('element_attributes') as $c_name => $c_value) {
      $element->attribute_insert($c_name, $c_value);
    }
    $value = $element->attribute_select('value');
    if (isset($this->required[$value])) $element->attribute_insert('required', 'required');
    if (isset($this->checked[$value]))  $element->attribute_insert('checked',   'checked');
    if (isset($this->disabled[$value])) $element->attribute_insert('disabled', 'disabled');
    return $this->child_insert($field, $new_id);
  }

}}
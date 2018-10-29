<?php

  ##################################################################
  ### Copyright © 2017—2019 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class field_nick extends field_text {

  public $title = 'Nick';
  public $attributes = ['data-type' => 'nick'];
  public $description = 'Field can contain only the next characters: "a-z", "0-9", "-", "_".';
  public $element_attributes_default = [
    'data-type' => 'nick',
    'name'      => 'nick',
    'required'  => 'required',
    'minlength' => 4,
    'maxlength' => 32,
  ];

  ###########################
  ### static declarations ###
  ###########################

  static function validate($field, $form, $npath) {
    $element = $field->child_select('element');
    $name = $field->name_get();
    $type = $field->type_get();
    if ($name && $type) {
      if ($field->disabled_get()) return true;
      if ($field->readonly_get()) return true;
      $new_value = static::request_value_get($name, static::cur_number_get($name), $form->source_get());
      $new_value = strtolower($new_value);
      $result = static::validate_required ($field, $form, $element, $new_value) &&
                static::validate_minlength($field, $form, $element, $new_value) &&
                static::validate_maxlength($field, $form, $element, $new_value) &&
                static::validate_value    ($field, $form, $element, $new_value) &&
                static::validate_pattern  ($field, $form, $element, $new_value);
      $field->value_set($new_value);
      return $result;
    }
  }

  static function validate_value($field, $form, $element, &$new_value) {
    if (!core::validate_nick($new_value)) {
      $field->error_set(
        translation::get('Field "%%_title" contains incorrect value!', ['title' => translation::get($field->title)])
      );
    } else {
      return true;
    }
  }

}}
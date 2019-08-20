<?php

  ##################################################################
  ### Copyright © 2017—2019 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore\modules\storage {
          use \effcore\block;
          use \effcore\entity;
          use \effcore\instance;
          use \effcore\markup;
          use \effcore\page;
          use \effcore\selection;
          use \effcore\url;
          abstract class events_form_instance_select {

  static function on_init($event, $form, $items) {
    $entity_name = page::get_current()->args_get('entity_name');
    $instance_id = page::get_current()->args_get('instance_id');
    $entity = entity::get($entity_name);
    if ($entity) {
      $id_keys   = $entity->id_get_real();
      $id_values = explode('+', $instance_id);
      if (count($id_keys) ==
          count($id_values)) {
        $conditions = array_combine($id_keys, $id_values);
        $instance = new instance($entity_name, $conditions);
        if ($instance->select()) {
          $selection = new selection;
          $selection->id = 'instance_manage';
          foreach ($entity->selection_params as $c_key => $c_value)
            $selection                       ->{$c_key} = $c_value;
            $selection->decorator_params['view_type'] = $entity->view_type_single;
            $selection->query_params['conditions']    = $entity->storage_get()->attributes_prepare($conditions);
          $has_visible_fields = false;
          foreach ($entity->fields as $c_name => $c_field) {
            if (!empty($c_field->managing_is_on_select)) {
              $has_visible_fields = true;
              $selection->field_insert_entity(null, $entity->name, $c_name);
            }
          }
          if (!$has_visible_fields) {
            $form->child_select('data')->child_insert(
              new markup('x-no-result', [], 'no visible fields'), 'no_result'
            );
          } else {
            $selection->field_insert_action(null, 'Action', ['delete', 'update']);
            $selection->build();
            $form->child_select('data')->child_insert($selection, 'selection');
          }
        }
      }
    }
  }

  static function on_submit($event, $form, $items) {
    $entity_name = page::get_current()->args_get('entity_name');
    $entity = entity::get($entity_name);
    switch ($form->clicked_button->value_get()) {
      case 'return':
        url::go(url::back_url_get() ?: ($back_return ?: '/manage/data/select_multiple/'.$entity->group_managing_get_id().'/'.$entity->name));
        break;
    }
  }

}}
<?php

  ##################################################################
  ### Copyright © 2017—2019 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore\modules\storage {
          use \effcore\core;
          use \effcore\entity;
          use \effcore\page;
          use \effcore\text;
          use \effcore\url;
          abstract class events_form_instance_insert {

  static function on_init($form, $items) {
    $entity_name = page::current_get()->args_get('entity_name');
    $entity = entity::get($entity_name);
    if ($entity) {
      # @todo: make functionality
      $items['fields']->child_insert(
        new text('instance_insert is UNDER CONSTRUCTION')
      );
    } else core::send_header_and_exit('page_not_found');
  }

  static function on_submit($form, $items) {
    $base        = page::current_get()->args_get('base');
    $entity_name = page::current_get()->args_get('entity_name');
    switch ($form->clicked_button->value_get()) {
      case 'insert':
      # @todo: make functionality
        break;
      case 'cancel':
        url::go(url::back_url_get() ?: $base.'/select/'.$entity_name);
        break;
    }
  }

}}
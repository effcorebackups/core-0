<?php

  ######################################################################
  ### Copyright © 20NN—20NN Author/Rightholder. All rights reserved. ###
  ######################################################################

namespace effcore\modules\example_translation {
          use \effcore\language;
          use \effcore\message;
          use \effcore\module;
          use \effcore\text;
          abstract class events_module {

  static function on_enable() {
    $module = module::get('example_translation');
    $module->enable();
    message::insert(new text('Language %%_name was enabled.',                  ['name' => language::get('eo')->title->en]));
    message::insert(new text('Translations for language %%_name was enabled.', ['name' => language::get('eo')->title->en]));
  }

  static function on_disable() {
    $module = module::get('example_translation');
    $module->disable();
  }

}}
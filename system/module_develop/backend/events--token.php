<?php

  ##################################################################
  ### Copyright © 2017—2021 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore\modules\develop {
          use \effcore\color;
          use \effcore\module;
          abstract class events_token {

  static function on_apply($name, $args = []) {
    if ($name === 'test_color') {
      $settings = module::settings_get('develop');
      $color = new color(null, $settings->test_color, $settings->test_color);
      if (count($args) === 0) return $settings->test_color;
      if (count($args) === 3) return $color->filter_shift($args[0], $args[1], $args[2], 1, color::return_hex);
      if (count($args) === 4) return $color->filter_shift($args[0], $args[1], $args[2], $args[3]);
    }
  }

}}
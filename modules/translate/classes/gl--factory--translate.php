<?php

namespace effectivecore {
          use \effectivecore\modules\storage\storage_factory as storages;
          abstract class translate_factory {

  static $lang_current = 'ru';
  static $data;

  static function init() {
    foreach (storages::get('settings')->select('translate') as $c_module) {
      foreach ($c_module as $lang_code => $c_strings) {
        foreach ($c_strings as $c_original_text => $c_translated_text) {
          static::$data[$lang_code][$c_original_text] = $c_translated_text;
        }
      }
    }
  }

  static function get($string, $args = [], $lang = '') {
    if (!static::$data) static::init();
    $string = isset(static::$data[$lang ?: static::$lang_current][$string]) ?
                    static::$data[$lang ?: static::$lang_current][$string] : $string;
    foreach ($args as $c_key => $c_value) {
      $string = str_replace('%%_'.$c_key, $c_value, $string);
    }
    return $string;
  }

}}
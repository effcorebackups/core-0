<?php

namespace effcore { # cache for data--settings

  cache::$data['data--settings']['page'] = new \stdClass();
  cache::$data['data--settings']['page']->color_id = 'black';
  cache::$data['data--settings']['page']->color_bg_id = 'modernblue';
  cache::$data['data--settings']['locales'] = new \stdClass();
  cache::$data['data--settings']['locales']->lang_code = 'ru';
  cache::$data['data--settings']['locales']->decimal_point = ',';
  cache::$data['data--settings']['locales']->thousands_separator = '';
  cache::$data['data--settings']['locales']->format_date = 'd.m.Y';
  cache::$data['data--settings']['locales']->format_time = 'H:i:s';
  cache::$data['data--settings']['locales']->format_datetime = 'd.m.Y H:i:s';
  cache::$data['data--settings']['locales']->timezone = 'Europe/Minsk';
  cache::$data['data--settings']['core'] = new \stdClass();
  cache::$data['data--settings']['core']->keys['cron'] = 'c93e46f828b2d177ce07feee215cab0a013930b5';
  cache::$data['data--settings']['core']->keys['form_validation'] = '8f73713de60581ea6f1d8801fdcd1b21bb2fb4ae';
  cache::$data['data--settings']['core']->keys['session'] = 'ef05f971f94c5402f1ced6bc32973d0bb22ef7a5';
  cache::$data['data--settings']['core']->keys['salt'] = '13e30cbc29e43d5c5df6e1fd345a93a001f0c30f';

}
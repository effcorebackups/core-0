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
  cache::$data['data--settings']['core']->keys['cron'] = 'e86526a85594c395488bff9fc1682b1fcdeea458';
  cache::$data['data--settings']['core']->keys['form_validation'] = '7cef0f930b7cef60e27d91545030145db1bd8650';
  cache::$data['data--settings']['core']->keys['session'] = 'df7ede03ff675f0576e144d4de08167ae34184eb';
  cache::$data['data--settings']['core']->keys['salt'] = 'd601476cb0a4aa410ee2703955a80e34737e6bf2';

}
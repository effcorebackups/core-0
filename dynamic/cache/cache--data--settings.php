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
  cache::$data['data--settings']['core']->keys['cron'] = '17adc8e99e44a13b4ed49e40086886a204f2f74a';
  cache::$data['data--settings']['core']->keys['form_validation'] = '5647855d0300657fa6b9d4fd3696b91cb96a2f57';
  cache::$data['data--settings']['core']->keys['session'] = '39f3d9cc41506f4606c97bef517264f73fe2fa12';
  cache::$data['data--settings']['core']->keys['salt'] = '2b9b3e56e599d7b0dc5a0d36000d4b6f63260172';

}
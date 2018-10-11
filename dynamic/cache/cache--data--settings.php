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
  cache::$data['data--settings']['core']->keys['cron'] = '3e8e612c7e9bfaacffe221a89a8aef543ede68d9';
  cache::$data['data--settings']['core']->keys['form_validation'] = '50445047c06a2a32e4da4624950b0c6e3bf655df';
  cache::$data['data--settings']['core']->keys['session'] = '62e37c02b8ab24b422c82fa88bb9afa5cdc01343';
  cache::$data['data--settings']['core']->keys['salt'] = '79dd6d766b9af801a84ffe845a2c9c1a0a01eafc';

}
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
  cache::$data['data--settings']['core']->keys['cron'] = '667dfab892ecb8b9b819d514f514ddb55ee6d6be';
  cache::$data['data--settings']['core']->keys['form_validation'] = '370539719222bb1d33350fc257bc802324bcdcea';
  cache::$data['data--settings']['core']->keys['session'] = 'a47a4a9b8d910609d90986bcbe5239fb0881fbf4';
  cache::$data['data--settings']['core']->keys['salt'] = '3181714d5c7887991ab4667f8ba77079b416a2c3';

}
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
  cache::$data['data--settings']['core']->keys['cron'] = '0d8fc89626ef461916f95b36ade66ef7d23a3e11';
  cache::$data['data--settings']['core']->keys['form_validation'] = '84bd4d6ba67bb7a1c084a3bf57cb4712b8bf7169';
  cache::$data['data--settings']['core']->keys['session'] = '5c34166020ed64b67c0013a85ccab1e4da5b1ffe';
  cache::$data['data--settings']['core']->keys['salt'] = '4e28bf8d9f4ce2a30047024effb6614683a9161b';

}
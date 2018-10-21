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
  cache::$data['data--settings']['core']->keys['cron'] = '3a763b6c82d86060abeaadf05a688866313eea4a';
  cache::$data['data--settings']['core']->keys['form_validation'] = '436253e05cd3a8b59ad1518cef38bae248d64ed3';
  cache::$data['data--settings']['core']->keys['session'] = 'a8781a07a2ce214f0d5278e40511c3917049acb1';
  cache::$data['data--settings']['core']->keys['salt'] = 'be44eea26dd50f6f34fe6912fab1cc53f9678290';

}
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
  cache::$data['data--settings']['core']->keys['cron'] = '7e662366dd3bc4195e280742f05dea93cf0080a8';
  cache::$data['data--settings']['core']->keys['form_validation'] = 'efc7d3124c8174b3e1443cca8728ff88639de068';
  cache::$data['data--settings']['core']->keys['session'] = 'a33acf8db4684d11a88148b428f79a77b8859097';
  cache::$data['data--settings']['core']->keys['salt'] = 'e29acd4565b542f40c120e68eaff4f1ecf42e730';

}
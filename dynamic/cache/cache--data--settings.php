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
  cache::$data['data--settings']['core']->keys['cron'] = '9e79fe05ed48b13c9770abfd09e7453c2021fec9';
  cache::$data['data--settings']['core']->keys['form_validation'] = '921326dd02fc9f3bfc6fc16d7b0f5431fddca0f7';
  cache::$data['data--settings']['core']->keys['session'] = 'f84c15c68aaae506738737ff63ed4fc132788fb4';
  cache::$data['data--settings']['core']->keys['salt'] = '7c13b68c469b6cbaaa6d162d77de29c9d0b0d541';

}
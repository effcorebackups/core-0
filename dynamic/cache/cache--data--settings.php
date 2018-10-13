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
  cache::$data['data--settings']['core']->keys['cron'] = 'a78dd6406e7f34edb3698c7d36440955ba81c4ba';
  cache::$data['data--settings']['core']->keys['form_validation'] = '8a9552427b1c0478b53ae681ce216db15828f1f9';
  cache::$data['data--settings']['core']->keys['session'] = 'cc248ede1410f664a0f093ebbc69ad46894e5188';
  cache::$data['data--settings']['core']->keys['salt'] = 'f7132a9495c38d484bb0950fbe5178e9b86ddd5e';

}
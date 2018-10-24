<?php

namespace effcore { # cache for data--settings

  cache::$data['data--settings']['page'] = new \stdClass();
  cache::$data['data--settings']['page']->color_id = 'black';
  cache::$data['data--settings']['page']->color_bg_id = 'modernblue';
  cache::$data['data--settings']['locales'] = new \stdClass();
  cache::$data['data--settings']['locales']->lang_code = 'en';
  cache::$data['data--settings']['locales']->decimal_point = ',';
  cache::$data['data--settings']['locales']->thousands_separator = '';
  cache::$data['data--settings']['locales']->format_date = 'd.m.Y';
  cache::$data['data--settings']['locales']->format_time = 'H:i:s';
  cache::$data['data--settings']['locales']->format_datetime = 'd.m.Y H:i:s';
  cache::$data['data--settings']['locales']->timezone = 'Europe/Minsk';
  cache::$data['data--settings']['core'] = new \stdClass();
  cache::$data['data--settings']['core']->keys['cron'] = '30e32359709a09b412bce82d9120c7ded442e38d';
  cache::$data['data--settings']['core']->keys['form_validation'] = 'e91f2ea551967f51894c1c76780bf0ec5294c3c1';
  cache::$data['data--settings']['core']->keys['session'] = '7906da3a58b041f21006fdc496814098f4444804';
  cache::$data['data--settings']['core']->keys['salt'] = 'b85de9f1ac12645507a7286e684c8fba7c224281';

}
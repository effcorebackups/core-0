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
  cache::$data['data--settings']['core']->keys['cron'] = '06d561b519cc2779e4c555cbe69300f6f2933fe0';
  cache::$data['data--settings']['core']->keys['form_validation'] = 'eb29f8b34354a2e3806e3e318a4ac0f502bea082';
  cache::$data['data--settings']['core']->keys['session'] = 'bb8a7a620efcda8b2c0197348be7cdf231e75b32';
  cache::$data['data--settings']['core']->keys['salt'] = 'c32a61a3cb8e852199b8018065eb628d82bfef36';

}
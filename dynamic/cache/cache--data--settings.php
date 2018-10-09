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
  cache::$data['data--settings']['core']->keys['cron'] = '4129b5ae16bb89f7ebf78534f48f740039ed2775';
  cache::$data['data--settings']['core']->keys['form_validation'] = '72aeab6a4857983e94a72b2a3a0bd02d38507543';
  cache::$data['data--settings']['core']->keys['session'] = '1a610fb944699c04cef8c4953e487d1f863122c6';
  cache::$data['data--settings']['core']->keys['salt'] = '2ae3f4b59afebd1565d43c0c12f785f10eb6e8ea';

}
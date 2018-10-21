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
  cache::$data['data--settings']['core']->keys['cron'] = '33ae7005e3fed8e4afe161a19b86cf20fbb4a710';
  cache::$data['data--settings']['core']->keys['form_validation'] = '08d2619b11fcc847c07558fdc9b8fb77744e94a8';
  cache::$data['data--settings']['core']->keys['session'] = '2592bfb15b06d18ad741c554deb1ea208b820008';
  cache::$data['data--settings']['core']->keys['salt'] = 'b337148134d9e50f8100f2ed2ad16f395cfd911b';

}
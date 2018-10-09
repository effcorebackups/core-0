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
  cache::$data['data--settings']['core']->keys['cron'] = 'b4a796374c2a2267b9aa6d84ea5091fc666a6ba6';
  cache::$data['data--settings']['core']->keys['form_validation'] = 'b5380ae1143b6708bedc2ebd4747b314c6a86ffa';
  cache::$data['data--settings']['core']->keys['session'] = '61d356b9d66ebb940275c4817cef88aeacb40b88';
  cache::$data['data--settings']['core']->keys['salt'] = '217b6818ba7328fa86630839a0eed549301ad81b';

}
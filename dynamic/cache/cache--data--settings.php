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
  cache::$data['data--settings']['core']->keys['cron'] = '549de043b1aedbcae15e472c4ee7cd4a0d1dd378';
  cache::$data['data--settings']['core']->keys['form_validation'] = 'f1dc60f916903c5fbb6b1f1871a3203ac3620005';
  cache::$data['data--settings']['core']->keys['session'] = 'ff1bd465cb288d13c5bf11482f920b5705cfea24';
  cache::$data['data--settings']['core']->keys['salt'] = '9f658b390f894db11c714079868764b78de5ec75';

}
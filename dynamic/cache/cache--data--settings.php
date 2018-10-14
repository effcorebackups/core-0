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
  cache::$data['data--settings']['core']->keys['cron'] = 'd139bb781feb1bebc1c535c915767c086f7f8908';
  cache::$data['data--settings']['core']->keys['form_validation'] = 'f303cd411c710fb55a2ddc8fad0f42ef2d0a98b7';
  cache::$data['data--settings']['core']->keys['session'] = 'ad0c1cb28eedbcb93ac7f3e9dd035a73fc9d21a9';
  cache::$data['data--settings']['core']->keys['salt'] = '833a049ac46301caa73cee56e452f13a811540b5';

}
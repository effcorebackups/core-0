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
  cache::$data['data--settings']['core']->keys['cron'] = '8e1b6046b694121d1e55f6fd866e5a99b64e7b6d';
  cache::$data['data--settings']['core']->keys['form_validation'] = '6d2bce52815cc8255dbefa8c243d5e7b07deb989';
  cache::$data['data--settings']['core']->keys['session'] = 'a370dbf737dfc74fc937cafaabe273e39a08aa81';
  cache::$data['data--settings']['core']->keys['salt'] = 'cec3f4763fb08951b907fb91b9925dd084c7a7f8';

}
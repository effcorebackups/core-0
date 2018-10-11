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
  cache::$data['data--settings']['core']->keys['cron'] = '3a00c5f063a7f8d06f9abd4072702b53d0df83cf';
  cache::$data['data--settings']['core']->keys['form_validation'] = '5ce01ad78ea2276972d6bf8d8692efc169170122';
  cache::$data['data--settings']['core']->keys['session'] = 'eebf12870c8281d9144fa1d46c7ff573d9f67d47';
  cache::$data['data--settings']['core']->keys['salt'] = '4e0b8a4471428be71d4c8932149b5af14173c5a9';

}
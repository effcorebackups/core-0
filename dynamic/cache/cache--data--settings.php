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
  cache::$data['data--settings']['core']->keys['cron'] = 'dde7cb1b8448de344d9c83c9a74a52882f74ad8a';
  cache::$data['data--settings']['core']->keys['form_validation'] = '46fc176aae6d6dc53a9574d576cff66babeaf372';
  cache::$data['data--settings']['core']->keys['session'] = '38eebbc159d0470eb1d656f5a9f9d9c532362e0b';
  cache::$data['data--settings']['core']->keys['salt'] = '0570a1fb80b3459ba0329bad9bb2db666846ce16';

}
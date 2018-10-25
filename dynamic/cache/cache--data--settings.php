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
  cache::$data['data--settings']['core']->keys['cron'] = '58e82bad799744b49adb5a71267d9251529e296a';
  cache::$data['data--settings']['core']->keys['form_validation'] = '105e934d71fd503647a7e3511644c3a51bdf0d07';
  cache::$data['data--settings']['core']->keys['session'] = 'acb748b4042a643eaebf786de5646267a80e1fd3';
  cache::$data['data--settings']['core']->keys['salt'] = '4ec21d2509caf55bebcecc0185c3c2329563ef44';

}
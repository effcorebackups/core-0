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
  cache::$data['data--settings']['core']->keys['cron'] = 'b741dcf1d23ad671ce254ce6570b74c695fec719';
  cache::$data['data--settings']['core']->keys['form_validation'] = 'd11df359b25738303bccd9ddf95da4d62d6ee1b3';
  cache::$data['data--settings']['core']->keys['session'] = '27acaefb5ca9ba65846a7634ab52ef037494eab7';
  cache::$data['data--settings']['core']->keys['salt'] = '037f37381f7c3241531366717ed01539f8425e5c';

}
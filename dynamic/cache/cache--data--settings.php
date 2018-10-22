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
  cache::$data['data--settings']['core']->keys['cron'] = '28e36d7a7b69cfecbc10c9331f2d44273a3a5e25';
  cache::$data['data--settings']['core']->keys['form_validation'] = 'b4f4ea0b873dfa09fa29f9bac44a746993f13c6d';
  cache::$data['data--settings']['core']->keys['session'] = '921df9b1ceded640e8688c08e8dcf3696022fde5';
  cache::$data['data--settings']['core']->keys['salt'] = '6ab5016833189d4f84d435372311e1f04911a257';

}
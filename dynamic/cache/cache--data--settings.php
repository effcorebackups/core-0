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
  cache::$data['data--settings']['core']->keys['cron'] = '5b2656bf4a920ea9c86989c5a114bd91ccbc3b89';
  cache::$data['data--settings']['core']->keys['form_validation'] = '9a69052194f26eb04a7169ec64d6ef47363f04f7';
  cache::$data['data--settings']['core']->keys['session'] = 'c210859d78f65536912441b14576a9323e7c6586';
  cache::$data['data--settings']['core']->keys['salt'] = 'a7b20ad8942a4459c5524d0fcfbdf6dc205844e0';

}
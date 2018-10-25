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
  cache::$data['data--settings']['core']->keys['cron'] = 'b67d4b1db4746588f5cb7ce3455c3c6fcb398e39';
  cache::$data['data--settings']['core']->keys['form_validation'] = '9ccf46dc3487085125b3eee0d950fffe3764a77c';
  cache::$data['data--settings']['core']->keys['session'] = 'cec95e57a9b6d025fd638b16b1c4d726d6c3882f';
  cache::$data['data--settings']['core']->keys['salt'] = '5a130f299f794f7ad06501e754e95d15a553df53';

}
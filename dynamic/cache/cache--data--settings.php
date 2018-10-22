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
  cache::$data['data--settings']['core']->keys['cron'] = '8fc3331bd5595a9bed479b79f8bc5d3cd54eb420';
  cache::$data['data--settings']['core']->keys['form_validation'] = 'dbdc86b5b587b0c9a062d14838b4d4cd2112c7d2';
  cache::$data['data--settings']['core']->keys['session'] = '51065a701028befd83e40c4ff63ffb0828d99259';
  cache::$data['data--settings']['core']->keys['salt'] = 'bc26a6aadaabed6e1205190687c9112123da801c';

}
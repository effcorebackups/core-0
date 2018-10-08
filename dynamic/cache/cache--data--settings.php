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
  cache::$data['data--settings']['core']->keys['cron'] = '04b83a99f1d0a39a573b524244a8889d516594f1';
  cache::$data['data--settings']['core']->keys['form_validation'] = '6cf0afecd6e25ac5dc95143f5f1e9510c80c9934';
  cache::$data['data--settings']['core']->keys['session'] = '4c87bc17daf846b77ab74060d85914c96000826d';
  cache::$data['data--settings']['core']->keys['salt'] = '5d76b91354748c41125c712a02f7e2c9afbbe51f';

}
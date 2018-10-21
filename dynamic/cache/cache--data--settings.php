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
  cache::$data['data--settings']['core']->keys['cron'] = '95a8a25aa1f415c78e4e158429cb680dca427a48';
  cache::$data['data--settings']['core']->keys['form_validation'] = '56d0aea91b898de7b80887cc921f63b039596780';
  cache::$data['data--settings']['core']->keys['session'] = 'c5067b05f02d120698fefae0555c186df419a708';
  cache::$data['data--settings']['core']->keys['salt'] = '8219653e2b5f7f5a97f8f7988ed376787825a580';

}
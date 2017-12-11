<?php

namespace effectivecore { # cache for settings--current

  cache::$data['settings--current']['locales'] = new \stdClass();
  cache::$data['settings--current']['locales']->lang_code = 'ru';
  cache::$data['settings--current']['locales']->decimal_point = ',';
  cache::$data['settings--current']['locales']->thousands_separator = '';
  cache::$data['settings--current']['locales']->format_date = 'd.m.Y';
  cache::$data['settings--current']['locales']->format_time = 'H:i:s';
  cache::$data['settings--current']['locales']->format_datetime = 'd.m.Y H:i:s';
  cache::$data['settings--current']['locales']->timezone = 'Europe/Minsk';

}
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
  cache::$data['data--settings']['core']->keys['cron'] = '0352a7e2fc812e87599b8fe1fc39ecb6c5113de3';
  cache::$data['data--settings']['core']->keys['form_validation'] = 'f7e0874ceaf891e108aa3af27b142260e5073f0a';
  cache::$data['data--settings']['core']->keys['session'] = 'b6107cb9745f06ef866ae152ff4a08a45b1dffcb';
  cache::$data['data--settings']['core']->keys['salt'] = '8f6a8ed3dc56dadb545e6a90281bc4e879a18153';

}
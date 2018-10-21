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
  cache::$data['data--settings']['core']->keys['cron'] = '0c23703ab4ff22bf9b0663b37267100b2ecd0daf';
  cache::$data['data--settings']['core']->keys['form_validation'] = 'b04cff1b13a1ac6e7788a4525160d1c25e2cb9c9';
  cache::$data['data--settings']['core']->keys['session'] = 'fe5a7afe2160dd5cbd359956d6017835ef3a57f4';
  cache::$data['data--settings']['core']->keys['salt'] = '539b87c06dbdef90699e027882b625af4b84ab50';

}
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
  cache::$data['data--settings']['core']->keys['cron'] = '072c48974d623e3e29c1f49b093c7c0adc0ad41b';
  cache::$data['data--settings']['core']->keys['form_validation'] = 'e77718e48561a4b5597241886140ed95902f55f3';
  cache::$data['data--settings']['core']->keys['session'] = '20a79e7ee1c94837cfbe3110c1772272482ea652';
  cache::$data['data--settings']['core']->keys['salt'] = '6161cfb36b7914b5b64dc83cef34625bbf2157f8';

}
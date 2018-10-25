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
  cache::$data['data--settings']['core']->keys['cron'] = '2e8248d6f509b2c55bac9f87a404e7fc9fb29549';
  cache::$data['data--settings']['core']->keys['form_validation'] = '1381e34a8121320c79a23d3ff18c449596733de3';
  cache::$data['data--settings']['core']->keys['session'] = 'd0e068e4c363a9c41bb119dd822367a3829bbb52';
  cache::$data['data--settings']['core']->keys['salt'] = 'db70e2ade85e06a53ddcba158104c85386a6431e';

}
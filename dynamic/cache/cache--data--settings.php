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
  cache::$data['data--settings']['core']->keys['cron'] = 'c199306e06284c07e9ea376444a64a9a70f6b802';
  cache::$data['data--settings']['core']->keys['form_validation'] = '9d712e5d8a5c4de4ebbc3162df19ea58adc6bc5d';
  cache::$data['data--settings']['core']->keys['session'] = '77d6a3a1d0727b2946f7176b8ba116ae34c79fd3';
  cache::$data['data--settings']['core']->keys['salt'] = '4227ec46c9a37b4e8e145babe81f61e02116a65e';

}
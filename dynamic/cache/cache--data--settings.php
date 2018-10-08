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
  cache::$data['data--settings']['core']->keys['cron'] = 'a2059e106b3d051d75b3eca08a9d2d3422f3ce04';
  cache::$data['data--settings']['core']->keys['form_validation'] = '9c7bf92f07634a185442a41ae42f9e0112560fad';
  cache::$data['data--settings']['core']->keys['session'] = '59c1d1b312041b8be5a276f959415946b79e6b2e';
  cache::$data['data--settings']['core']->keys['salt'] = '7f68894ced89eb76db4cdd3d8de50a0fd081408c';

}
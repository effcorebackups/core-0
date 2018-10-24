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
  cache::$data['data--settings']['core']->keys['cron'] = 'c5f463796d852811958a7c30c8e2e1ebc647f2d7';
  cache::$data['data--settings']['core']->keys['form_validation'] = 'a2b46751bb2041c2d127b2feb3ec2ea1f12b84f5';
  cache::$data['data--settings']['core']->keys['session'] = 'adf7bedd276fba9e19707b744703556b4a42c5ce';
  cache::$data['data--settings']['core']->keys['salt'] = 'b757da948c9628c995a4b173bb409e04e1096d37';

}
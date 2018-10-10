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
  cache::$data['data--settings']['core']->keys['cron'] = 'b792ef1f30b8e45851087a145e1a08d209de194f';
  cache::$data['data--settings']['core']->keys['form_validation'] = '45f0907a0acc86697226163cbd42816cffd73939';
  cache::$data['data--settings']['core']->keys['session'] = 'bf70a18f9a672651a2125eb7aa60d56e1cca88f6';
  cache::$data['data--settings']['core']->keys['salt'] = 'fb2ce500a3458590fcb365c8298ee6f3a52ecfbe';

}
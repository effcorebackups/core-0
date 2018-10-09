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
  cache::$data['data--settings']['core']->keys['cron'] = 'ef0f5ed89c0dc649e09664293c26c13058385046';
  cache::$data['data--settings']['core']->keys['form_validation'] = '58b3d8fa2a1a802b16ef4229ebba88d56009648b';
  cache::$data['data--settings']['core']->keys['session'] = '27637f04daf40560878a30a19a1ad3ee0d02e3ec';
  cache::$data['data--settings']['core']->keys['salt'] = 'b183bdebcc312a1eeb6d1be840bb9d6904f70f09';

}
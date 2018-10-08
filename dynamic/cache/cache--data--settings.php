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
  cache::$data['data--settings']['core']->keys['cron'] = '54a7dd0b1600ebca34094c7082ed3e52916aa547';
  cache::$data['data--settings']['core']->keys['form_validation'] = 'b711dcaa5b94ed55702a1e48e2e0ddfd5a2662a3';
  cache::$data['data--settings']['core']->keys['session'] = '93118f10dc80a11320b420c35596b7c1c509d3b6';
  cache::$data['data--settings']['core']->keys['salt'] = 'e90437de5f051b633be8fef1dd0530b41538cccc';

}
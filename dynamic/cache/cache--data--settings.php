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
  cache::$data['data--settings']['core']->keys['cron'] = '9f4fb5e388cfecd44b65cd4a6932fd5332f2bc29';
  cache::$data['data--settings']['core']->keys['form_validation'] = '72bde13ada7af5a5572805745c362697a228df6c';
  cache::$data['data--settings']['core']->keys['session'] = '5e6155fd4676fc8374bd54bb68f2f2449015b58c';
  cache::$data['data--settings']['core']->keys['salt'] = '21520f9144e13182bf039332f58c5e14724e8688';

}
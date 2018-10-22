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
  cache::$data['data--settings']['core']->keys['cron'] = '69a085166111b3ab6106c27fb008a28b85981d5b';
  cache::$data['data--settings']['core']->keys['form_validation'] = '9f76a4267fc4ad3cfe2af1e3773d191a041c7985';
  cache::$data['data--settings']['core']->keys['session'] = 'bad42a236dbaf6e5c1e48e670b241eaf826ff558';
  cache::$data['data--settings']['core']->keys['salt'] = '039129dea50744bf5b0528f33876db9acc1212ab';

}
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
  cache::$data['data--settings']['core']->keys['cron'] = 'e0f5b6077be9835ccfdf7eecfe699832e1626808';
  cache::$data['data--settings']['core']->keys['form_validation'] = '67399b6110d99ad143165c9548fdbc1c2e699d60';
  cache::$data['data--settings']['core']->keys['session'] = 'aeef88eccb5af23044855e6bf7348e952af521da';
  cache::$data['data--settings']['core']->keys['salt'] = '7e46f58cadf18f40572b89b57118ecd5a6bafde7';

}
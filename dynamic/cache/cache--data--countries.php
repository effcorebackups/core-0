<?php

namespace effcore { # cache for data--countries

  cache::$data['data--countries']['locales']['usa'] = new \stdClass();
  cache::$data['data--countries']['locales']['usa']->code = 'usa';
  cache::$data['data--countries']['locales']['usa']->title = new \stdClass();
  cache::$data['data--countries']['locales']['usa']->title->en = 'United States of America';
  cache::$data['data--countries']['locales']['usa']->title->native = 'United States of America';
  cache::$data['data--countries']['locales']['usa']->languages['en'] = 'en';
  cache::$data['data--countries']['locales']['usa']->format_date = 'Y-m-d';
  cache::$data['data--countries']['locales']['usa']->format_time = 'h:i:s';
  cache::$data['data--countries']['locales']['usa']->format_datetime = 'Y-m-d h:i:s';
  cache::$data['data--countries']['locales']['usa']->decimal_point = '.';
  cache::$data['data--countries']['locales']['usa']->phone_prefix = 0;
  cache::$data['data--countries']['locales']['rus'] = new \stdClass();
  cache::$data['data--countries']['locales']['rus']->code = 'rus';
  cache::$data['data--countries']['locales']['rus']->title = new \stdClass();
  cache::$data['data--countries']['locales']['rus']->title->en = 'Russian Federation';
  cache::$data['data--countries']['locales']['rus']->title->native = 'Российская Федерация';
  cache::$data['data--countries']['locales']['rus']->languages['ru'] = 'ru';
  cache::$data['data--countries']['locales']['rus']->format_date = 'd.m.Y';
  cache::$data['data--countries']['locales']['rus']->format_time = 'H:i:s';
  cache::$data['data--countries']['locales']['rus']->format_datetime = 'd.m.Y H:i:s';
  cache::$data['data--countries']['locales']['rus']->decimal_point = ',';
  cache::$data['data--countries']['locales']['rus']->phone_prefix = 7;

}
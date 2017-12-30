<?php

namespace effectivecore { # cache for data--country

  cache::$data['data--country']['locales']['usa'] = new \stdClass();
  cache::$data['data--country']['locales']['usa']->code = 'usa';
  cache::$data['data--country']['locales']['usa']->title = new \stdClass();
  cache::$data['data--country']['locales']['usa']->title->en = 'United States of America';
  cache::$data['data--country']['locales']['usa']->title->native = 'United States of America';
  cache::$data['data--country']['locales']['usa']->languages['en'] = 'en';
  cache::$data['data--country']['locales']['usa']->format_date = 'Y-m-d';
  cache::$data['data--country']['locales']['usa']->format_time = 'h:i:s';
  cache::$data['data--country']['locales']['usa']->format_datetime = 'Y-m-d h:i:s';
  cache::$data['data--country']['locales']['usa']->decimal_point = '.';
  cache::$data['data--country']['locales']['usa']->phone_prefix = 0;
  cache::$data['data--country']['locales']['rus'] = new \stdClass();
  cache::$data['data--country']['locales']['rus']->code = 'rus';
  cache::$data['data--country']['locales']['rus']->title = new \stdClass();
  cache::$data['data--country']['locales']['rus']->title->en = 'Russian Federation';
  cache::$data['data--country']['locales']['rus']->title->native = 'Российская Федерация';
  cache::$data['data--country']['locales']['rus']->languages['ru'] = 'ru';
  cache::$data['data--country']['locales']['rus']->format_date = 'd.m.Y';
  cache::$data['data--country']['locales']['rus']->format_time = 'H:i:s';
  cache::$data['data--country']['locales']['rus']->format_datetime = 'd.m.Y H:i:s';
  cache::$data['data--country']['locales']['rus']->decimal_point = ',';
  cache::$data['data--country']['locales']['rus']->phone_prefix = 7;

}
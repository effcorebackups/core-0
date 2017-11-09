<?php

namespace effectivecore { # cache for settings--countries

  cache_factory::$data['settings--countries']['locales']['usa'] = new \stdClass();
  cache_factory::$data['settings--countries']['locales']['usa']->code = 'usa';
  cache_factory::$data['settings--countries']['locales']['usa']->title = new \stdClass();
  cache_factory::$data['settings--countries']['locales']['usa']->title->en = 'United States of America';
  cache_factory::$data['settings--countries']['locales']['usa']->title->native = 'United States of America';
  cache_factory::$data['settings--countries']['locales']['usa']->languages['en'] = 'en';
  cache_factory::$data['settings--countries']['locales']['usa']->format_date = 'Y-m-d';
  cache_factory::$data['settings--countries']['locales']['usa']->format_time = 'h:i:s';
  cache_factory::$data['settings--countries']['locales']['usa']->format_datetime = 'Y-m-d h:i:s';
  cache_factory::$data['settings--countries']['locales']['usa']->decimal_point = '.';
  cache_factory::$data['settings--countries']['locales']['usa']->phone_prefix = 0;
  cache_factory::$data['settings--countries']['locales']['rus'] = new \stdClass();
  cache_factory::$data['settings--countries']['locales']['rus']->code = 'rus';
  cache_factory::$data['settings--countries']['locales']['rus']->title = new \stdClass();
  cache_factory::$data['settings--countries']['locales']['rus']->title->en = 'Russian Federation';
  cache_factory::$data['settings--countries']['locales']['rus']->title->native = 'Российская Федерация';
  cache_factory::$data['settings--countries']['locales']['rus']->languages['ru'] = 'ru';
  cache_factory::$data['settings--countries']['locales']['rus']->format_date = 'd.m.Y';
  cache_factory::$data['settings--countries']['locales']['rus']->format_time = 'H:i:s';
  cache_factory::$data['settings--countries']['locales']['rus']->format_datetime = 'd.m.Y H:i:s';
  cache_factory::$data['settings--countries']['locales']['rus']->decimal_point = ',';
  cache_factory::$data['settings--countries']['locales']['rus']->phone_prefix = 7;

}
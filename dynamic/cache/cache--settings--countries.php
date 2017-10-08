<?php

namespace effectivecore { # cache for settings--countries

  cache_factory::$data['settings--countries']['locales']['us'] = new \stdClass();
  cache_factory::$data['settings--countries']['locales']['us']->title = new \stdClass();
  cache_factory::$data['settings--countries']['locales']['us']->title->en = 'United States of America';
  cache_factory::$data['settings--countries']['locales']['us']->title->native = 'United States of America';
  cache_factory::$data['settings--countries']['locales']['us']->languages['en'] = 'en';
  cache_factory::$data['settings--countries']['locales']['us']->format_date = 'Y-m-d';
  cache_factory::$data['settings--countries']['locales']['us']->format_time = 'h:i:s';
  cache_factory::$data['settings--countries']['locales']['us']->format_datetime = 'Y-m-d h:i:s';
  cache_factory::$data['settings--countries']['locales']['us']->decimal_point = '.';
  cache_factory::$data['settings--countries']['locales']['us']->phone_prefix = 0;
  cache_factory::$data['settings--countries']['locales']['ru'] = new \stdClass();
  cache_factory::$data['settings--countries']['locales']['ru']->title = new \stdClass();
  cache_factory::$data['settings--countries']['locales']['ru']->title->en = 'Russian Federation';
  cache_factory::$data['settings--countries']['locales']['ru']->title->native = 'Российская Федерация';
  cache_factory::$data['settings--countries']['locales']['ru']->languages['ru'] = 'ru';
  cache_factory::$data['settings--countries']['locales']['ru']->format_date = 'd.m.Y';
  cache_factory::$data['settings--countries']['locales']['ru']->format_time = 'H:i:s';
  cache_factory::$data['settings--countries']['locales']['ru']->format_datetime = 'd.m.Y H:i:s';
  cache_factory::$data['settings--countries']['locales']['ru']->decimal_point = ',';
  cache_factory::$data['settings--countries']['locales']['ru']->phone_prefix = 7;

}
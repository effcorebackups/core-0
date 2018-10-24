<?php

namespace effcore { # cache for data--languages

  cache::$data['data--languages']['locales']['en'] = new \effcore\language();
  cache::$data['data--languages']['locales']['en']->code = 'en';
  cache::$data['data--languages']['locales']['en']->title = new \stdClass();
  cache::$data['data--languages']['locales']['en']->title->en = 'English';
  cache::$data['data--languages']['locales']['en']->title->native = 'English';
  cache::$data['data--languages']['locales']['ru'] = new \effcore\language();
  cache::$data['data--languages']['locales']['ru']->code = 'ru';
  cache::$data['data--languages']['locales']['ru']->title = new \stdClass();
  cache::$data['data--languages']['locales']['ru']->title->en = 'Russian';
  cache::$data['data--languages']['locales']['ru']->title->native = 'Русский';
  cache::$data['data--languages']['locales']['ru']->license_translation = 'module_locales/licenses/license-ru.mark';

}
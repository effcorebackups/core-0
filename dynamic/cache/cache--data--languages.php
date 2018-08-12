<?php

namespace effcore { # cache for data--languages

  cache::$data['data--languages']['locales']['en'] = new \effcore\language();
  cache::$data['data--languages']['locales']['en']->code = 'en';
  cache::$data['data--languages']['locales']['en']->title = new \stdClass();
  cache::$data['data--languages']['locales']['en']->title->en = 'English';
  cache::$data['data--languages']['locales']['en']->title->native = 'English';
  cache::$data['data--languages']['locales']['en']->plurals['s'] = new \stdClass();
  cache::$data['data--languages']['locales']['en']->plurals['s']->formula = '%^(?<t1>[02-9]|[0-9]{2,})$%S';
  cache::$data['data--languages']['locales']['en']->plurals['s']->matches['t1'] = 's';
  cache::$data['data--languages']['locales']['ru'] = new \effcore\language();
  cache::$data['data--languages']['locales']['ru']->code = 'ru';
  cache::$data['data--languages']['locales']['ru']->title = new \stdClass();
  cache::$data['data--languages']['locales']['ru']->title->en = 'Russian';
  cache::$data['data--languages']['locales']['ru']->title->native = 'Русский';
  cache::$data['data--languages']['locales']['ru']->plurals['ov-a'] = new \stdClass();
  cache::$data['data--languages']['locales']['ru']->plurals['ov-a']->formula = '%^(?<t1>[05-9]|.*[1][0-9]|.*[^1][05-9])$|^(?<t2>[234]|.*[^1][234])$%S';
  cache::$data['data--languages']['locales']['ru']->plurals['ov-a']->matches['t1'] = 'ов';
  cache::$data['data--languages']['locales']['ru']->plurals['ov-a']->matches['t2'] = 'а';

}
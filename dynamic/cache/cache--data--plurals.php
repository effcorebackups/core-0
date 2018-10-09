<?php

namespace effcore { # cache for data--plurals

  cache::$data['data--plurals']['locales']['en'] = new \stdClass();
  cache::$data['data--plurals']['locales']['en']->code = 'en';
  cache::$data['data--plurals']['locales']['en']->data['s'] = new \stdClass();
  cache::$data['data--plurals']['locales']['en']->data['s']->formula = '%^(?<t1>[02-9]|[0-9]{2,})$%S';
  cache::$data['data--plurals']['locales']['en']->data['s']->matches['t1'] = 's';
  cache::$data['data--plurals']['locales']['ru'] = new \stdClass();
  cache::$data['data--plurals']['locales']['ru']->code = 'ru';
  cache::$data['data--plurals']['locales']['ru']->data['ov-a'] = new \stdClass();
  cache::$data['data--plurals']['locales']['ru']->data['ov-a']->formula = '%^(?<t1>[05-9]|.*[1][0-9]|.*[^1][05-9])$|^(?<t2>[234]|.*[^1][234])$%S';
  cache::$data['data--plurals']['locales']['ru']->data['ov-a']->matches['t1'] = 'ов';
  cache::$data['data--plurals']['locales']['ru']->data['ov-a']->matches['t2'] = 'а';

}
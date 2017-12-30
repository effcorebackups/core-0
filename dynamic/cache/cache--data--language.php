<?php

namespace effectivecore { # cache for data--language

  cache::$data['data--language']['locales']['en'] = new \effectivecore\language();
  cache::$data['data--language']['locales']['en']->code = 'en';
  cache::$data['data--language']['locales']['en']->title = new \stdClass();
  cache::$data['data--language']['locales']['en']->title->en = 'English';
  cache::$data['data--language']['locales']['en']->title->native = 'English';
  cache::$data['data--language']['locales']['ru'] = new \effectivecore\language();
  cache::$data['data--language']['locales']['ru']->code = 'ru';
  cache::$data['data--language']['locales']['ru']->title = new \stdClass();
  cache::$data['data--language']['locales']['ru']->title->en = 'Russian';
  cache::$data['data--language']['locales']['ru']->title->native = 'Русский';

}
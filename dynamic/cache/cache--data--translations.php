<?php

namespace effcore { # cache for data--translations

  cache::$data['data--translations']['develop']['ru'] = new \effcore\different_cache();
  cache::$data['data--translations']['develop']['ru']->cache_name = 'data--translations-develop-ru';
  cache::$data['data--translations']['develop']['ru']->code = 'ru';
  cache::$data['data--translations']['locales']['ru'] = new \effcore\different_cache();
  cache::$data['data--translations']['locales']['ru']->cache_name = 'data--translations-locales-ru';
  cache::$data['data--translations']['locales']['ru']->code = 'ru';

}
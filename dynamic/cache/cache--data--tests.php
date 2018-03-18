<?php

namespace effcore { # cache for data--tests

  cache::$data['data--tests']['test']['register_user'] = new \effcore\different_cache();
  cache::$data['data--tests']['test']['register_user']->cache_name = 'data--tests-test-register_user';
  cache::$data['data--tests']['test']['register_user']->id = 'register_user';

}
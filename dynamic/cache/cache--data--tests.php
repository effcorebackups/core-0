<?php

namespace effcore { # cache for data--tests

  cache::$data['data--tests']['test']['register_user'] = new \effcore\external_cache();
  cache::$data['data--tests']['test']['register_user']->cache_name = 'data--tests-test-register_user';
  cache::$data['data--tests']['test']['register_user']->id = 'register_user';
  cache::$data['data--tests']['test']['register_user']->title = 'Register user';
  cache::$data['data--tests']['test']['load'] = new \effcore\external_cache();
  cache::$data['data--tests']['test']['load']->cache_name = 'data--tests-test-load';
  cache::$data['data--tests']['test']['load']->id = 'load';
  cache::$data['data--tests']['test']['load']->title = 'Load';

}
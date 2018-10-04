<?php

namespace effcore { # cache for data--forms

  cache::$data['data--forms']['user']['user_edit'] = new \effcore\external_cache();
  cache::$data['data--forms']['user']['user_edit']->cache_name = 'data--forms-user-user_edit';
  cache::$data['data--forms']['user']['registration'] = new \effcore\external_cache();
  cache::$data['data--forms']['user']['registration']->cache_name = 'data--forms-user-registration';
  cache::$data['data--forms']['user']['logout'] = new \effcore\external_cache();
  cache::$data['data--forms']['user']['logout']->cache_name = 'data--forms-user-logout';
  cache::$data['data--forms']['user']['login'] = new \effcore\external_cache();
  cache::$data['data--forms']['user']['login']->cache_name = 'data--forms-user-login';
  cache::$data['data--forms']['user']['access'] = new \effcore\external_cache();
  cache::$data['data--forms']['user']['access']->cache_name = 'data--forms-user-access';
  cache::$data['data--forms']['storage']['instance_delete'] = new \effcore\external_cache();
  cache::$data['data--forms']['storage']['instance_delete']->cache_name = 'data--forms-storage-instance_delete';
  cache::$data['data--forms']['page']['decoration'] = new \effcore\external_cache();
  cache::$data['data--forms']['page']['decoration']->cache_name = 'data--forms-page-decoration';
  cache::$data['data--forms']['test']['test'] = new \effcore\external_cache();
  cache::$data['data--forms']['test']['test']->cache_name = 'data--forms-test-test';
  cache::$data['data--forms']['demo']['demo'] = new \effcore\external_cache();
  cache::$data['data--forms']['demo']['demo']->cache_name = 'data--forms-demo-demo';
  cache::$data['data--forms']['core']['install'] = new \effcore\external_cache();
  cache::$data['data--forms']['core']['install']->cache_name = 'data--forms-core-install';

}
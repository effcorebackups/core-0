<?php

namespace effectivecore { # cache for data--forms

  cache::$data['data--forms']['core']['install'] = new \effectivecore\different_cache();
  cache::$data['data--forms']['core']['install']->cache_name = 'data--forms-core-install';
  cache::$data['data--forms']['develop']['demo'] = new \effectivecore\different_cache();
  cache::$data['data--forms']['develop']['demo']->cache_name = 'data--forms-develop-demo';
  cache::$data['data--forms']['page']['decoration'] = new \effectivecore\different_cache();
  cache::$data['data--forms']['page']['decoration']->cache_name = 'data--forms-page-decoration';
  cache::$data['data--forms']['user']['login'] = new \effectivecore\different_cache();
  cache::$data['data--forms']['user']['login']->cache_name = 'data--forms-user-login';
  cache::$data['data--forms']['user']['logout'] = new \effectivecore\different_cache();
  cache::$data['data--forms']['user']['logout']->cache_name = 'data--forms-user-logout';
  cache::$data['data--forms']['user']['registration'] = new \effectivecore\different_cache();
  cache::$data['data--forms']['user']['registration']->cache_name = 'data--forms-user-registration';
  cache::$data['data--forms']['user']['user_delete'] = new \effectivecore\different_cache();
  cache::$data['data--forms']['user']['user_delete']->cache_name = 'data--forms-user-user_delete';
  cache::$data['data--forms']['user']['user_edit'] = new \effectivecore\different_cache();
  cache::$data['data--forms']['user']['user_edit']->cache_name = 'data--forms-user-user_edit';

}
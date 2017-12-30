<?php

namespace effectivecore { # cache for data--form

  cache::$data['data--form']['core']['installation'] = new \effectivecore\different_cache();
  cache::$data['data--form']['core']['installation']->cache_name = 'data--form-core-installation';
  cache::$data['data--form']['develop']['demo'] = new \effectivecore\different_cache();
  cache::$data['data--form']['develop']['demo']->cache_name = 'data--form-develop-demo';
  cache::$data['data--form']['page']['decoration'] = new \effectivecore\different_cache();
  cache::$data['data--form']['page']['decoration']->cache_name = 'data--form-page-decoration';
  cache::$data['data--form']['user']['login'] = new \effectivecore\different_cache();
  cache::$data['data--form']['user']['login']->cache_name = 'data--form-user-login';
  cache::$data['data--form']['user']['logout'] = new \effectivecore\different_cache();
  cache::$data['data--form']['user']['logout']->cache_name = 'data--form-user-logout';
  cache::$data['data--form']['user']['registration'] = new \effectivecore\different_cache();
  cache::$data['data--form']['user']['registration']->cache_name = 'data--form-user-registration';
  cache::$data['data--form']['user']['user_delete'] = new \effectivecore\different_cache();
  cache::$data['data--form']['user']['user_delete']->cache_name = 'data--form-user-user_delete';
  cache::$data['data--form']['user']['user_edit'] = new \effectivecore\different_cache();
  cache::$data['data--form']['user']['user_edit']->cache_name = 'data--form-user-user_edit';

}
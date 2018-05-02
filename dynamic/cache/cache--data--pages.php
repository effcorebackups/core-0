<?php

namespace effcore { # cache for data--pages

  cache::$data['data--pages']['user']['user_edit'] = new \effcore\external_cache();
  cache::$data['data--pages']['user']['user_edit']->cache_name = 'data--pages-user-user_edit';
  cache::$data['data--pages']['user']['user_edit']->display = new \stdClass();
  cache::$data['data--pages']['user']['user_edit']->display->check = 'path';
  cache::$data['data--pages']['user']['user_edit']->display->where = 'url';
  cache::$data['data--pages']['user']['user_edit']->display->match = '%^/user/(?<id_user>[0-9]+)/edit$%';
  cache::$data['data--pages']['user']['user_edit']->access = new \stdClass();
  cache::$data['data--pages']['user']['user_edit']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['user']['user_edit']->access->roles['registered'] = 'registered';
  cache::$data['data--pages']['user']['user_delete'] = new \effcore\external_cache();
  cache::$data['data--pages']['user']['user_delete']->cache_name = 'data--pages-user-user_delete';
  cache::$data['data--pages']['user']['user_delete']->display = new \stdClass();
  cache::$data['data--pages']['user']['user_delete']->display->check = 'path';
  cache::$data['data--pages']['user']['user_delete']->display->where = 'url';
  cache::$data['data--pages']['user']['user_delete']->display->match = '%^/manage/users/delete/(?<id_user>[0-9]+)$%';
  cache::$data['data--pages']['user']['user_delete']->access = new \stdClass();
  cache::$data['data--pages']['user']['user_delete']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['user']['user'] = new \effcore\external_cache();
  cache::$data['data--pages']['user']['user']->cache_name = 'data--pages-user-user';
  cache::$data['data--pages']['user']['user']->display = new \stdClass();
  cache::$data['data--pages']['user']['user']->display->check = 'path';
  cache::$data['data--pages']['user']['user']->display->where = 'url';
  cache::$data['data--pages']['user']['user']->display->match = '%^/user/(?<id_user>[0-9]+)$%';
  cache::$data['data--pages']['user']['user']->access = new \stdClass();
  cache::$data['data--pages']['user']['user']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['user']['user']->access->roles['registered'] = 'registered';
  cache::$data['data--pages']['user']['roles'] = new \effcore\external_cache();
  cache::$data['data--pages']['user']['roles']->cache_name = 'data--pages-user-roles';
  cache::$data['data--pages']['user']['roles']->display = new \stdClass();
  cache::$data['data--pages']['user']['roles']->display->check = 'path';
  cache::$data['data--pages']['user']['roles']->display->where = 'url';
  cache::$data['data--pages']['user']['roles']->display->match = '%^/manage/roles$%';
  cache::$data['data--pages']['user']['roles']->access = new \stdClass();
  cache::$data['data--pages']['user']['roles']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['user']['registration'] = new \effcore\external_cache();
  cache::$data['data--pages']['user']['registration']->cache_name = 'data--pages-user-registration';
  cache::$data['data--pages']['user']['registration']->display = new \stdClass();
  cache::$data['data--pages']['user']['registration']->display->check = 'path';
  cache::$data['data--pages']['user']['registration']->display->where = 'url';
  cache::$data['data--pages']['user']['registration']->display->match = '%^/user/registration$%';
  cache::$data['data--pages']['user']['registration']->access = new \stdClass();
  cache::$data['data--pages']['user']['registration']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--pages']['user']['logout'] = new \effcore\external_cache();
  cache::$data['data--pages']['user']['logout']->cache_name = 'data--pages-user-logout';
  cache::$data['data--pages']['user']['logout']->display = new \stdClass();
  cache::$data['data--pages']['user']['logout']->display->check = 'path';
  cache::$data['data--pages']['user']['logout']->display->where = 'url';
  cache::$data['data--pages']['user']['logout']->display->match = '%^/user/logout$%';
  cache::$data['data--pages']['user']['logout']->access = new \stdClass();
  cache::$data['data--pages']['user']['logout']->access->roles['registered'] = 'registered';
  cache::$data['data--pages']['user']['login'] = new \effcore\external_cache();
  cache::$data['data--pages']['user']['login']->cache_name = 'data--pages-user-login';
  cache::$data['data--pages']['user']['login']->display = new \stdClass();
  cache::$data['data--pages']['user']['login']->display->check = 'path';
  cache::$data['data--pages']['user']['login']->display->where = 'url';
  cache::$data['data--pages']['user']['login']->display->match = '%^/user/login$%';
  cache::$data['data--pages']['user']['login']->access = new \stdClass();
  cache::$data['data--pages']['user']['login']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--pages']['storage']['instances_manager'] = new \effcore\external_cache();
  cache::$data['data--pages']['storage']['instances_manager']->cache_name = 'data--pages-storage-instances_manager';
  cache::$data['data--pages']['storage']['instances_manager']->display = new \stdClass();
  cache::$data['data--pages']['storage']['instances_manager']->display->check = 'path';
  cache::$data['data--pages']['storage']['instances_manager']->display->where = 'url';
  cache::$data['data--pages']['storage']['instances_manager']->display->match = '%^(?<base>/manage/instances/(?<entity>[a-z_]+))/(?<action>[a-z]+)(/(?<id_user>[a-z0-9]+)|)$%';
  cache::$data['data--pages']['storage']['instances_manager']->access = new \stdClass();
  cache::$data['data--pages']['storage']['instances_manager']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['page']['decoration'] = new \effcore\external_cache();
  cache::$data['data--pages']['page']['decoration']->cache_name = 'data--pages-page-decoration';
  cache::$data['data--pages']['page']['decoration']->display = new \stdClass();
  cache::$data['data--pages']['page']['decoration']->display->check = 'path';
  cache::$data['data--pages']['page']['decoration']->display->where = 'url';
  cache::$data['data--pages']['page']['decoration']->display->match = '%^/manage/decoration$%';
  cache::$data['data--pages']['page']['decoration']->access = new \stdClass();
  cache::$data['data--pages']['page']['decoration']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['demo']['demo'] = new \effcore\external_cache();
  cache::$data['data--pages']['demo']['demo']->cache_name = 'data--pages-demo-demo';
  cache::$data['data--pages']['demo']['demo']->display = new \stdClass();
  cache::$data['data--pages']['demo']['demo']->display->check = 'path';
  cache::$data['data--pages']['demo']['demo']->display->where = 'url';
  cache::$data['data--pages']['demo']['demo']->display->match = '%^/develop/demo$%';
  cache::$data['data--pages']['demo']['demo']->access = new \stdClass();
  cache::$data['data--pages']['demo']['demo']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['develop']['structures'] = new \effcore\external_cache();
  cache::$data['data--pages']['develop']['structures']->cache_name = 'data--pages-develop-structures';
  cache::$data['data--pages']['develop']['structures']->display = new \stdClass();
  cache::$data['data--pages']['develop']['structures']->display->check = 'path';
  cache::$data['data--pages']['develop']['structures']->display->where = 'url';
  cache::$data['data--pages']['develop']['structures']->display->match = '%^(?<base>/develop/structures)/(?<type>class|interface|trait)/(?<view>list|diagram|diagram_export)$%';
  cache::$data['data--pages']['develop']['structures']->access = new \stdClass();
  cache::$data['data--pages']['develop']['structures']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['core']['modules'] = new \effcore\external_cache();
  cache::$data['data--pages']['core']['modules']->cache_name = 'data--pages-core-modules';
  cache::$data['data--pages']['core']['modules']->display = new \stdClass();
  cache::$data['data--pages']['core']['modules']->display->check = 'path';
  cache::$data['data--pages']['core']['modules']->display->where = 'url';
  cache::$data['data--pages']['core']['modules']->display->match = '%^/manage/modules$%';
  cache::$data['data--pages']['core']['modules']->access = new \stdClass();
  cache::$data['data--pages']['core']['modules']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['core']['install'] = new \effcore\external_cache();
  cache::$data['data--pages']['core']['install']->cache_name = 'data--pages-core-install';
  cache::$data['data--pages']['core']['install']->display = new \stdClass();
  cache::$data['data--pages']['core']['install']->display->check = 'path';
  cache::$data['data--pages']['core']['install']->display->where = 'url';
  cache::$data['data--pages']['core']['install']->display->match = '%^/install$%';
  cache::$data['data--pages']['core']['install']->access = new \stdClass();
  cache::$data['data--pages']['core']['install']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--pages']['core']['info'] = new \effcore\external_cache();
  cache::$data['data--pages']['core']['info']->cache_name = 'data--pages-core-info';
  cache::$data['data--pages']['core']['info']->display = new \stdClass();
  cache::$data['data--pages']['core']['info']->display->check = 'path';
  cache::$data['data--pages']['core']['info']->display->where = 'url';
  cache::$data['data--pages']['core']['info']->display->match = '%^/manage/info$%';
  cache::$data['data--pages']['core']['info']->access = new \stdClass();
  cache::$data['data--pages']['core']['info']->access->roles['admins'] = 'admins';
  cache::$data['data--pages']['core']['front'] = new \effcore\external_cache();
  cache::$data['data--pages']['core']['front']->cache_name = 'data--pages-core-front';
  cache::$data['data--pages']['core']['front']->display = new \stdClass();
  cache::$data['data--pages']['core']['front']->display->check = 'path';
  cache::$data['data--pages']['core']['front']->display->where = 'url';
  cache::$data['data--pages']['core']['front']->display->match = '%^/$%';
  cache::$data['data--pages']['core']['front']->access = null;

}
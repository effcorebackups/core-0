<?php

namespace effcore { # cache for data--tree_items

  cache::$data['data--tree_items']['user']['login'] = new \effcore\tree_item();
  cache::$data['data--tree_items']['user']['login']->id = 'login';
  cache::$data['data--tree_items']['user']['login']->id_parent = 'user_anonymous';
  cache::$data['data--tree_items']['user']['login']->parent_is_tree = true;
  cache::$data['data--tree_items']['user']['login']->title = 'login';
  cache::$data['data--tree_items']['user']['login']->attributes['href'] = '/user/login';
  cache::$data['data--tree_items']['user']['login']->attributes['class']['login'] = 'login';
  cache::$data['data--tree_items']['user']['login']->weight = -20;
  cache::$data['data--tree_items']['user']['login']->access = new \stdClass();
  cache::$data['data--tree_items']['user']['login']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--tree_items']['user']['registration'] = new \effcore\tree_item();
  cache::$data['data--tree_items']['user']['registration']->id = 'registration';
  cache::$data['data--tree_items']['user']['registration']->id_parent = 'user_anonymous';
  cache::$data['data--tree_items']['user']['registration']->parent_is_tree = true;
  cache::$data['data--tree_items']['user']['registration']->title = 'registration';
  cache::$data['data--tree_items']['user']['registration']->attributes['href'] = '/user/registration';
  cache::$data['data--tree_items']['user']['registration']->attributes['class']['registration'] = 'registration';
  cache::$data['data--tree_items']['user']['registration']->weight = -10;
  cache::$data['data--tree_items']['user']['registration']->access = new \stdClass();
  cache::$data['data--tree_items']['user']['registration']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--tree_items']['user']['user_edit'] = new \effcore\tree_item();
  cache::$data['data--tree_items']['user']['user_edit']->id = 'user_edit';
  cache::$data['data--tree_items']['user']['user_edit']->id_parent = 'user_logged_in';
  cache::$data['data--tree_items']['user']['user_edit']->parent_is_tree = true;
  cache::$data['data--tree_items']['user']['user_edit']->title = 'edit';
  cache::$data['data--tree_items']['user']['user_edit']->attributes['href'] = '/user/%%_id_user/edit';
  cache::$data['data--tree_items']['user']['user_edit']->attributes['class']['user-edit'] = 'user-edit';
  cache::$data['data--tree_items']['user']['user_edit']->weight = -20;
  cache::$data['data--tree_items']['user']['user_edit']->access = new \stdClass();
  cache::$data['data--tree_items']['user']['user_edit']->access->roles['admins'] = 'admins';
  cache::$data['data--tree_items']['user']['user_edit']->access->roles['registered'] = 'registered';
  cache::$data['data--tree_items']['user']['logout'] = new \effcore\tree_item();
  cache::$data['data--tree_items']['user']['logout']->id = 'logout';
  cache::$data['data--tree_items']['user']['logout']->id_parent = 'user_logged_in';
  cache::$data['data--tree_items']['user']['logout']->parent_is_tree = true;
  cache::$data['data--tree_items']['user']['logout']->title = 'logout';
  cache::$data['data--tree_items']['user']['logout']->attributes['href'] = '/user/logout';
  cache::$data['data--tree_items']['user']['logout']->attributes['class']['logout'] = 'logout';
  cache::$data['data--tree_items']['user']['logout']->weight = -10;
  cache::$data['data--tree_items']['user']['logout']->access = new \stdClass();
  cache::$data['data--tree_items']['user']['logout']->access->roles['registered'] = 'registered';
  cache::$data['data--tree_items']['user']['roles'] = new \effcore\tree_item();
  cache::$data['data--tree_items']['user']['roles']->id = 'roles';
  cache::$data['data--tree_items']['user']['roles']->id_parent = 'manage';
  cache::$data['data--tree_items']['user']['roles']->title = 'Roles';
  cache::$data['data--tree_items']['user']['roles']->attributes['href'] = '/manage/roles';
  cache::$data['data--tree_items']['user']['roles']->attributes['class']['roles'] = 'roles';
  cache::$data['data--tree_items']['user']['roles']->access = new \stdClass();
  cache::$data['data--tree_items']['user']['roles']->access->roles['admins'] = 'admins';
  cache::$data['data--tree_items']['storage']['instances_manager'] = new \effcore\tree_item();
  cache::$data['data--tree_items']['storage']['instances_manager']->id = 'instances_manager';
  cache::$data['data--tree_items']['storage']['instances_manager']->id_parent = 'manage';
  cache::$data['data--tree_items']['storage']['instances_manager']->title = 'Instances';
  cache::$data['data--tree_items']['storage']['instances_manager']->attributes['href'] = '/manage/instances/users/select';
  cache::$data['data--tree_items']['storage']['instances_manager']->attributes['class']['instances'] = 'instances';
  cache::$data['data--tree_items']['storage']['instances_manager']->access = new \stdClass();
  cache::$data['data--tree_items']['storage']['instances_manager']->access->roles['admins'] = 'admins';
  cache::$data['data--tree_items']['page']['decoration'] = new \effcore\tree_item();
  cache::$data['data--tree_items']['page']['decoration']->id = 'decoration';
  cache::$data['data--tree_items']['page']['decoration']->id_parent = 'manage';
  cache::$data['data--tree_items']['page']['decoration']->title = 'Decoration';
  cache::$data['data--tree_items']['page']['decoration']->attributes['href'] = '/manage/decoration';
  cache::$data['data--tree_items']['page']['decoration']->attributes['class']['decoration'] = 'decoration';
  cache::$data['data--tree_items']['page']['decoration']->access = new \stdClass();
  cache::$data['data--tree_items']['page']['decoration']->access->roles['admins'] = 'admins';
  cache::$data['data--tree_items']['demo']['demo'] = new \effcore\tree_item();
  cache::$data['data--tree_items']['demo']['demo']->id = 'demo';
  cache::$data['data--tree_items']['demo']['demo']->id_parent = 'develop';
  cache::$data['data--tree_items']['demo']['demo']->title = 'Demo';
  cache::$data['data--tree_items']['demo']['demo']->attributes['href'] = '/develop/demo';
  cache::$data['data--tree_items']['demo']['demo']->attributes['class']['demo'] = 'demo';
  cache::$data['data--tree_items']['demo']['demo']->access = new \stdClass();
  cache::$data['data--tree_items']['demo']['demo']->access->roles['admins'] = 'admins';
  cache::$data['data--tree_items']['develop']['develop'] = new \effcore\tree_item();
  cache::$data['data--tree_items']['develop']['develop']->id = 'develop';
  cache::$data['data--tree_items']['develop']['develop']->id_parent = 'main';
  cache::$data['data--tree_items']['develop']['develop']->parent_is_tree = true;
  cache::$data['data--tree_items']['develop']['develop']->title = 'Develop';
  cache::$data['data--tree_items']['develop']['develop']->attributes['class']['develop'] = 'develop';
  cache::$data['data--tree_items']['develop']['develop']->weight = 100;
  cache::$data['data--tree_items']['develop']['develop']->access = new \stdClass();
  cache::$data['data--tree_items']['develop']['develop']->access->roles['admins'] = 'admins';
  cache::$data['data--tree_items']['develop']['structures'] = new \effcore\tree_item();
  cache::$data['data--tree_items']['develop']['structures']->id = 'structures';
  cache::$data['data--tree_items']['develop']['structures']->id_parent = 'develop';
  cache::$data['data--tree_items']['develop']['structures']->title = 'Structures';
  cache::$data['data--tree_items']['develop']['structures']->attributes['href'] = '/develop/structures/class/list';
  cache::$data['data--tree_items']['develop']['structures']->attributes['class']['structures'] = 'structures';
  cache::$data['data--tree_items']['develop']['structures']->access = new \stdClass();
  cache::$data['data--tree_items']['develop']['structures']->access->roles['admins'] = 'admins';
  cache::$data['data--tree_items']['develop']['php_mod_usage'] = new \effcore\tree_item();
  cache::$data['data--tree_items']['develop']['php_mod_usage']->id = 'php_mod_usage';
  cache::$data['data--tree_items']['develop']['php_mod_usage']->id_parent = 'develop';
  cache::$data['data--tree_items']['develop']['php_mod_usage']->title = 'PHP modules';
  cache::$data['data--tree_items']['develop']['php_mod_usage']->attributes['href'] = '/develop/php_mod_usage';
  cache::$data['data--tree_items']['develop']['php_mod_usage']->attributes['class']['php_mod_usage'] = 'php_mod_usage';
  cache::$data['data--tree_items']['develop']['php_mod_usage']->access = new \stdClass();
  cache::$data['data--tree_items']['develop']['php_mod_usage']->access->roles['admins'] = 'admins';
  cache::$data['data--tree_items']['core']['manage'] = new \effcore\tree_item();
  cache::$data['data--tree_items']['core']['manage']->id = 'manage';
  cache::$data['data--tree_items']['core']['manage']->id_parent = 'main';
  cache::$data['data--tree_items']['core']['manage']->parent_is_tree = true;
  cache::$data['data--tree_items']['core']['manage']->title = 'Management';
  cache::$data['data--tree_items']['core']['manage']->attributes['class']['manage'] = 'manage';
  cache::$data['data--tree_items']['core']['manage']->access = new \stdClass();
  cache::$data['data--tree_items']['core']['manage']->access->roles['admins'] = 'admins';
  cache::$data['data--tree_items']['core']['modules'] = new \effcore\tree_item();
  cache::$data['data--tree_items']['core']['modules']->id = 'modules';
  cache::$data['data--tree_items']['core']['modules']->id_parent = 'manage';
  cache::$data['data--tree_items']['core']['modules']->title = 'Modules';
  cache::$data['data--tree_items']['core']['modules']->attributes['href'] = '/manage/modules';
  cache::$data['data--tree_items']['core']['modules']->attributes['class']['modules'] = 'modules';
  cache::$data['data--tree_items']['core']['modules']->access = new \stdClass();
  cache::$data['data--tree_items']['core']['modules']->access->roles['admins'] = 'admins';
  cache::$data['data--tree_items']['core']['info'] = new \effcore\tree_item();
  cache::$data['data--tree_items']['core']['info']->id = 'info';
  cache::$data['data--tree_items']['core']['info']->id_parent = 'manage';
  cache::$data['data--tree_items']['core']['info']->title = 'Information';
  cache::$data['data--tree_items']['core']['info']->attributes['href'] = '/manage/info';
  cache::$data['data--tree_items']['core']['info']->attributes['class']['info'] = 'info';
  cache::$data['data--tree_items']['core']['info']->weight = 100;
  cache::$data['data--tree_items']['core']['info']->access = new \stdClass();
  cache::$data['data--tree_items']['core']['info']->access->roles['admins'] = 'admins';

}
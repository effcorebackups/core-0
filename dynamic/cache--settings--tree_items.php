<?php

namespace effectivecore { # cache for settings--tree_items

  caches_factory::$info['settings--tree_items']['created'] = '2017-09-30 18:41:57';
  caches_factory::$data['settings--tree_items']['core']['main_home'] = new \effectivecore\tree_item();
  caches_factory::$data['settings--tree_items']['core']['main_home']->parent_npath = 'trees/core/main';
  caches_factory::$data['settings--tree_items']['core']['main_home']->title = 'Home';
  caches_factory::$data['settings--tree_items']['core']['main_home']->attributes['href'] = '/';
  caches_factory::$data['settings--tree_items']['core']['main_home']->attributes['class']['home'] = 'home';
  caches_factory::$data['settings--tree_items']['core']['main_admin'] = new \effectivecore\tree_item();
  caches_factory::$data['settings--tree_items']['core']['main_admin']->parent_npath = 'trees/core/main';
  caches_factory::$data['settings--tree_items']['core']['main_admin']->title = 'Administer';
  caches_factory::$data['settings--tree_items']['core']['main_admin']->attributes['class']['admin'] = 'admin';
  caches_factory::$data['settings--tree_items']['core']['main_admin']->access = new \stdClass();
  caches_factory::$data['settings--tree_items']['core']['main_admin']->access->roles['admins'] = 'admins';
  caches_factory::$data['settings--tree_items']['core']['main_admin_modules'] = new \effectivecore\tree_item();
  caches_factory::$data['settings--tree_items']['core']['main_admin_modules']->parent_npath = 'tree_items/core/main_admin';
  caches_factory::$data['settings--tree_items']['core']['main_admin_modules']->title = 'Modules';
  caches_factory::$data['settings--tree_items']['core']['main_admin_modules']->attributes['href'] = '/admin/modules';
  caches_factory::$data['settings--tree_items']['core']['main_admin_modules']->attributes['class']['admin-modules'] = 'admin-modules';
  caches_factory::$data['settings--tree_items']['core']['main_admin_modules']->access = new \stdClass();
  caches_factory::$data['settings--tree_items']['core']['main_admin_modules']->access->roles['admins'] = 'admins';
  caches_factory::$data['settings--tree_items']['develop']['main_develop'] = new \effectivecore\tree_item();
  caches_factory::$data['settings--tree_items']['develop']['main_develop']->parent_npath = 'trees/core/main';
  caches_factory::$data['settings--tree_items']['develop']['main_develop']->title = 'Develop';
  caches_factory::$data['settings--tree_items']['develop']['main_develop']->attributes['class']['develop'] = 'develop';
  caches_factory::$data['settings--tree_items']['develop']['main_develop']->access = new \stdClass();
  caches_factory::$data['settings--tree_items']['develop']['main_develop']->access->roles['admins'] = 'admins';
  caches_factory::$data['settings--tree_items']['develop']['main_develop_demo'] = new \effectivecore\tree_item();
  caches_factory::$data['settings--tree_items']['develop']['main_develop_demo']->parent_npath = 'tree_items/develop/main_develop';
  caches_factory::$data['settings--tree_items']['develop']['main_develop_demo']->title = 'Demo';
  caches_factory::$data['settings--tree_items']['develop']['main_develop_demo']->attributes['href'] = '/develop/demo';
  caches_factory::$data['settings--tree_items']['develop']['main_develop_demo']->attributes['class']['develop-demo'] = 'develop-demo';
  caches_factory::$data['settings--tree_items']['develop']['main_develop_demo']->access = new \stdClass();
  caches_factory::$data['settings--tree_items']['develop']['main_develop_demo']->access->roles['admins'] = 'admins';
  caches_factory::$data['settings--tree_items']['page']['main_admin_decoration'] = new \effectivecore\tree_item();
  caches_factory::$data['settings--tree_items']['page']['main_admin_decoration']->parent_npath = 'tree_items/core/main_admin';
  caches_factory::$data['settings--tree_items']['page']['main_admin_decoration']->title = 'Decoration';
  caches_factory::$data['settings--tree_items']['page']['main_admin_decoration']->attributes['href'] = '/admin/decoration';
  caches_factory::$data['settings--tree_items']['page']['main_admin_decoration']->attributes['class']['admin-decoration'] = 'admin-decoration';
  caches_factory::$data['settings--tree_items']['page']['main_admin_decoration']->access = new \stdClass();
  caches_factory::$data['settings--tree_items']['page']['main_admin_decoration']->access->roles['admins'] = 'admins';
  caches_factory::$data['settings--tree_items']['user']['user_anonymous'] = new \effectivecore\tree_item();
  caches_factory::$data['settings--tree_items']['user']['user_anonymous']->parent_npath = 'trees/user/user';
  caches_factory::$data['settings--tree_items']['user']['user_anonymous']->title = 'User';
  caches_factory::$data['settings--tree_items']['user']['user_anonymous']->attributes['class']['user-anonymous'] = 'user-anonymous';
  caches_factory::$data['settings--tree_items']['user']['user_anonymous']->access = new \stdClass();
  caches_factory::$data['settings--tree_items']['user']['user_anonymous']->access->roles['anonymous'] = 'anonymous';
  caches_factory::$data['settings--tree_items']['user']['user_login'] = new \effectivecore\tree_item();
  caches_factory::$data['settings--tree_items']['user']['user_login']->parent_npath = 'tree_items/user/user_anonymous';
  caches_factory::$data['settings--tree_items']['user']['user_login']->title = 'login';
  caches_factory::$data['settings--tree_items']['user']['user_login']->attributes['href'] = '/user/login';
  caches_factory::$data['settings--tree_items']['user']['user_login']->attributes['class']['user-login'] = 'user-login';
  caches_factory::$data['settings--tree_items']['user']['user_login']->weight = -80;
  caches_factory::$data['settings--tree_items']['user']['user_login']->access = new \stdClass();
  caches_factory::$data['settings--tree_items']['user']['user_login']->access->roles['anonymous'] = 'anonymous';
  caches_factory::$data['settings--tree_items']['user']['user_registration'] = new \effectivecore\tree_item();
  caches_factory::$data['settings--tree_items']['user']['user_registration']->parent_npath = 'tree_items/user/user_anonymous';
  caches_factory::$data['settings--tree_items']['user']['user_registration']->title = 'registration';
  caches_factory::$data['settings--tree_items']['user']['user_registration']->attributes['href'] = '/user/registration';
  caches_factory::$data['settings--tree_items']['user']['user_registration']->attributes['class']['user-registration'] = 'user-registration';
  caches_factory::$data['settings--tree_items']['user']['user_registration']->weight = -60;
  caches_factory::$data['settings--tree_items']['user']['user_registration']->access = new \stdClass();
  caches_factory::$data['settings--tree_items']['user']['user_registration']->access->roles['anonymous'] = 'anonymous';
  caches_factory::$data['settings--tree_items']['user']['user_n'] = new \effectivecore\tree_item();
  caches_factory::$data['settings--tree_items']['user']['user_n']->parent_npath = 'trees/user/user';
  caches_factory::$data['settings--tree_items']['user']['user_n']->title = 'User %%_user_email_name';
  caches_factory::$data['settings--tree_items']['user']['user_n']->attributes['href'] = '/user/%%_user_id';
  caches_factory::$data['settings--tree_items']['user']['user_n']->attributes['class']['user-n'] = 'user-n';
  caches_factory::$data['settings--tree_items']['user']['user_n']->access = new \stdClass();
  caches_factory::$data['settings--tree_items']['user']['user_n']->access->roles['admins'] = 'admins';
  caches_factory::$data['settings--tree_items']['user']['user_n']->access->roles['registered'] = 'registered';
  caches_factory::$data['settings--tree_items']['user']['user_n_edit'] = new \effectivecore\tree_item();
  caches_factory::$data['settings--tree_items']['user']['user_n_edit']->parent_npath = 'tree_items/user/user_n';
  caches_factory::$data['settings--tree_items']['user']['user_n_edit']->title = 'edit';
  caches_factory::$data['settings--tree_items']['user']['user_n_edit']->attributes['href'] = '/user/%%_user_id/edit';
  caches_factory::$data['settings--tree_items']['user']['user_n_edit']->attributes['class']['user-edit'] = 'user-edit';
  caches_factory::$data['settings--tree_items']['user']['user_n_edit']->weight = -100;
  caches_factory::$data['settings--tree_items']['user']['user_n_edit']->access = new \stdClass();
  caches_factory::$data['settings--tree_items']['user']['user_n_edit']->access->roles['admins'] = 'admins';
  caches_factory::$data['settings--tree_items']['user']['user_n_edit']->access->roles['registered'] = 'registered';
  caches_factory::$data['settings--tree_items']['user']['user_logout'] = new \effectivecore\tree_item();
  caches_factory::$data['settings--tree_items']['user']['user_logout']->parent_npath = 'tree_items/user/user_n';
  caches_factory::$data['settings--tree_items']['user']['user_logout']->title = 'logout';
  caches_factory::$data['settings--tree_items']['user']['user_logout']->attributes['href'] = '/user/logout';
  caches_factory::$data['settings--tree_items']['user']['user_logout']->attributes['class']['user-logout'] = 'user-logout';
  caches_factory::$data['settings--tree_items']['user']['user_logout']->weight = -40;
  caches_factory::$data['settings--tree_items']['user']['user_logout']->access = new \stdClass();
  caches_factory::$data['settings--tree_items']['user']['user_logout']->access->roles['registered'] = 'registered';
  caches_factory::$data['settings--tree_items']['user']['main_admin_roles'] = new \effectivecore\tree_item();
  caches_factory::$data['settings--tree_items']['user']['main_admin_roles']->parent_npath = 'tree_items/core/main_admin';
  caches_factory::$data['settings--tree_items']['user']['main_admin_roles']->title = 'Roles';
  caches_factory::$data['settings--tree_items']['user']['main_admin_roles']->attributes['href'] = '/admin/roles';
  caches_factory::$data['settings--tree_items']['user']['main_admin_roles']->attributes['class']['admin-roles'] = 'admin-roles';
  caches_factory::$data['settings--tree_items']['user']['main_admin_roles']->access = new \stdClass();
  caches_factory::$data['settings--tree_items']['user']['main_admin_roles']->access->roles['admins'] = 'admins';
  caches_factory::$data['settings--tree_items']['user']['main_admin_users'] = new \effectivecore\tree_item();
  caches_factory::$data['settings--tree_items']['user']['main_admin_users']->parent_npath = 'tree_items/core/main_admin';
  caches_factory::$data['settings--tree_items']['user']['main_admin_users']->title = 'Users';
  caches_factory::$data['settings--tree_items']['user']['main_admin_users']->attributes['href'] = '/admin/users';
  caches_factory::$data['settings--tree_items']['user']['main_admin_users']->attributes['class']['admin-users'] = 'admin-users';
  caches_factory::$data['settings--tree_items']['user']['main_admin_users']->access = new \stdClass();
  caches_factory::$data['settings--tree_items']['user']['main_admin_users']->access->roles['admins'] = 'admins';

}
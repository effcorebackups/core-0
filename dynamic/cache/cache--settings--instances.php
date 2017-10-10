<?php

namespace effectivecore { # cache for settings--instances

  cache_factory::$data['settings--instances']['user']['user_1'] = new \effectivecore\instance();
  cache_factory::$data['settings--instances']['user']['user_1']->entity_name = 'user';
  cache_factory::$data['settings--instances']['user']['user_1']->values['id'] = 1;
  cache_factory::$data['settings--instances']['user']['user_1']->values['login'] = 'admin';
  cache_factory::$data['settings--instances']['user']['user_1']->values['email'] = 'admin@example.com';
  cache_factory::$data['settings--instances']['user']['user_1']->values['password_hash'] = '8cb2237d0679ca88db6464eac60da96345513964';
  cache_factory::$data['settings--instances']['user']['user_1']->values['is_embed'] = 1;
  cache_factory::$data['settings--instances']['user']['user_2'] = new \effectivecore\instance();
  cache_factory::$data['settings--instances']['user']['user_2']->entity_name = 'user';
  cache_factory::$data['settings--instances']['user']['user_2']->values['id'] = 2;
  cache_factory::$data['settings--instances']['user']['user_2']->values['login'] = 'user';
  cache_factory::$data['settings--instances']['user']['user_2']->values['email'] = 'user@example.com';
  cache_factory::$data['settings--instances']['user']['user_2']->values['password_hash'] = '8cb2237d0679ca88db6464eac60da96345513964';
  cache_factory::$data['settings--instances']['user']['role_anonymous'] = new \effectivecore\instance();
  cache_factory::$data['settings--instances']['user']['role_anonymous']->entity_name = 'role';
  cache_factory::$data['settings--instances']['user']['role_anonymous']->values['id'] = 'anonymous';
  cache_factory::$data['settings--instances']['user']['role_anonymous']->values['title'] = 'Anonymous';
  cache_factory::$data['settings--instances']['user']['role_anonymous']->values['is_embed'] = 1;
  cache_factory::$data['settings--instances']['user']['role_registered'] = new \effectivecore\instance();
  cache_factory::$data['settings--instances']['user']['role_registered']->entity_name = 'role';
  cache_factory::$data['settings--instances']['user']['role_registered']->values['id'] = 'registered';
  cache_factory::$data['settings--instances']['user']['role_registered']->values['title'] = 'Registered';
  cache_factory::$data['settings--instances']['user']['role_registered']->values['is_embed'] = 1;
  cache_factory::$data['settings--instances']['user']['role_admins'] = new \effectivecore\instance();
  cache_factory::$data['settings--instances']['user']['role_admins']->entity_name = 'role';
  cache_factory::$data['settings--instances']['user']['role_admins']->values['id'] = 'admins';
  cache_factory::$data['settings--instances']['user']['role_admins']->values['title'] = 'Administrators';
  cache_factory::$data['settings--instances']['user']['role_admins']->values['is_embed'] = 1;
  cache_factory::$data['settings--instances']['user']['role_moderators'] = new \effectivecore\instance();
  cache_factory::$data['settings--instances']['user']['role_moderators']->entity_name = 'role';
  cache_factory::$data['settings--instances']['user']['role_moderators']->values['id'] = 'moderators';
  cache_factory::$data['settings--instances']['user']['role_moderators']->values['title'] = 'Moderators';
  cache_factory::$data['settings--instances']['user']['permission_user_profile_select'] = new \effectivecore\instance();
  cache_factory::$data['settings--instances']['user']['permission_user_profile_select']->entity_name = 'permission';
  cache_factory::$data['settings--instances']['user']['permission_user_profile_select']->values['id'] = 'user_profile_select';
  cache_factory::$data['settings--instances']['user']['permission_user_profile_select']->values['title'] = 'User profile: select';
  cache_factory::$data['settings--instances']['user']['permission_user_profile_update'] = new \effectivecore\instance();
  cache_factory::$data['settings--instances']['user']['permission_user_profile_update']->entity_name = 'permission';
  cache_factory::$data['settings--instances']['user']['permission_user_profile_update']->values['id'] = 'user_profile_update';
  cache_factory::$data['settings--instances']['user']['permission_user_profile_update']->values['title'] = 'User profile: update';
  cache_factory::$data['settings--instances']['user']['permission_user_profile_delete'] = new \effectivecore\instance();
  cache_factory::$data['settings--instances']['user']['permission_user_profile_delete']->entity_name = 'permission';
  cache_factory::$data['settings--instances']['user']['permission_user_profile_delete']->values['id'] = 'user_profile_delete';
  cache_factory::$data['settings--instances']['user']['permission_user_profile_delete']->values['title'] = 'User profile: delete';
  cache_factory::$data['settings--instances']['user']['relation_role_ws_user_admins_1'] = new \effectivecore\instance();
  cache_factory::$data['settings--instances']['user']['relation_role_ws_user_admins_1']->entity_name = 'relation_role_ws_user';
  cache_factory::$data['settings--instances']['user']['relation_role_ws_user_admins_1']->values['role_id'] = 'admins';
  cache_factory::$data['settings--instances']['user']['relation_role_ws_user_admins_1']->values['user_id'] = 1;
  cache_factory::$data['settings--instances']['user']['relation_role_ws_permission_admins_user_profile_select'] = new \effectivecore\instance();
  cache_factory::$data['settings--instances']['user']['relation_role_ws_permission_admins_user_profile_select']->entity_name = 'relation_role_ws_permission';
  cache_factory::$data['settings--instances']['user']['relation_role_ws_permission_admins_user_profile_select']->values['role_id'] = 'admins';
  cache_factory::$data['settings--instances']['user']['relation_role_ws_permission_admins_user_profile_select']->values['permission_id'] = 'user_profile_select';
  cache_factory::$data['settings--instances']['user']['relation_role_ws_permission_admins_user_profile_update'] = new \effectivecore\instance();
  cache_factory::$data['settings--instances']['user']['relation_role_ws_permission_admins_user_profile_update']->entity_name = 'relation_role_ws_permission';
  cache_factory::$data['settings--instances']['user']['relation_role_ws_permission_admins_user_profile_update']->values['role_id'] = 'admins';
  cache_factory::$data['settings--instances']['user']['relation_role_ws_permission_admins_user_profile_update']->values['permission_id'] = 'user_profile_update';
  cache_factory::$data['settings--instances']['user']['relation_role_ws_permission_admins_user_profile_insert'] = new \effectivecore\instance();
  cache_factory::$data['settings--instances']['user']['relation_role_ws_permission_admins_user_profile_insert']->entity_name = 'relation_role_ws_permission';
  cache_factory::$data['settings--instances']['user']['relation_role_ws_permission_admins_user_profile_insert']->values['role_id'] = 'admins';
  cache_factory::$data['settings--instances']['user']['relation_role_ws_permission_admins_user_profile_insert']->values['permission_id'] = 'user_profile_insert';

}
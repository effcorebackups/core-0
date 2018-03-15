<?php

namespace effcore { # cache for data--tab_items

  cache::$data['data--tab_items']['user']['users_select'] = new \effcore\tab_item();
  cache::$data['data--tab_items']['user']['users_select']->id = 'users_select';
  cache::$data['data--tab_items']['user']['users_select']->id_parent = 'users';
  cache::$data['data--tab_items']['user']['users_select']->title = 'Select';
  cache::$data['data--tab_items']['user']['users_select']->attributes['href'] = '/admin/users/select';
  cache::$data['data--tab_items']['user']['users_select']->attributes['class']['users-select'] = 'users-select';
  cache::$data['data--tab_items']['user']['users_select']->access = new \stdClass();
  cache::$data['data--tab_items']['user']['users_select']->access->roles['admins'] = 'admins';
  cache::$data['data--tab_items']['user']['users_insert'] = new \effcore\tab_item();
  cache::$data['data--tab_items']['user']['users_insert']->id = 'users_insert';
  cache::$data['data--tab_items']['user']['users_insert']->id_parent = 'users';
  cache::$data['data--tab_items']['user']['users_insert']->title = 'Insert';
  cache::$data['data--tab_items']['user']['users_insert']->attributes['href'] = '/admin/users/insert';
  cache::$data['data--tab_items']['user']['users_insert']->attributes['class']['users-insert'] = 'users-insert';
  cache::$data['data--tab_items']['user']['users_insert']->access = new \stdClass();
  cache::$data['data--tab_items']['user']['users_insert']->access->roles['admins'] = 'admins';
  cache::$data['data--tab_items']['user']['users_update'] = new \effcore\tab_item();
  cache::$data['data--tab_items']['user']['users_update']->id = 'users_update';
  cache::$data['data--tab_items']['user']['users_update']->id_parent = 'users';
  cache::$data['data--tab_items']['user']['users_update']->title = 'Update';
  cache::$data['data--tab_items']['user']['users_update']->attributes['href'] = '/admin/users/update';
  cache::$data['data--tab_items']['user']['users_update']->attributes['class']['users-update'] = 'users-update';
  cache::$data['data--tab_items']['user']['users_update']->access = new \stdClass();
  cache::$data['data--tab_items']['user']['users_update']->access->roles['admins'] = 'admins';
  cache::$data['data--tab_items']['user']['users_delete'] = new \effcore\tab_item();
  cache::$data['data--tab_items']['user']['users_delete']->id = 'users_delete';
  cache::$data['data--tab_items']['user']['users_delete']->id_parent = 'users';
  cache::$data['data--tab_items']['user']['users_delete']->title = 'Delete';
  cache::$data['data--tab_items']['user']['users_delete']->attributes['href'] = '/admin/users/delete';
  cache::$data['data--tab_items']['user']['users_delete']->attributes['class']['users-delete'] = 'users-delete';
  cache::$data['data--tab_items']['user']['users_delete']->access = new \stdClass();
  cache::$data['data--tab_items']['user']['users_delete']->access->roles['admins'] = 'admins';

}
<?php

namespace effcore { # cache for data--pages-user-users

  cache::$data['data--pages-user-users'] = new \effcore\page();
  cache::$data['data--pages-user-users']->title = 'Users';
  cache::$data['data--pages-user-users']->https = true;
  cache::$data['data--pages-user-users']->display = new \stdClass();
  cache::$data['data--pages-user-users']->display->check = 'url';
  cache::$data['data--pages-user-users']->display->match = '%^(?<base>/admin/users)(/(?<action>[a-z]+)/(?<id_user>[0-9]+)|)$%';
  cache::$data['data--pages-user-users']->access = new \stdClass();
  cache::$data['data--pages-user-users']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-user-users']->constants['items_per_page'] = 50;
  cache::$data['data--pages-user-users']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-user-users']->content['block_menu_main']->region = 'main_menu';
  cache::$data['data--pages-user-users']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-user-users']->content['block_menu_main']->dpath = 'trees/core/main';
  cache::$data['data--pages-user-users']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-user-users']->content['block_menu_user']->region = 'head';
  cache::$data['data--pages-user-users']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-user-users']->content['block_menu_user']->handler = '\\effcore\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-users']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-user-users']->content['block_logo']->region = 'head';
  cache::$data['data--pages-user-users']->content['block_logo']->type = 'link';
  cache::$data['data--pages-user-users']->content['block_logo']->dpath = 'blocks/page/logo';
  cache::$data['data--pages-user-users']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-user-users']->content['block_title']->region = 'title';
  cache::$data['data--pages-user-users']->content['block_title']->type = 'code';
  cache::$data['data--pages-user-users']->content['block_title']->handler = '\\effcore\\events_page::on_show_block_title';
  cache::$data['data--pages-user-users']->content['block_tabs'] = new \stdClass();
  cache::$data['data--pages-user-users']->content['block_tabs']->region = 'tabs';
  cache::$data['data--pages-user-users']->content['block_tabs']->type = 'link';
  cache::$data['data--pages-user-users']->content['block_tabs']->dpath = 'tabs/core/instance_manage';
  cache::$data['data--pages-user-users']->content['users_insert'] = new \stdClass();
  cache::$data['data--pages-user-users']->content['users_insert']->display = new \stdClass();
  cache::$data['data--pages-user-users']->content['users_insert']->display->check = 'args';
  cache::$data['data--pages-user-users']->content['users_insert']->display->where = 'action';
  cache::$data['data--pages-user-users']->content['users_insert']->display->match = 'insert';
  cache::$data['data--pages-user-users']->content['users_insert']->region = 'content';
  cache::$data['data--pages-user-users']->content['users_insert']->type = 'code';
  cache::$data['data--pages-user-users']->content['users_insert']->handler = '\\effcore\\selector::users_insert';
  cache::$data['data--pages-user-users']->content['users_select'] = new \stdClass();
  cache::$data['data--pages-user-users']->content['users_select']->display = new \stdClass();
  cache::$data['data--pages-user-users']->content['users_select']->display->check = 'args';
  cache::$data['data--pages-user-users']->content['users_select']->display->where = 'action';
  cache::$data['data--pages-user-users']->content['users_select']->display->match = 'select';
  cache::$data['data--pages-user-users']->content['users_select']->region = 'content';
  cache::$data['data--pages-user-users']->content['users_select']->type = 'code';
  cache::$data['data--pages-user-users']->content['users_select']->handler = '\\effcore\\selector::users_select';
  cache::$data['data--pages-user-users']->content['users_update'] = new \stdClass();
  cache::$data['data--pages-user-users']->content['users_update']->display = new \stdClass();
  cache::$data['data--pages-user-users']->content['users_update']->display->check = 'args';
  cache::$data['data--pages-user-users']->content['users_update']->display->where = 'action';
  cache::$data['data--pages-user-users']->content['users_update']->display->match = 'update';
  cache::$data['data--pages-user-users']->content['users_update']->region = 'content';
  cache::$data['data--pages-user-users']->content['users_update']->type = 'code';
  cache::$data['data--pages-user-users']->content['users_update']->handler = '\\effcore\\selector::users_update';
  cache::$data['data--pages-user-users']->content['users_delete'] = new \stdClass();
  cache::$data['data--pages-user-users']->content['users_delete']->display = new \stdClass();
  cache::$data['data--pages-user-users']->content['users_delete']->display->check = 'args';
  cache::$data['data--pages-user-users']->content['users_delete']->display->where = 'action';
  cache::$data['data--pages-user-users']->content['users_delete']->display->match = 'delete';
  cache::$data['data--pages-user-users']->content['users_delete']->region = 'content';
  cache::$data['data--pages-user-users']->content['users_delete']->type = 'code';
  cache::$data['data--pages-user-users']->content['users_delete']->handler = '\\effcore\\selector::users_delete';

}
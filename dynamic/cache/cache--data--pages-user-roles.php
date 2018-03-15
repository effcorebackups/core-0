<?php

namespace effcore { # cache for data--pages-user-roles

  cache::$data['data--pages-user-roles'] = new \effcore\page();
  cache::$data['data--pages-user-roles']->title = 'Roles';
  cache::$data['data--pages-user-roles']->https = true;
  cache::$data['data--pages-user-roles']->display = new \stdClass();
  cache::$data['data--pages-user-roles']->display->check = 'url';
  cache::$data['data--pages-user-roles']->display->match = '%^/admin/roles$%';
  cache::$data['data--pages-user-roles']->access = new \stdClass();
  cache::$data['data--pages-user-roles']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-user-roles']->constants['items_per_page'] = 50;
  cache::$data['data--pages-user-roles']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-user-roles']->content['block_menu_main']->region = 'main_menu';
  cache::$data['data--pages-user-roles']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-user-roles']->content['block_menu_main']->dpath = 'trees/core/main';
  cache::$data['data--pages-user-roles']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-user-roles']->content['block_menu_user']->region = 'head';
  cache::$data['data--pages-user-roles']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-user-roles']->content['block_menu_user']->handler = '\\effcore\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-roles']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-user-roles']->content['block_logo']->region = 'head';
  cache::$data['data--pages-user-roles']->content['block_logo']->type = 'code';
  cache::$data['data--pages-user-roles']->content['block_logo']->handler = '\\effcore\\events_page::on_show_block_logo';
  cache::$data['data--pages-user-roles']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-user-roles']->content['block_title']->region = 'title';
  cache::$data['data--pages-user-roles']->content['block_title']->type = 'code';
  cache::$data['data--pages-user-roles']->content['block_title']->handler = '\\effcore\\events_page::on_show_block_title';
  cache::$data['data--pages-user-roles']->content['block_roles'] = new \stdClass();
  cache::$data['data--pages-user-roles']->content['block_roles']->region = 'content';
  cache::$data['data--pages-user-roles']->content['block_roles']->type = 'code';
  cache::$data['data--pages-user-roles']->content['block_roles']->handler = '\\effcore\\modules\\user\\events_page::on_show_block_roles';

}
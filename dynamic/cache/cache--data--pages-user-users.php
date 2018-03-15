<?php

namespace effcore { # cache for data--pages-user-users

  cache::$data['data--pages-user-users'] = new \effcore\page();
  cache::$data['data--pages-user-users']->title = 'Users';
  cache::$data['data--pages-user-users']->https = true;
  cache::$data['data--pages-user-users']->display = new \stdClass();
  cache::$data['data--pages-user-users']->display->check = 'url';
  cache::$data['data--pages-user-users']->display->match = '%^/admin/users$%';
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
  cache::$data['data--pages-user-users']->content['block_tabs']->dpath = 'tabs/core/entity';
  cache::$data['data--pages-user-users']->content['block_users'] = new \stdClass();
  cache::$data['data--pages-user-users']->content['block_users']->region = 'content';
  cache::$data['data--pages-user-users']->content['block_users']->type = 'code';
  cache::$data['data--pages-user-users']->content['block_users']->handler = '\\effcore\\modules\\user\\events_page::on_show_block_users';

}
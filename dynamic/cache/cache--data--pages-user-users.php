<?php

namespace effectivecore { # cache for data--pages-user-users

  cache::$data['data--pages-user-users'] = new \effectivecore\page();
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
  cache::$data['data--pages-user-users']->content['block_menu_user']->region = 'head_2';
  cache::$data['data--pages-user-users']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-user-users']->content['block_menu_user']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-users']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-user-users']->content['block_logo']->region = 'head_3';
  cache::$data['data--pages-user-users']->content['block_logo']->type = 'code';
  cache::$data['data--pages-user-users']->content['block_logo']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_logo';
  cache::$data['data--pages-user-users']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-user-users']->content['block_title']->region = 'main_1';
  cache::$data['data--pages-user-users']->content['block_title']->type = 'code';
  cache::$data['data--pages-user-users']->content['block_title']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_title';
  cache::$data['data--pages-user-users']->content['block_users'] = new \stdClass();
  cache::$data['data--pages-user-users']->content['block_users']->region = 'main_1';
  cache::$data['data--pages-user-users']->content['block_users']->type = 'code';
  cache::$data['data--pages-user-users']->content['block_users']->handler = '\\effectivecore\\modules\\user\\events_page::on_show_block_users';
  cache::$data['data--pages-user-users']->content['block_copyright'] = new \stdClass();
  cache::$data['data--pages-user-users']->content['block_copyright']->region = 'copyright';
  cache::$data['data--pages-user-users']->content['block_copyright']->type = 'code';
  cache::$data['data--pages-user-users']->content['block_copyright']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_copyright';

}
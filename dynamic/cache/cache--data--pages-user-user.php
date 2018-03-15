<?php

namespace effcore { # cache for data--pages-user-user

  cache::$data['data--pages-user-user'] = new \effcore\page();
  cache::$data['data--pages-user-user']->title = 'User %%_nick_context{2}';
  cache::$data['data--pages-user-user']->https = true;
  cache::$data['data--pages-user-user']->display = new \stdClass();
  cache::$data['data--pages-user-user']->display->check = 'url';
  cache::$data['data--pages-user-user']->display->match = '%^/user/(?<id_user>[0-9]+)$%';
  cache::$data['data--pages-user-user']->access = new \stdClass();
  cache::$data['data--pages-user-user']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-user-user']->access->roles['registered'] = 'registered';
  cache::$data['data--pages-user-user']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-user-user']->content['block_menu_main']->region = 'main_menu';
  cache::$data['data--pages-user-user']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-user-user']->content['block_menu_main']->dpath = 'trees/core/main';
  cache::$data['data--pages-user-user']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-user-user']->content['block_menu_user']->region = 'head';
  cache::$data['data--pages-user-user']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-user-user']->content['block_menu_user']->handler = '\\effcore\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-user']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-user-user']->content['block_logo']->region = 'head';
  cache::$data['data--pages-user-user']->content['block_logo']->type = 'link';
  cache::$data['data--pages-user-user']->content['block_logo']->dpath = 'blocks/page/logo';
  cache::$data['data--pages-user-user']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-user-user']->content['block_title']->region = 'title';
  cache::$data['data--pages-user-user']->content['block_title']->type = 'code';
  cache::$data['data--pages-user-user']->content['block_title']->handler = '\\effcore\\events_page::on_show_block_title';
  cache::$data['data--pages-user-user']->content['block_user_info'] = new \stdClass();
  cache::$data['data--pages-user-user']->content['block_user_info']->region = 'content';
  cache::$data['data--pages-user-user']->content['block_user_info']->type = 'code';
  cache::$data['data--pages-user-user']->content['block_user_info']->handler = '\\effcore\\modules\\user\\events_page::on_show_block_user_info';

}
<?php

namespace effcore { # cache for data--pages-user-user_edit

  cache::$data['data--pages-user-user_edit'] = new \effcore\page();
  cache::$data['data--pages-user-user_edit']->title = 'Edit user %%_nick_context{2}';
  cache::$data['data--pages-user-user_edit']->https = true;
  cache::$data['data--pages-user-user_edit']->display = new \stdClass();
  cache::$data['data--pages-user-user_edit']->display->check = 'path';
  cache::$data['data--pages-user-user_edit']->display->where = 'url';
  cache::$data['data--pages-user-user_edit']->display->match = '%^/user/(?<id_user>[0-9]+)/edit$%';
  cache::$data['data--pages-user-user_edit']->access = new \stdClass();
  cache::$data['data--pages-user-user_edit']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-user-user_edit']->access->roles['registered'] = 'registered';
  cache::$data['data--pages-user-user_edit']->content['check_access_user_edit'] = new \stdClass();
  cache::$data['data--pages-user-user_edit']->content['check_access_user_edit']->region = 'head';
  cache::$data['data--pages-user-user_edit']->content['check_access_user_edit']->type = 'code';
  cache::$data['data--pages-user-user_edit']->content['check_access_user_edit']->handler = '\\effcore\\modules\\user\\events_access::on_check_access_user_edit';
  cache::$data['data--pages-user-user_edit']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-user-user_edit']->content['block_menu_main']->region = 'main_menu';
  cache::$data['data--pages-user-user_edit']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-user-user_edit']->content['block_menu_main']->dpath = 'trees/core/main';
  cache::$data['data--pages-user-user_edit']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-user-user_edit']->content['block_menu_user']->region = 'head';
  cache::$data['data--pages-user-user_edit']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-user-user_edit']->content['block_menu_user']->handler = '\\effcore\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-user_edit']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-user-user_edit']->content['block_logo']->region = 'head';
  cache::$data['data--pages-user-user_edit']->content['block_logo']->type = 'link';
  cache::$data['data--pages-user-user_edit']->content['block_logo']->dpath = 'blocks/page/logo';
  cache::$data['data--pages-user-user_edit']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-user-user_edit']->content['block_title']->region = 'title';
  cache::$data['data--pages-user-user_edit']->content['block_title']->type = 'code';
  cache::$data['data--pages-user-user_edit']->content['block_title']->handler = '\\effcore\\events_page::on_show_block_title';
  cache::$data['data--pages-user-user_edit']->content['form_user_edit'] = new \stdClass();
  cache::$data['data--pages-user-user_edit']->content['form_user_edit']->region = 'content';
  cache::$data['data--pages-user-user_edit']->content['form_user_edit']->type = 'link';
  cache::$data['data--pages-user-user_edit']->content['form_user_edit']->dpath = 'forms/user/user_edit';

}
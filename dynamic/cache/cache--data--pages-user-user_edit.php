<?php

namespace effcore { # cache for data--pages-user-user_edit

  cache::$data['data--pages-user-user_edit'] = new \effcore\page();
  cache::$data['data--pages-user-user_edit']->title = 'Edit user %%_nick_context{2}';
  cache::$data['data--pages-user-user_edit']->https = true;
  cache::$data['data--pages-user-user_edit']->display = new \stdClass();
  cache::$data['data--pages-user-user_edit']->display->check = 'url';
  cache::$data['data--pages-user-user_edit']->display->where = 'path';
  cache::$data['data--pages-user-user_edit']->display->match = '%^/user/(?<id_user>[0-9]+)/edit$%';
  cache::$data['data--pages-user-user_edit']->access = new \stdClass();
  cache::$data['data--pages-user-user_edit']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-user-user_edit']->access->roles['registered'] = 'registered';
  cache::$data['data--pages-user-user_edit']->content['check_access_user_edit'] = new \stdClass();
  cache::$data['data--pages-user-user_edit']->content['check_access_user_edit']->region = 'head';
  cache::$data['data--pages-user-user_edit']->content['check_access_user_edit']->type = 'code';
  cache::$data['data--pages-user-user_edit']->content['check_access_user_edit']->handler = '\\effcore\\modules\\user\\events_access::on_check_access_user_edit';
  cache::$data['data--pages-user-user_edit']->content['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-user-user_edit']->content['menu_main']->region = 'main_menu';
  cache::$data['data--pages-user-user_edit']->content['menu_main']->type = 'link';
  cache::$data['data--pages-user-user_edit']->content['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-user-user_edit']->content['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-user-user_edit']->content['menu_user']->region = 'head';
  cache::$data['data--pages-user-user_edit']->content['menu_user']->type = 'code';
  cache::$data['data--pages-user-user_edit']->content['menu_user']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-user_edit']->content['logo'] = new \effcore\page_part();
  cache::$data['data--pages-user-user_edit']->content['logo']->region = 'head';
  cache::$data['data--pages-user-user_edit']->content['logo']->type = 'link';
  cache::$data['data--pages-user-user_edit']->content['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-user-user_edit']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-user-user_edit']->content['block_title']->region = 'title';
  cache::$data['data--pages-user-user_edit']->content['block_title']->type = 'code';
  cache::$data['data--pages-user-user_edit']->content['block_title']->handler = '\\effcore\\modules\\page\\events_page::on_show_block_title';
  cache::$data['data--pages-user-user_edit']->content['form_user_edit'] = new \stdClass();
  cache::$data['data--pages-user-user_edit']->content['form_user_edit']->region = 'content';
  cache::$data['data--pages-user-user_edit']->content['form_user_edit']->type = 'link';
  cache::$data['data--pages-user-user_edit']->content['form_user_edit']->dpath = 'forms/user/user_edit';

}
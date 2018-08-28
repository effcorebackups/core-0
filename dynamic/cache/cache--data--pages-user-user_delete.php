<?php

namespace effcore { # cache for data--pages-user-user_delete

  cache::$data['data--pages-user-user_delete'] = new \effcore\page();
  cache::$data['data--pages-user-user_delete']->title = 'Delete user %%_nick_context{4}?';
  cache::$data['data--pages-user-user_delete']->https = true;
  cache::$data['data--pages-user-user_delete']->display = new \stdClass();
  cache::$data['data--pages-user-user_delete']->display->check = 'url';
  cache::$data['data--pages-user-user_delete']->display->where = 'path';
  cache::$data['data--pages-user-user_delete']->display->match = '%^/manage/users/delete/(?<id_user>[0-9]+)$%';
  cache::$data['data--pages-user-user_delete']->access = new \stdClass();
  cache::$data['data--pages-user-user_delete']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-user-user_delete']->content['check_access_user_delete'] = new \stdClass();
  cache::$data['data--pages-user-user_delete']->content['check_access_user_delete']->region = 'head';
  cache::$data['data--pages-user-user_delete']->content['check_access_user_delete']->type = 'code';
  cache::$data['data--pages-user-user_delete']->content['check_access_user_delete']->handler = '\\effcore\\modules\\user\\events_access::on_check_access_user_delete';
  cache::$data['data--pages-user-user_delete']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-user-user_delete']->content['block_menu_main']->region = 'main_menu';
  cache::$data['data--pages-user-user_delete']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-user-user_delete']->content['block_menu_main']->dpath = 'trees/core/main';
  cache::$data['data--pages-user-user_delete']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-user-user_delete']->content['block_menu_user']->region = 'head';
  cache::$data['data--pages-user-user_delete']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-user-user_delete']->content['block_menu_user']->handler = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-user_delete']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-user-user_delete']->content['block_logo']->region = 'head';
  cache::$data['data--pages-user-user_delete']->content['block_logo']->type = 'link';
  cache::$data['data--pages-user-user_delete']->content['block_logo']->dpath = 'blocks/page/logo';
  cache::$data['data--pages-user-user_delete']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-user-user_delete']->content['block_title']->region = 'title';
  cache::$data['data--pages-user-user_delete']->content['block_title']->type = 'code';
  cache::$data['data--pages-user-user_delete']->content['block_title']->handler = '\\effcore\\modules\\page\\events_page::on_show_block_title';
  cache::$data['data--pages-user-user_delete']->content['form_user_delete'] = new \stdClass();
  cache::$data['data--pages-user-user_delete']->content['form_user_delete']->region = 'content';
  cache::$data['data--pages-user-user_delete']->content['form_user_delete']->type = 'link';
  cache::$data['data--pages-user-user_delete']->content['form_user_delete']->dpath = 'forms/user/user_delete';

}
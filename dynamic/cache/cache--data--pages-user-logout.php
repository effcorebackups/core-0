<?php

namespace effcore { # cache for data--pages-user-logout

  cache::$data['data--pages-user-logout'] = new \effcore\page();
  cache::$data['data--pages-user-logout']->title = 'Logout';
  cache::$data['data--pages-user-logout']->https = true;
  cache::$data['data--pages-user-logout']->display = new \stdClass();
  cache::$data['data--pages-user-logout']->display->check = 'url';
  cache::$data['data--pages-user-logout']->display->where = 'path';
  cache::$data['data--pages-user-logout']->display->match = '%^/user/logout$%';
  cache::$data['data--pages-user-logout']->access = new \stdClass();
  cache::$data['data--pages-user-logout']->access->roles['registered'] = 'registered';
  cache::$data['data--pages-user-logout']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-user-logout']->content['block_menu_main']->region = 'main_menu';
  cache::$data['data--pages-user-logout']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-user-logout']->content['block_menu_main']->dpath = 'trees/core/main';
  cache::$data['data--pages-user-logout']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-user-logout']->content['block_menu_user']->region = 'head';
  cache::$data['data--pages-user-logout']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-user-logout']->content['block_menu_user']->handler = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-logout']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-user-logout']->content['block_logo']->region = 'head';
  cache::$data['data--pages-user-logout']->content['block_logo']->type = 'link';
  cache::$data['data--pages-user-logout']->content['block_logo']->dpath = 'blocks/page/logo';
  cache::$data['data--pages-user-logout']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-user-logout']->content['block_title']->region = 'title';
  cache::$data['data--pages-user-logout']->content['block_title']->type = 'code';
  cache::$data['data--pages-user-logout']->content['block_title']->handler = '\\effcore\\modules\\page\\events_page::on_show_block_title';
  cache::$data['data--pages-user-logout']->content['form_logout'] = new \stdClass();
  cache::$data['data--pages-user-logout']->content['form_logout']->region = 'content';
  cache::$data['data--pages-user-logout']->content['form_logout']->type = 'link';
  cache::$data['data--pages-user-logout']->content['form_logout']->dpath = 'forms/user/logout';

}
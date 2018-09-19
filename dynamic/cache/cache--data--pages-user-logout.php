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
  cache::$data['data--pages-user-logout']->content['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-user-logout']->content['menu_main']->region = 'main_menu';
  cache::$data['data--pages-user-logout']->content['menu_main']->type = 'link';
  cache::$data['data--pages-user-logout']->content['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-user-logout']->content['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-user-logout']->content['menu_user']->region = 'head';
  cache::$data['data--pages-user-logout']->content['menu_user']->type = 'code';
  cache::$data['data--pages-user-logout']->content['menu_user']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-logout']->content['logo'] = new \effcore\page_part();
  cache::$data['data--pages-user-logout']->content['logo']->region = 'head';
  cache::$data['data--pages-user-logout']->content['logo']->type = 'link';
  cache::$data['data--pages-user-logout']->content['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-user-logout']->content['title'] = new \effcore\page_part();
  cache::$data['data--pages-user-logout']->content['title']->region = 'title';
  cache::$data['data--pages-user-logout']->content['title']->type = 'code';
  cache::$data['data--pages-user-logout']->content['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-user-logout']->content['form_logout'] = new \effcore\page_part();
  cache::$data['data--pages-user-logout']->content['form_logout']->type = 'link';
  cache::$data['data--pages-user-logout']->content['form_logout']->source = 'forms/user/logout';

}
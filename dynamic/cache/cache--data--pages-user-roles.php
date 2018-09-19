<?php

namespace effcore { # cache for data--pages-user-roles

  cache::$data['data--pages-user-roles'] = new \effcore\page();
  cache::$data['data--pages-user-roles']->title = 'Roles';
  cache::$data['data--pages-user-roles']->https = true;
  cache::$data['data--pages-user-roles']->display = new \stdClass();
  cache::$data['data--pages-user-roles']->display->check = 'url';
  cache::$data['data--pages-user-roles']->display->where = 'path';
  cache::$data['data--pages-user-roles']->display->match = '%^/manage/roles$%';
  cache::$data['data--pages-user-roles']->access = new \stdClass();
  cache::$data['data--pages-user-roles']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-user-roles']->content['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-user-roles']->content['menu_main']->region = 'main_menu';
  cache::$data['data--pages-user-roles']->content['menu_main']->type = 'link';
  cache::$data['data--pages-user-roles']->content['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-user-roles']->content['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-user-roles']->content['menu_user']->region = 'head';
  cache::$data['data--pages-user-roles']->content['menu_user']->type = 'code';
  cache::$data['data--pages-user-roles']->content['menu_user']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-roles']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-user-roles']->content['block_logo']->region = 'head';
  cache::$data['data--pages-user-roles']->content['block_logo']->type = 'link';
  cache::$data['data--pages-user-roles']->content['block_logo']->dpath = 'blocks/page/logo';
  cache::$data['data--pages-user-roles']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-user-roles']->content['block_title']->region = 'title';
  cache::$data['data--pages-user-roles']->content['block_title']->type = 'code';
  cache::$data['data--pages-user-roles']->content['block_title']->handler = '\\effcore\\modules\\page\\events_page::on_show_block_title';
  cache::$data['data--pages-user-roles']->content['block_roles'] = new \stdClass();
  cache::$data['data--pages-user-roles']->content['block_roles']->region = 'content';
  cache::$data['data--pages-user-roles']->content['block_roles']->type = 'code';
  cache::$data['data--pages-user-roles']->content['block_roles']->handler = '\\effcore\\modules\\user\\events_page::on_show_block_roles';

}
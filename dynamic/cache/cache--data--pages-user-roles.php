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
  cache::$data['data--pages-user-roles']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-user-roles']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-user-roles']->children['menu_main']->type = 'link';
  cache::$data['data--pages-user-roles']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-user-roles']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-user-roles']->children['menu_user']->region = 'head';
  cache::$data['data--pages-user-roles']->children['menu_user']->type = 'code';
  cache::$data['data--pages-user-roles']->children['menu_user']->source = '\\effcore\\modules\\user\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-roles']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-user-roles']->children['logo']->region = 'head';
  cache::$data['data--pages-user-roles']->children['logo']->type = 'link';
  cache::$data['data--pages-user-roles']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-user-roles']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-user-roles']->children['title']->region = 'title';
  cache::$data['data--pages-user-roles']->children['title']->type = 'code';
  cache::$data['data--pages-user-roles']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-user-roles']->children['block_roles'] = new \effcore\page_part();
  cache::$data['data--pages-user-roles']->children['block_roles']->type = 'code';
  cache::$data['data--pages-user-roles']->children['block_roles']->source = '\\effcore\\modules\\user\\events_page::on_show_block_roles';

}
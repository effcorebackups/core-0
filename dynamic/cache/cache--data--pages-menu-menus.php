<?php

namespace effcore { # cache for data--pages-menu-menus

  cache::$data['data--pages-menu-menus'] = new \effcore\page();
  cache::$data['data--pages-menu-menus']->title = 'Menus';
  cache::$data['data--pages-menu-menus']->https = true;
  cache::$data['data--pages-menu-menus']->display = new \stdClass();
  cache::$data['data--pages-menu-menus']->display->check = 'url';
  cache::$data['data--pages-menu-menus']->display->where = 'path';
  cache::$data['data--pages-menu-menus']->display->match = '%^/manage/menus$%';
  cache::$data['data--pages-menu-menus']->access = new \stdClass();
  cache::$data['data--pages-menu-menus']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-menu-menus']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-menu-menus']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-menu-menus']->children['menu_main']->type = 'link';
  cache::$data['data--pages-menu-menus']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-menu-menus']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-menu-menus']->children['menu_user']->region = 'head';
  cache::$data['data--pages-menu-menus']->children['menu_user']->type = 'code';
  cache::$data['data--pages-menu-menus']->children['menu_user']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-menu-menus']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-menu-menus']->children['logo']->region = 'head';
  cache::$data['data--pages-menu-menus']->children['logo']->type = 'link';
  cache::$data['data--pages-menu-menus']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-menu-menus']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-menu-menus']->children['title']->region = 'title';
  cache::$data['data--pages-menu-menus']->children['title']->type = 'code';
  cache::$data['data--pages-menu-menus']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';

}
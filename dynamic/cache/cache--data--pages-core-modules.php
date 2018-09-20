<?php

namespace effcore { # cache for data--pages-core-modules

  cache::$data['data--pages-core-modules'] = new \effcore\page();
  cache::$data['data--pages-core-modules']->title = 'Modules';
  cache::$data['data--pages-core-modules']->https = true;
  cache::$data['data--pages-core-modules']->display = new \stdClass();
  cache::$data['data--pages-core-modules']->display->check = 'url';
  cache::$data['data--pages-core-modules']->display->where = 'path';
  cache::$data['data--pages-core-modules']->display->match = '%^/manage/modules$%';
  cache::$data['data--pages-core-modules']->access = new \stdClass();
  cache::$data['data--pages-core-modules']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-core-modules']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-core-modules']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-core-modules']->children['menu_main']->type = 'link';
  cache::$data['data--pages-core-modules']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-core-modules']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-core-modules']->children['menu_user']->region = 'head';
  cache::$data['data--pages-core-modules']->children['menu_user']->type = 'code';
  cache::$data['data--pages-core-modules']->children['menu_user']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-core-modules']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-core-modules']->children['logo']->region = 'head';
  cache::$data['data--pages-core-modules']->children['logo']->type = 'link';
  cache::$data['data--pages-core-modules']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-core-modules']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-core-modules']->children['title']->region = 'title';
  cache::$data['data--pages-core-modules']->children['title']->type = 'code';
  cache::$data['data--pages-core-modules']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-core-modules']->children['block_modules'] = new \effcore\page_part();
  cache::$data['data--pages-core-modules']->children['block_modules']->type = 'code';
  cache::$data['data--pages-core-modules']->children['block_modules']->source = '\\effcore\\modules\\core\\events_page::on_show_block_modules';

}
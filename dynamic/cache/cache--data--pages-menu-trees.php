<?php

namespace effcore { # cache for data--pages-menu-trees

  cache::$data['data--pages-menu-trees'] = new \effcore\page();
  cache::$data['data--pages-menu-trees']->title = 'Trees';
  cache::$data['data--pages-menu-trees']->https = true;
  cache::$data['data--pages-menu-trees']->display = new \stdClass();
  cache::$data['data--pages-menu-trees']->display->check = 'url';
  cache::$data['data--pages-menu-trees']->display->where = 'path';
  cache::$data['data--pages-menu-trees']->display->match = '%^/manage/trees$%';
  cache::$data['data--pages-menu-trees']->access = new \stdClass();
  cache::$data['data--pages-menu-trees']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-menu-trees']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-menu-trees']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-menu-trees']->children['menu_main']->type = 'link';
  cache::$data['data--pages-menu-trees']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-menu-trees']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-menu-trees']->children['menu_user']->region = 'head';
  cache::$data['data--pages-menu-trees']->children['menu_user']->type = 'code';
  cache::$data['data--pages-menu-trees']->children['menu_user']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-menu-trees']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-menu-trees']->children['logo']->region = 'head';
  cache::$data['data--pages-menu-trees']->children['logo']->type = 'link';
  cache::$data['data--pages-menu-trees']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-menu-trees']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-menu-trees']->children['title']->region = 'title';
  cache::$data['data--pages-menu-trees']->children['title']->type = 'code';
  cache::$data['data--pages-menu-trees']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-menu-trees']->children['block_trees'] = new \effcore\page_part();
  cache::$data['data--pages-menu-trees']->children['block_trees']->type = 'code';
  cache::$data['data--pages-menu-trees']->children['block_trees']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_trees';

}
<?php

namespace effcore { # cache for data--pages-core-info

  cache::$data['data--pages-core-info'] = new \effcore\page();
  cache::$data['data--pages-core-info']->title = 'Information';
  cache::$data['data--pages-core-info']->https = true;
  cache::$data['data--pages-core-info']->display = new \stdClass();
  cache::$data['data--pages-core-info']->display->check = 'url';
  cache::$data['data--pages-core-info']->display->where = 'path';
  cache::$data['data--pages-core-info']->display->match = '%^/manage/info$%';
  cache::$data['data--pages-core-info']->access = new \stdClass();
  cache::$data['data--pages-core-info']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-core-info']->content['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-core-info']->content['menu_main']->region = 'main_menu';
  cache::$data['data--pages-core-info']->content['menu_main']->type = 'link';
  cache::$data['data--pages-core-info']->content['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-core-info']->content['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-core-info']->content['menu_user']->region = 'head';
  cache::$data['data--pages-core-info']->content['menu_user']->type = 'code';
  cache::$data['data--pages-core-info']->content['menu_user']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-core-info']->content['logo'] = new \effcore\page_part();
  cache::$data['data--pages-core-info']->content['logo']->region = 'head';
  cache::$data['data--pages-core-info']->content['logo']->type = 'link';
  cache::$data['data--pages-core-info']->content['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-core-info']->content['title'] = new \effcore\page_part();
  cache::$data['data--pages-core-info']->content['title']->region = 'title';
  cache::$data['data--pages-core-info']->content['title']->type = 'code';
  cache::$data['data--pages-core-info']->content['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-core-info']->content['block_info'] = new \stdClass();
  cache::$data['data--pages-core-info']->content['block_info']->region = 'content';
  cache::$data['data--pages-core-info']->content['block_info']->type = 'code';
  cache::$data['data--pages-core-info']->content['block_info']->handler = '\\effcore\\modules\\core\\events_page::on_show_block_info';

}
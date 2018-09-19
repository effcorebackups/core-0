<?php

namespace effcore { # cache for data--pages-core-front

  cache::$data['data--pages-core-front'] = new \effcore\page();
  cache::$data['data--pages-core-front']->title = 'Front page';
  cache::$data['data--pages-core-front']->display = new \stdClass();
  cache::$data['data--pages-core-front']->display->check = 'url';
  cache::$data['data--pages-core-front']->display->where = 'path';
  cache::$data['data--pages-core-front']->display->match = '%^/$%';
  cache::$data['data--pages-core-front']->content['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-core-front']->content['menu_main']->region = 'main_menu';
  cache::$data['data--pages-core-front']->content['menu_main']->type = 'link';
  cache::$data['data--pages-core-front']->content['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-core-front']->content['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-core-front']->content['menu_user']->region = 'head';
  cache::$data['data--pages-core-front']->content['menu_user']->type = 'code';
  cache::$data['data--pages-core-front']->content['menu_user']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-core-front']->content['logo'] = new \effcore\page_part();
  cache::$data['data--pages-core-front']->content['logo']->region = 'head';
  cache::$data['data--pages-core-front']->content['logo']->type = 'link';
  cache::$data['data--pages-core-front']->content['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-core-front']->content['title'] = new \effcore\page_part();
  cache::$data['data--pages-core-front']->content['title']->region = 'title';
  cache::$data['data--pages-core-front']->content['title']->type = 'code';
  cache::$data['data--pages-core-front']->content['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-core-front']->content['block_wellcome'] = new \stdClass();
  cache::$data['data--pages-core-front']->content['block_wellcome']->region = 'content';
  cache::$data['data--pages-core-front']->content['block_wellcome']->type = 'text';
  cache::$data['data--pages-core-front']->content['block_wellcome']->content = 'Wellcome to our site!';

}
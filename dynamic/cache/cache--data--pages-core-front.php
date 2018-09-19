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
  cache::$data['data--pages-core-front']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-core-front']->content['block_menu_user']->region = 'head';
  cache::$data['data--pages-core-front']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-core-front']->content['block_menu_user']->handler = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-core-front']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-core-front']->content['block_logo']->region = 'head';
  cache::$data['data--pages-core-front']->content['block_logo']->type = 'link';
  cache::$data['data--pages-core-front']->content['block_logo']->dpath = 'blocks/page/logo';
  cache::$data['data--pages-core-front']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-core-front']->content['block_title']->region = 'title';
  cache::$data['data--pages-core-front']->content['block_title']->type = 'code';
  cache::$data['data--pages-core-front']->content['block_title']->handler = '\\effcore\\modules\\page\\events_page::on_show_block_title';
  cache::$data['data--pages-core-front']->content['block_wellcome'] = new \stdClass();
  cache::$data['data--pages-core-front']->content['block_wellcome']->region = 'content';
  cache::$data['data--pages-core-front']->content['block_wellcome']->type = 'text';
  cache::$data['data--pages-core-front']->content['block_wellcome']->content = 'Wellcome to our site!';

}
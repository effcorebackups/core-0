<?php

namespace effcore { # cache for data--pages-demo-demo

  cache::$data['data--pages-demo-demo'] = new \effcore\page();
  cache::$data['data--pages-demo-demo']->title = 'Demo';
  cache::$data['data--pages-demo-demo']->https = true;
  cache::$data['data--pages-demo-demo']->display = new \stdClass();
  cache::$data['data--pages-demo-demo']->display->check = 'url';
  cache::$data['data--pages-demo-demo']->display->where = 'path';
  cache::$data['data--pages-demo-demo']->display->match = '%^(?<base>/develop/demo)(/(?<tabs>[a-z0-9_/]+)|)$%';
  cache::$data['data--pages-demo-demo']->access = new \stdClass();
  cache::$data['data--pages-demo-demo']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-demo-demo']->content['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-demo-demo']->content['menu_main']->region = 'main_menu';
  cache::$data['data--pages-demo-demo']->content['menu_main']->type = 'link';
  cache::$data['data--pages-demo-demo']->content['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-demo-demo']->content['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-demo-demo']->content['menu_user']->region = 'head';
  cache::$data['data--pages-demo-demo']->content['menu_user']->type = 'code';
  cache::$data['data--pages-demo-demo']->content['menu_user']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-demo-demo']->content['logo'] = new \effcore\page_part();
  cache::$data['data--pages-demo-demo']->content['logo']->region = 'head';
  cache::$data['data--pages-demo-demo']->content['logo']->type = 'link';
  cache::$data['data--pages-demo-demo']->content['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-demo-demo']->content['title'] = new \effcore\page_part();
  cache::$data['data--pages-demo-demo']->content['title']->region = 'title';
  cache::$data['data--pages-demo-demo']->content['title']->type = 'code';
  cache::$data['data--pages-demo-demo']->content['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-demo-demo']->content['tabs_demo'] = new \stdClass();
  cache::$data['data--pages-demo-demo']->content['tabs_demo']->region = 'tabs';
  cache::$data['data--pages-demo-demo']->content['tabs_demo']->type = 'link';
  cache::$data['data--pages-demo-demo']->content['tabs_demo']->dpath = 'tabs/demo/demo';
  cache::$data['data--pages-demo-demo']->content['block_menu_demo'] = new \stdClass();
  cache::$data['data--pages-demo-demo']->content['block_menu_demo']->region = 'content';
  cache::$data['data--pages-demo-demo']->content['block_menu_demo']->type = 'link';
  cache::$data['data--pages-demo-demo']->content['block_menu_demo']->dpath = 'trees/demo/demo';
  cache::$data['data--pages-demo-demo']->content['form_demo'] = new \stdClass();
  cache::$data['data--pages-demo-demo']->content['form_demo']->region = 'content';
  cache::$data['data--pages-demo-demo']->content['form_demo']->type = 'link';
  cache::$data['data--pages-demo-demo']->content['form_demo']->dpath = 'forms/demo/demo';
  cache::$data['data--pages-demo-demo']->content['block_demo_static'] = new \stdClass();
  cache::$data['data--pages-demo-demo']->content['block_demo_static']->region = 'content';
  cache::$data['data--pages-demo-demo']->content['block_demo_static']->type = 'link';
  cache::$data['data--pages-demo-demo']->content['block_demo_static']->dpath = 'blocks/demo/demo';
  cache::$data['data--pages-demo-demo']->content['block_demo_dynamic'] = new \stdClass();
  cache::$data['data--pages-demo-demo']->content['block_demo_dynamic']->region = 'content';
  cache::$data['data--pages-demo-demo']->content['block_demo_dynamic']->type = 'code';
  cache::$data['data--pages-demo-demo']->content['block_demo_dynamic']->handler = '\\effcore\\modules\\demo\\events_page::on_show_block_demo_dynamic';
  cache::$data['data--pages-demo-demo']->content['block_demo_canvas'] = new \stdClass();
  cache::$data['data--pages-demo-demo']->content['block_demo_canvas']->region = 'content';
  cache::$data['data--pages-demo-demo']->content['block_demo_canvas']->type = 'code';
  cache::$data['data--pages-demo-demo']->content['block_demo_canvas']->handler = '\\effcore\\modules\\demo\\events_page::on_show_block_demo_canvas';
  cache::$data['data--pages-demo-demo']->content['block_demo_diagrams'] = new \stdClass();
  cache::$data['data--pages-demo-demo']->content['block_demo_diagrams']->region = 'content';
  cache::$data['data--pages-demo-demo']->content['block_demo_diagrams']->type = 'code';
  cache::$data['data--pages-demo-demo']->content['block_demo_diagrams']->handler = '\\effcore\\modules\\demo\\events_page::on_show_block_demo_diagrams';

}
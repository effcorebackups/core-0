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
  cache::$data['data--pages-demo-demo']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-demo-demo']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-demo-demo']->children['menu_main']->type = 'link';
  cache::$data['data--pages-demo-demo']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-demo-demo']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-demo-demo']->children['menu_user']->region = 'head';
  cache::$data['data--pages-demo-demo']->children['menu_user']->type = 'code';
  cache::$data['data--pages-demo-demo']->children['menu_user']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-demo-demo']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-demo-demo']->children['logo']->region = 'head';
  cache::$data['data--pages-demo-demo']->children['logo']->type = 'link';
  cache::$data['data--pages-demo-demo']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-demo-demo']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-demo-demo']->children['title']->region = 'title';
  cache::$data['data--pages-demo-demo']->children['title']->type = 'code';
  cache::$data['data--pages-demo-demo']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-demo-demo']->children['tabs_demo'] = new \effcore\page_part();
  cache::$data['data--pages-demo-demo']->children['tabs_demo']->region = 'tabs';
  cache::$data['data--pages-demo-demo']->children['tabs_demo']->type = 'link';
  cache::$data['data--pages-demo-demo']->children['tabs_demo']->source = 'tabs/demo/demo';
  cache::$data['data--pages-demo-demo']->children['menu_demo'] = new \effcore\page_part();
  cache::$data['data--pages-demo-demo']->children['menu_demo']->type = 'link';
  cache::$data['data--pages-demo-demo']->children['menu_demo']->source = 'trees/demo/demo';
  cache::$data['data--pages-demo-demo']->children['form_demo'] = new \effcore\page_part();
  cache::$data['data--pages-demo-demo']->children['form_demo']->type = 'link';
  cache::$data['data--pages-demo-demo']->children['form_demo']->source = 'forms/demo/demo';
  cache::$data['data--pages-demo-demo']->children['block_demo_static'] = new \effcore\page_part();
  cache::$data['data--pages-demo-demo']->children['block_demo_static']->type = 'link';
  cache::$data['data--pages-demo-demo']->children['block_demo_static']->source = 'blocks/demo/demo';
  cache::$data['data--pages-demo-demo']->children['block_demo_dynamic'] = new \effcore\page_part();
  cache::$data['data--pages-demo-demo']->children['block_demo_dynamic']->type = 'code';
  cache::$data['data--pages-demo-demo']->children['block_demo_dynamic']->source = '\\effcore\\modules\\demo\\events_page::on_show_block_demo_dynamic';
  cache::$data['data--pages-demo-demo']->children['block_demo_canvas'] = new \effcore\page_part();
  cache::$data['data--pages-demo-demo']->children['block_demo_canvas']->type = 'code';
  cache::$data['data--pages-demo-demo']->children['block_demo_canvas']->source = '\\effcore\\modules\\demo\\events_page::on_show_block_demo_canvas';
  cache::$data['data--pages-demo-demo']->children['block_demo_diagrams'] = new \effcore\page_part();
  cache::$data['data--pages-demo-demo']->children['block_demo_diagrams']->type = 'code';
  cache::$data['data--pages-demo-demo']->children['block_demo_diagrams']->source = '\\effcore\\modules\\demo\\events_page::on_show_block_demo_diagrams';

}
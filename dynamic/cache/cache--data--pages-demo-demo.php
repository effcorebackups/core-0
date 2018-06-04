<?php

namespace effcore { # cache for data--pages-demo-demo

  cache::$data['data--pages-demo-demo'] = new \effcore\page();
  cache::$data['data--pages-demo-demo']->title = 'Demo';
  cache::$data['data--pages-demo-demo']->https = true;
  cache::$data['data--pages-demo-demo']->display = new \stdClass();
  cache::$data['data--pages-demo-demo']->display->check = 'url';
  cache::$data['data--pages-demo-demo']->display->where = 'path';
  cache::$data['data--pages-demo-demo']->display->match = '%^/develop/demo$%';
  cache::$data['data--pages-demo-demo']->access = new \stdClass();
  cache::$data['data--pages-demo-demo']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-demo-demo']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-demo-demo']->content['block_menu_main']->region = 'main_menu';
  cache::$data['data--pages-demo-demo']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-demo-demo']->content['block_menu_main']->dpath = 'trees/core/main';
  cache::$data['data--pages-demo-demo']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-demo-demo']->content['block_menu_user']->region = 'head';
  cache::$data['data--pages-demo-demo']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-demo-demo']->content['block_menu_user']->handler = '\\effcore\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-demo-demo']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-demo-demo']->content['block_logo']->region = 'head';
  cache::$data['data--pages-demo-demo']->content['block_logo']->type = 'link';
  cache::$data['data--pages-demo-demo']->content['block_logo']->dpath = 'blocks/page/logo';
  cache::$data['data--pages-demo-demo']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-demo-demo']->content['block_title']->region = 'title';
  cache::$data['data--pages-demo-demo']->content['block_title']->type = 'code';
  cache::$data['data--pages-demo-demo']->content['block_title']->handler = '\\effcore\\events_page::on_show_block_title';
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

}
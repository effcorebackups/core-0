<?php

namespace effectivecore { # cache for data--pages-develop-demo

  cache::$data['data--pages-develop-demo'] = new \effectivecore\page();
  cache::$data['data--pages-develop-demo']->title = 'Demo';
  cache::$data['data--pages-develop-demo']->https = true;
  cache::$data['data--pages-develop-demo']->display = new \stdClass();
  cache::$data['data--pages-develop-demo']->display->check = 'url';
  cache::$data['data--pages-develop-demo']->display->match = '%^/develop/demo$%';
  cache::$data['data--pages-develop-demo']->access = new \stdClass();
  cache::$data['data--pages-develop-demo']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-develop-demo']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-develop-demo']->content['block_menu_main']->region = 'head_1';
  cache::$data['data--pages-develop-demo']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-develop-demo']->content['block_menu_main']->dpath = 'tree/core/main';
  cache::$data['data--pages-develop-demo']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-develop-demo']->content['block_menu_user']->region = 'head_2';
  cache::$data['data--pages-develop-demo']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-develop-demo']->content['block_menu_user']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-develop-demo']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-develop-demo']->content['block_logo']->region = 'head_3';
  cache::$data['data--pages-develop-demo']->content['block_logo']->type = 'code';
  cache::$data['data--pages-develop-demo']->content['block_logo']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_logo';
  cache::$data['data--pages-develop-demo']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-develop-demo']->content['block_title']->region = 'main_1';
  cache::$data['data--pages-develop-demo']->content['block_title']->type = 'code';
  cache::$data['data--pages-develop-demo']->content['block_title']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_title';
  cache::$data['data--pages-develop-demo']->content['form_demo'] = new \stdClass();
  cache::$data['data--pages-develop-demo']->content['form_demo']->region = 'main_1';
  cache::$data['data--pages-develop-demo']->content['form_demo']->type = 'link';
  cache::$data['data--pages-develop-demo']->content['form_demo']->dpath = 'forms/develop/demo';
  cache::$data['data--pages-develop-demo']->content['block_demo_static'] = new \stdClass();
  cache::$data['data--pages-develop-demo']->content['block_demo_static']->region = 'main_1';
  cache::$data['data--pages-develop-demo']->content['block_demo_static']->type = 'link';
  cache::$data['data--pages-develop-demo']->content['block_demo_static']->dpath = 'blocks/develop/demo';
  cache::$data['data--pages-develop-demo']->content['block_demo_dynamic'] = new \stdClass();
  cache::$data['data--pages-develop-demo']->content['block_demo_dynamic']->region = 'main_1';
  cache::$data['data--pages-develop-demo']->content['block_demo_dynamic']->type = 'code';
  cache::$data['data--pages-develop-demo']->content['block_demo_dynamic']->handler = '\\effectivecore\\modules\\develop\\events_page::on_show_block_demo_dynamic';
  cache::$data['data--pages-develop-demo']->content['block_copyright'] = new \stdClass();
  cache::$data['data--pages-develop-demo']->content['block_copyright']->region = 'copyright';
  cache::$data['data--pages-develop-demo']->content['block_copyright']->type = 'code';
  cache::$data['data--pages-develop-demo']->content['block_copyright']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_copyright';

}
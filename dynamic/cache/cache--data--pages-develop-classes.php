<?php

namespace effcore { # cache for data--pages-develop-classes

  cache::$data['data--pages-develop-classes'] = new \effcore\page();
  cache::$data['data--pages-develop-classes']->title = 'Classes';
  cache::$data['data--pages-develop-classes']->https = true;
  cache::$data['data--pages-develop-classes']->display = new \stdClass();
  cache::$data['data--pages-develop-classes']->display->check = 'url';
  cache::$data['data--pages-develop-classes']->display->match = '%^/develop/classes$%';
  cache::$data['data--pages-develop-classes']->access = new \stdClass();
  cache::$data['data--pages-develop-classes']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-develop-classes']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-develop-classes']->content['block_menu_main']->region = 'main_menu';
  cache::$data['data--pages-develop-classes']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-develop-classes']->content['block_menu_main']->dpath = 'trees/core/main';
  cache::$data['data--pages-develop-classes']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-develop-classes']->content['block_menu_user']->region = 'head';
  cache::$data['data--pages-develop-classes']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-develop-classes']->content['block_menu_user']->handler = '\\effcore\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-develop-classes']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-develop-classes']->content['block_logo']->region = 'head';
  cache::$data['data--pages-develop-classes']->content['block_logo']->type = 'code';
  cache::$data['data--pages-develop-classes']->content['block_logo']->handler = '\\effcore\\events_page::on_show_block_logo';
  cache::$data['data--pages-develop-classes']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-develop-classes']->content['block_title']->region = 'content';
  cache::$data['data--pages-develop-classes']->content['block_title']->type = 'code';
  cache::$data['data--pages-develop-classes']->content['block_title']->handler = '\\effcore\\events_page::on_show_block_title';
  cache::$data['data--pages-develop-classes']->content['block_classes'] = new \stdClass();
  cache::$data['data--pages-develop-classes']->content['block_classes']->region = 'content';
  cache::$data['data--pages-develop-classes']->content['block_classes']->type = 'code';
  cache::$data['data--pages-develop-classes']->content['block_classes']->handler = '\\effcore\\modules\\develop\\events_page::on_show_block_classes';

}
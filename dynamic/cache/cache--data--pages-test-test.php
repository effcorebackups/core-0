<?php

namespace effcore { # cache for data--pages-test-test

  cache::$data['data--pages-test-test'] = new \effcore\page();
  cache::$data['data--pages-test-test']->title = 'Test';
  cache::$data['data--pages-test-test']->https = true;
  cache::$data['data--pages-test-test']->display = new \stdClass();
  cache::$data['data--pages-test-test']->display->check = 'url';
  cache::$data['data--pages-test-test']->display->where = 'path';
  cache::$data['data--pages-test-test']->display->match = '%^/develop/test$%';
  cache::$data['data--pages-test-test']->access = new \stdClass();
  cache::$data['data--pages-test-test']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-test-test']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-test-test']->content['block_menu_main']->region = 'main_menu';
  cache::$data['data--pages-test-test']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-test-test']->content['block_menu_main']->dpath = 'trees/core/main';
  cache::$data['data--pages-test-test']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-test-test']->content['block_menu_user']->region = 'head';
  cache::$data['data--pages-test-test']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-test-test']->content['block_menu_user']->handler = '\\effcore\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-test-test']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-test-test']->content['block_logo']->region = 'head';
  cache::$data['data--pages-test-test']->content['block_logo']->type = 'link';
  cache::$data['data--pages-test-test']->content['block_logo']->dpath = 'blocks/page/logo';
  cache::$data['data--pages-test-test']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-test-test']->content['block_title']->region = 'title';
  cache::$data['data--pages-test-test']->content['block_title']->type = 'code';
  cache::$data['data--pages-test-test']->content['block_title']->handler = '\\effcore\\events_page::on_show_block_title';
  cache::$data['data--pages-test-test']->content['form_test'] = new \stdClass();
  cache::$data['data--pages-test-test']->content['form_test']->region = 'content';
  cache::$data['data--pages-test-test']->content['form_test']->type = 'link';
  cache::$data['data--pages-test-test']->content['form_test']->dpath = 'forms/test/test';

}
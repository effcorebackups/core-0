<?php

namespace effcore { # cache for data--pages-test-tests

  cache::$data['data--pages-test-tests'] = new \effcore\page();
  cache::$data['data--pages-test-tests']->title = 'Tests';
  cache::$data['data--pages-test-tests']->https = true;
  cache::$data['data--pages-test-tests']->display = new \stdClass();
  cache::$data['data--pages-test-tests']->display->check = 'url';
  cache::$data['data--pages-test-tests']->display->where = 'path';
  cache::$data['data--pages-test-tests']->display->match = '%^/develop/tests$%';
  cache::$data['data--pages-test-tests']->access = new \stdClass();
  cache::$data['data--pages-test-tests']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-test-tests']->content['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-test-tests']->content['menu_main']->region = 'main_menu';
  cache::$data['data--pages-test-tests']->content['menu_main']->type = 'link';
  cache::$data['data--pages-test-tests']->content['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-test-tests']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-test-tests']->content['block_menu_user']->region = 'head';
  cache::$data['data--pages-test-tests']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-test-tests']->content['block_menu_user']->handler = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-test-tests']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-test-tests']->content['block_logo']->region = 'head';
  cache::$data['data--pages-test-tests']->content['block_logo']->type = 'link';
  cache::$data['data--pages-test-tests']->content['block_logo']->dpath = 'blocks/page/logo';
  cache::$data['data--pages-test-tests']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-test-tests']->content['block_title']->region = 'title';
  cache::$data['data--pages-test-tests']->content['block_title']->type = 'code';
  cache::$data['data--pages-test-tests']->content['block_title']->handler = '\\effcore\\modules\\page\\events_page::on_show_block_title';
  cache::$data['data--pages-test-tests']->content['form_test'] = new \stdClass();
  cache::$data['data--pages-test-tests']->content['form_test']->region = 'content';
  cache::$data['data--pages-test-tests']->content['form_test']->type = 'link';
  cache::$data['data--pages-test-tests']->content['form_test']->dpath = 'forms/test/test';

}
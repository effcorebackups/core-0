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
  cache::$data['data--pages-test-tests']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-test-tests']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-test-tests']->children['menu_main']->type = 'link';
  cache::$data['data--pages-test-tests']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-test-tests']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-test-tests']->children['menu_user']->region = 'head';
  cache::$data['data--pages-test-tests']->children['menu_user']->type = 'code';
  cache::$data['data--pages-test-tests']->children['menu_user']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-test-tests']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-test-tests']->children['logo']->region = 'head';
  cache::$data['data--pages-test-tests']->children['logo']->type = 'link';
  cache::$data['data--pages-test-tests']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-test-tests']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-test-tests']->children['title']->region = 'title';
  cache::$data['data--pages-test-tests']->children['title']->type = 'code';
  cache::$data['data--pages-test-tests']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-test-tests']->children['form_test'] = new \effcore\page_part();
  cache::$data['data--pages-test-tests']->children['form_test']->type = 'link';
  cache::$data['data--pages-test-tests']->children['form_test']->source = 'forms/test/test';

}
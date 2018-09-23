<?php

namespace effcore { # cache for data--pages-core-install

  cache::$data['data--pages-core-install'] = new \effcore\page();
  cache::$data['data--pages-core-install']->title = 'Installation';
  cache::$data['data--pages-core-install']->https = true;
  cache::$data['data--pages-core-install']->display = new \stdClass();
  cache::$data['data--pages-core-install']->display->check = 'url';
  cache::$data['data--pages-core-install']->display->where = 'path';
  cache::$data['data--pages-core-install']->display->match = '%^/install$%';
  cache::$data['data--pages-core-install']->access = new \stdClass();
  cache::$data['data--pages-core-install']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--pages-core-install']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-core-install']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-core-install']->children['menu_main']->type = 'link';
  cache::$data['data--pages-core-install']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-core-install']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-core-install']->children['menu_user']->region = 'head';
  cache::$data['data--pages-core-install']->children['menu_user']->type = 'code';
  cache::$data['data--pages-core-install']->children['menu_user']->source = '\\effcore\\modules\\user\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-core-install']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-core-install']->children['logo']->region = 'head';
  cache::$data['data--pages-core-install']->children['logo']->type = 'link';
  cache::$data['data--pages-core-install']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-core-install']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-core-install']->children['title']->region = 'title';
  cache::$data['data--pages-core-install']->children['title']->type = 'code';
  cache::$data['data--pages-core-install']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-core-install']->children['form_install'] = new \effcore\page_part();
  cache::$data['data--pages-core-install']->children['form_install']->type = 'link';
  cache::$data['data--pages-core-install']->children['form_install']->source = 'forms/core/install';

}
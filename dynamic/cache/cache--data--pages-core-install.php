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
  cache::$data['data--pages-core-install']->content['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-core-install']->content['menu_main']->region = 'main_menu';
  cache::$data['data--pages-core-install']->content['menu_main']->type = 'link';
  cache::$data['data--pages-core-install']->content['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-core-install']->content['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-core-install']->content['menu_user']->region = 'head';
  cache::$data['data--pages-core-install']->content['menu_user']->type = 'code';
  cache::$data['data--pages-core-install']->content['menu_user']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-core-install']->content['logo'] = new \effcore\page_part();
  cache::$data['data--pages-core-install']->content['logo']->region = 'head';
  cache::$data['data--pages-core-install']->content['logo']->type = 'link';
  cache::$data['data--pages-core-install']->content['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-core-install']->content['title'] = new \effcore\page_part();
  cache::$data['data--pages-core-install']->content['title']->region = 'title';
  cache::$data['data--pages-core-install']->content['title']->type = 'code';
  cache::$data['data--pages-core-install']->content['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-core-install']->content['form_install'] = new \stdClass();
  cache::$data['data--pages-core-install']->content['form_install']->region = 'content';
  cache::$data['data--pages-core-install']->content['form_install']->type = 'link';
  cache::$data['data--pages-core-install']->content['form_install']->dpath = 'forms/core/install';

}
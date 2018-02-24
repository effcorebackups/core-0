<?php

namespace effectivecore { # cache for data--pages-core-install

  cache::$data['data--pages-core-install'] = new \effectivecore\page();
  cache::$data['data--pages-core-install']->title = 'Installation';
  cache::$data['data--pages-core-install']->https = true;
  cache::$data['data--pages-core-install']->display = new \stdClass();
  cache::$data['data--pages-core-install']->display->check = 'url';
  cache::$data['data--pages-core-install']->display->match = '%^/install$%';
  cache::$data['data--pages-core-install']->access = new \stdClass();
  cache::$data['data--pages-core-install']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--pages-core-install']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-core-install']->content['block_menu_main']->region = 'main_menu';
  cache::$data['data--pages-core-install']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-core-install']->content['block_menu_main']->dpath = 'trees/core/main';
  cache::$data['data--pages-core-install']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-core-install']->content['block_menu_user']->region = 'head_2';
  cache::$data['data--pages-core-install']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-core-install']->content['block_menu_user']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-core-install']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-core-install']->content['block_logo']->region = 'head_3';
  cache::$data['data--pages-core-install']->content['block_logo']->type = 'code';
  cache::$data['data--pages-core-install']->content['block_logo']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_logo';
  cache::$data['data--pages-core-install']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-core-install']->content['block_title']->region = 'main_1';
  cache::$data['data--pages-core-install']->content['block_title']->type = 'code';
  cache::$data['data--pages-core-install']->content['block_title']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_title';
  cache::$data['data--pages-core-install']->content['form_install'] = new \stdClass();
  cache::$data['data--pages-core-install']->content['form_install']->region = 'main_1';
  cache::$data['data--pages-core-install']->content['form_install']->type = 'link';
  cache::$data['data--pages-core-install']->content['form_install']->dpath = 'forms/core/install';

}
<?php

namespace effectivecore { # cache for data--pages-core-installation

  cache::$data['data--pages-core-installation'] = new \effectivecore\page();
  cache::$data['data--pages-core-installation']->title = 'Installation';
  cache::$data['data--pages-core-installation']->https = true;
  cache::$data['data--pages-core-installation']->display = new \stdClass();
  cache::$data['data--pages-core-installation']->display->check = 'url';
  cache::$data['data--pages-core-installation']->display->match = '%^/installation$%';
  cache::$data['data--pages-core-installation']->access = new \stdClass();
  cache::$data['data--pages-core-installation']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--pages-core-installation']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-core-installation']->content['block_menu_main']->region = 'head_1';
  cache::$data['data--pages-core-installation']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-core-installation']->content['block_menu_main']->dpath = 'tree/core/main';
  cache::$data['data--pages-core-installation']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-core-installation']->content['block_menu_user']->region = 'head_2';
  cache::$data['data--pages-core-installation']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-core-installation']->content['block_menu_user']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-core-installation']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-core-installation']->content['block_logo']->region = 'head_3';
  cache::$data['data--pages-core-installation']->content['block_logo']->type = 'code';
  cache::$data['data--pages-core-installation']->content['block_logo']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_logo';
  cache::$data['data--pages-core-installation']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-core-installation']->content['block_title']->region = 'main_1';
  cache::$data['data--pages-core-installation']->content['block_title']->type = 'code';
  cache::$data['data--pages-core-installation']->content['block_title']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_title';
  cache::$data['data--pages-core-installation']->content['form_installation'] = new \stdClass();
  cache::$data['data--pages-core-installation']->content['form_installation']->region = 'main_1';
  cache::$data['data--pages-core-installation']->content['form_installation']->type = 'link';
  cache::$data['data--pages-core-installation']->content['form_installation']->dpath = 'forms/core/installation';
  cache::$data['data--pages-core-installation']->content['block_copyright'] = new \stdClass();
  cache::$data['data--pages-core-installation']->content['block_copyright']->region = 'copyright';
  cache::$data['data--pages-core-installation']->content['block_copyright']->type = 'code';
  cache::$data['data--pages-core-installation']->content['block_copyright']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_copyright';

}
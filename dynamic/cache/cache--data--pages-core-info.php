<?php

namespace effectivecore { # cache for data--pages-core-info

  cache::$data['data--pages-core-info'] = new \effectivecore\page();
  cache::$data['data--pages-core-info']->title = 'Information';
  cache::$data['data--pages-core-info']->https = true;
  cache::$data['data--pages-core-info']->display = new \stdClass();
  cache::$data['data--pages-core-info']->display->check = 'url';
  cache::$data['data--pages-core-info']->display->match = '%^/admin/info$%';
  cache::$data['data--pages-core-info']->access = new \stdClass();
  cache::$data['data--pages-core-info']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-core-info']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-core-info']->content['block_menu_main']->region = 'main_menu';
  cache::$data['data--pages-core-info']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-core-info']->content['block_menu_main']->dpath = 'trees/core/main';
  cache::$data['data--pages-core-info']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-core-info']->content['block_menu_user']->region = 'head_2';
  cache::$data['data--pages-core-info']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-core-info']->content['block_menu_user']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-core-info']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-core-info']->content['block_logo']->region = 'head_3';
  cache::$data['data--pages-core-info']->content['block_logo']->type = 'code';
  cache::$data['data--pages-core-info']->content['block_logo']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_logo';
  cache::$data['data--pages-core-info']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-core-info']->content['block_title']->region = 'main_1';
  cache::$data['data--pages-core-info']->content['block_title']->type = 'code';
  cache::$data['data--pages-core-info']->content['block_title']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_title';
  cache::$data['data--pages-core-info']->content['block_info'] = new \stdClass();
  cache::$data['data--pages-core-info']->content['block_info']->region = 'main_1';
  cache::$data['data--pages-core-info']->content['block_info']->type = 'code';
  cache::$data['data--pages-core-info']->content['block_info']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_info';

}
<?php

namespace effectivecore { # cache for data--page-core-modules

  cache::$data['data--page-core-modules'] = new \effectivecore\page();
  cache::$data['data--page-core-modules']->title = 'Modules';
  cache::$data['data--page-core-modules']->https = true;
  cache::$data['data--page-core-modules']->display = new \stdClass();
  cache::$data['data--page-core-modules']->display->check = 'url';
  cache::$data['data--page-core-modules']->display->match = '%^/admin/modules$%';
  cache::$data['data--page-core-modules']->access = new \stdClass();
  cache::$data['data--page-core-modules']->access->roles['admins'] = 'admins';
  cache::$data['data--page-core-modules']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--page-core-modules']->content['block_menu_main']->region = 'head_1';
  cache::$data['data--page-core-modules']->content['block_menu_main']->type = 'link';
  cache::$data['data--page-core-modules']->content['block_menu_main']->dpath = 'tree/core/main';
  cache::$data['data--page-core-modules']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--page-core-modules']->content['block_menu_user']->region = 'head_2';
  cache::$data['data--page-core-modules']->content['block_menu_user']->type = 'code';
  cache::$data['data--page-core-modules']->content['block_menu_user']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_menu_user';
  cache::$data['data--page-core-modules']->content['block_logo'] = new \stdClass();
  cache::$data['data--page-core-modules']->content['block_logo']->region = 'head_3';
  cache::$data['data--page-core-modules']->content['block_logo']->type = 'code';
  cache::$data['data--page-core-modules']->content['block_logo']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_logo';
  cache::$data['data--page-core-modules']->content['block_title'] = new \stdClass();
  cache::$data['data--page-core-modules']->content['block_title']->region = 'main_1';
  cache::$data['data--page-core-modules']->content['block_title']->type = 'code';
  cache::$data['data--page-core-modules']->content['block_title']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_title';
  cache::$data['data--page-core-modules']->content['block_modules'] = new \stdClass();
  cache::$data['data--page-core-modules']->content['block_modules']->region = 'main_1';
  cache::$data['data--page-core-modules']->content['block_modules']->type = 'code';
  cache::$data['data--page-core-modules']->content['block_modules']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_modules';
  cache::$data['data--page-core-modules']->content['block_copyright'] = new \stdClass();
  cache::$data['data--page-core-modules']->content['block_copyright']->region = 'copyright';
  cache::$data['data--page-core-modules']->content['block_copyright']->type = 'code';
  cache::$data['data--page-core-modules']->content['block_copyright']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_copyright';

}
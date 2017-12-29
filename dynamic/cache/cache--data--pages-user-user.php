<?php

namespace effectivecore { # cache for data--pages-user-user

  cache::$data['data--pages-user-user'] = new \effectivecore\page();
  cache::$data['data--pages-user-user']->title = 'User %%_nick_context{2}';
  cache::$data['data--pages-user-user']->https = true;
  cache::$data['data--pages-user-user']->display = new \stdClass();
  cache::$data['data--pages-user-user']->display->check = 'url';
  cache::$data['data--pages-user-user']->display->match = '%^/user/[0-9]+$%';
  cache::$data['data--pages-user-user']->access = new \stdClass();
  cache::$data['data--pages-user-user']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-user-user']->access->roles['registered'] = 'registered';
  cache::$data['data--pages-user-user']->args['id_user'] = 2;
  cache::$data['data--pages-user-user']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-user-user']->content['block_menu_main']->region = 'head_1';
  cache::$data['data--pages-user-user']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-user-user']->content['block_menu_main']->dpath = 'trees/core/main';
  cache::$data['data--pages-user-user']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-user-user']->content['block_menu_user']->region = 'head_2';
  cache::$data['data--pages-user-user']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-user-user']->content['block_menu_user']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-user']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-user-user']->content['block_logo']->region = 'head_3';
  cache::$data['data--pages-user-user']->content['block_logo']->type = 'code';
  cache::$data['data--pages-user-user']->content['block_logo']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_logo';
  cache::$data['data--pages-user-user']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-user-user']->content['block_title']->region = 'main_1';
  cache::$data['data--pages-user-user']->content['block_title']->type = 'code';
  cache::$data['data--pages-user-user']->content['block_title']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_title';
  cache::$data['data--pages-user-user']->content['block_user_info'] = new \stdClass();
  cache::$data['data--pages-user-user']->content['block_user_info']->region = 'main_1';
  cache::$data['data--pages-user-user']->content['block_user_info']->type = 'code';
  cache::$data['data--pages-user-user']->content['block_user_info']->handler = '\\effectivecore\\modules\\user\\events_page::on_show_block_user_info';
  cache::$data['data--pages-user-user']->content['block_copyright'] = new \stdClass();
  cache::$data['data--pages-user-user']->content['block_copyright']->region = 'copyright';
  cache::$data['data--pages-user-user']->content['block_copyright']->type = 'code';
  cache::$data['data--pages-user-user']->content['block_copyright']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_copyright';

}
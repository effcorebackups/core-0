<?php

namespace effectivecore { # cache for data--page-user-user_edit

  cache::$data['data--page-user-user_edit'] = new \effectivecore\page();
  cache::$data['data--page-user-user_edit']->title = 'Edit user %%_nick_context{2}';
  cache::$data['data--page-user-user_edit']->https = true;
  cache::$data['data--page-user-user_edit']->display = new \stdClass();
  cache::$data['data--page-user-user_edit']->display->check = 'url';
  cache::$data['data--page-user-user_edit']->display->match = '%^/user/[0-9]+/edit$%';
  cache::$data['data--page-user-user_edit']->access = new \stdClass();
  cache::$data['data--page-user-user_edit']->access->roles['admins'] = 'admins';
  cache::$data['data--page-user-user_edit']->access->roles['registered'] = 'registered';
  cache::$data['data--page-user-user_edit']->args['id_user'] = 2;
  cache::$data['data--page-user-user_edit']->content['check_access_user_edit'] = new \stdClass();
  cache::$data['data--page-user-user_edit']->content['check_access_user_edit']->region = 'head_1';
  cache::$data['data--page-user-user_edit']->content['check_access_user_edit']->type = 'code';
  cache::$data['data--page-user-user_edit']->content['check_access_user_edit']->handler = '\\effectivecore\\modules\\user\\events_access::on_check_access_user_edit';
  cache::$data['data--page-user-user_edit']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--page-user-user_edit']->content['block_menu_main']->region = 'head_1';
  cache::$data['data--page-user-user_edit']->content['block_menu_main']->type = 'link';
  cache::$data['data--page-user-user_edit']->content['block_menu_main']->dpath = 'tree/core/main';
  cache::$data['data--page-user-user_edit']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--page-user-user_edit']->content['block_menu_user']->region = 'head_2';
  cache::$data['data--page-user-user_edit']->content['block_menu_user']->type = 'code';
  cache::$data['data--page-user-user_edit']->content['block_menu_user']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_menu_user';
  cache::$data['data--page-user-user_edit']->content['block_logo'] = new \stdClass();
  cache::$data['data--page-user-user_edit']->content['block_logo']->region = 'head_3';
  cache::$data['data--page-user-user_edit']->content['block_logo']->type = 'code';
  cache::$data['data--page-user-user_edit']->content['block_logo']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_logo';
  cache::$data['data--page-user-user_edit']->content['block_title'] = new \stdClass();
  cache::$data['data--page-user-user_edit']->content['block_title']->region = 'main_1';
  cache::$data['data--page-user-user_edit']->content['block_title']->type = 'code';
  cache::$data['data--page-user-user_edit']->content['block_title']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_title';
  cache::$data['data--page-user-user_edit']->content['form_user_edit'] = new \stdClass();
  cache::$data['data--page-user-user_edit']->content['form_user_edit']->region = 'main_1';
  cache::$data['data--page-user-user_edit']->content['form_user_edit']->type = 'link';
  cache::$data['data--page-user-user_edit']->content['form_user_edit']->dpath = 'forms/user/user_edit';
  cache::$data['data--page-user-user_edit']->content['block_copyright'] = new \stdClass();
  cache::$data['data--page-user-user_edit']->content['block_copyright']->region = 'copyright';
  cache::$data['data--page-user-user_edit']->content['block_copyright']->type = 'code';
  cache::$data['data--page-user-user_edit']->content['block_copyright']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_copyright';

}
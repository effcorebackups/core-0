<?php

namespace effectivecore { # cache for data--pages-user-user_delete

  cache::$data['data--pages-user-user_delete'] = new \effectivecore\page();
  cache::$data['data--pages-user-user_delete']->title = 'Delete user %%_nick_context{4}?';
  cache::$data['data--pages-user-user_delete']->https = true;
  cache::$data['data--pages-user-user_delete']->display = new \stdClass();
  cache::$data['data--pages-user-user_delete']->display->check = 'url';
  cache::$data['data--pages-user-user_delete']->display->match = '%^/admin/users/delete/[0-9]+$%';
  cache::$data['data--pages-user-user_delete']->access = new \stdClass();
  cache::$data['data--pages-user-user_delete']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-user-user_delete']->args['id_user'] = 4;
  cache::$data['data--pages-user-user_delete']->content['check_access_user_delete'] = new \stdClass();
  cache::$data['data--pages-user-user_delete']->content['check_access_user_delete']->region = 'head_1';
  cache::$data['data--pages-user-user_delete']->content['check_access_user_delete']->type = 'code';
  cache::$data['data--pages-user-user_delete']->content['check_access_user_delete']->handler = '\\effectivecore\\modules\\user\\events_access::on_check_access_user_delete';
  cache::$data['data--pages-user-user_delete']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-user-user_delete']->content['block_menu_main']->region = 'main_menu';
  cache::$data['data--pages-user-user_delete']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-user-user_delete']->content['block_menu_main']->dpath = 'trees/core/main';
  cache::$data['data--pages-user-user_delete']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-user-user_delete']->content['block_menu_user']->region = 'head_2';
  cache::$data['data--pages-user-user_delete']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-user-user_delete']->content['block_menu_user']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-user_delete']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-user-user_delete']->content['block_logo']->region = 'head_3';
  cache::$data['data--pages-user-user_delete']->content['block_logo']->type = 'code';
  cache::$data['data--pages-user-user_delete']->content['block_logo']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_logo';
  cache::$data['data--pages-user-user_delete']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-user-user_delete']->content['block_title']->region = 'main_1';
  cache::$data['data--pages-user-user_delete']->content['block_title']->type = 'code';
  cache::$data['data--pages-user-user_delete']->content['block_title']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_title';
  cache::$data['data--pages-user-user_delete']->content['form_user_delete'] = new \stdClass();
  cache::$data['data--pages-user-user_delete']->content['form_user_delete']->region = 'main_1';
  cache::$data['data--pages-user-user_delete']->content['form_user_delete']->type = 'link';
  cache::$data['data--pages-user-user_delete']->content['form_user_delete']->dpath = 'forms/user/user_delete';
  cache::$data['data--pages-user-user_delete']->content['block_copyright'] = new \stdClass();
  cache::$data['data--pages-user-user_delete']->content['block_copyright']->region = 'copyright';
  cache::$data['data--pages-user-user_delete']->content['block_copyright']->type = 'code';
  cache::$data['data--pages-user-user_delete']->content['block_copyright']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_copyright';

}
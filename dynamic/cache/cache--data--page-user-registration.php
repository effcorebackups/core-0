<?php

namespace effectivecore { # cache for data--page-user-registration

  cache::$data['data--page-user-registration'] = new \effectivecore\page();
  cache::$data['data--page-user-registration']->title = 'Registration';
  cache::$data['data--page-user-registration']->https = true;
  cache::$data['data--page-user-registration']->display = new \stdClass();
  cache::$data['data--page-user-registration']->display->check = 'url';
  cache::$data['data--page-user-registration']->display->match = '%^/user/registration$%';
  cache::$data['data--page-user-registration']->access = new \stdClass();
  cache::$data['data--page-user-registration']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--page-user-registration']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--page-user-registration']->content['block_menu_main']->region = 'head_1';
  cache::$data['data--page-user-registration']->content['block_menu_main']->type = 'link';
  cache::$data['data--page-user-registration']->content['block_menu_main']->dpath = 'tree/core/main';
  cache::$data['data--page-user-registration']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--page-user-registration']->content['block_menu_user']->region = 'head_2';
  cache::$data['data--page-user-registration']->content['block_menu_user']->type = 'code';
  cache::$data['data--page-user-registration']->content['block_menu_user']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_menu_user';
  cache::$data['data--page-user-registration']->content['block_logo'] = new \stdClass();
  cache::$data['data--page-user-registration']->content['block_logo']->region = 'head_3';
  cache::$data['data--page-user-registration']->content['block_logo']->type = 'code';
  cache::$data['data--page-user-registration']->content['block_logo']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_logo';
  cache::$data['data--page-user-registration']->content['block_title'] = new \stdClass();
  cache::$data['data--page-user-registration']->content['block_title']->region = 'main_1';
  cache::$data['data--page-user-registration']->content['block_title']->type = 'code';
  cache::$data['data--page-user-registration']->content['block_title']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_title';
  cache::$data['data--page-user-registration']->content['form_registration'] = new \stdClass();
  cache::$data['data--page-user-registration']->content['form_registration']->region = 'main_1';
  cache::$data['data--page-user-registration']->content['form_registration']->type = 'link';
  cache::$data['data--page-user-registration']->content['form_registration']->dpath = 'form/user/registration';
  cache::$data['data--page-user-registration']->content['block_copyright'] = new \stdClass();
  cache::$data['data--page-user-registration']->content['block_copyright']->region = 'copyright';
  cache::$data['data--page-user-registration']->content['block_copyright']->type = 'code';
  cache::$data['data--page-user-registration']->content['block_copyright']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_copyright';

}
<?php

namespace effectivecore { # cache for data--page-page-decoration

  cache::$data['data--page-page-decoration'] = new \effectivecore\page();
  cache::$data['data--page-page-decoration']->title = 'Decoration';
  cache::$data['data--page-page-decoration']->https = true;
  cache::$data['data--page-page-decoration']->display = new \stdClass();
  cache::$data['data--page-page-decoration']->display->check = 'url';
  cache::$data['data--page-page-decoration']->display->match = '%^/admin/decoration$%';
  cache::$data['data--page-page-decoration']->access = new \stdClass();
  cache::$data['data--page-page-decoration']->access->roles['admins'] = 'admins';
  cache::$data['data--page-page-decoration']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--page-page-decoration']->content['block_menu_main']->region = 'head_1';
  cache::$data['data--page-page-decoration']->content['block_menu_main']->type = 'link';
  cache::$data['data--page-page-decoration']->content['block_menu_main']->dpath = 'tree/core/main';
  cache::$data['data--page-page-decoration']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--page-page-decoration']->content['block_menu_user']->region = 'head_2';
  cache::$data['data--page-page-decoration']->content['block_menu_user']->type = 'code';
  cache::$data['data--page-page-decoration']->content['block_menu_user']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_menu_user';
  cache::$data['data--page-page-decoration']->content['block_logo'] = new \stdClass();
  cache::$data['data--page-page-decoration']->content['block_logo']->region = 'head_3';
  cache::$data['data--page-page-decoration']->content['block_logo']->type = 'code';
  cache::$data['data--page-page-decoration']->content['block_logo']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_logo';
  cache::$data['data--page-page-decoration']->content['block_title'] = new \stdClass();
  cache::$data['data--page-page-decoration']->content['block_title']->region = 'main_1';
  cache::$data['data--page-page-decoration']->content['block_title']->type = 'code';
  cache::$data['data--page-page-decoration']->content['block_title']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_title';
  cache::$data['data--page-page-decoration']->content['form_decoration'] = new \stdClass();
  cache::$data['data--page-page-decoration']->content['form_decoration']->region = 'main_1';
  cache::$data['data--page-page-decoration']->content['form_decoration']->type = 'link';
  cache::$data['data--page-page-decoration']->content['form_decoration']->dpath = 'forms/page/decoration';
  cache::$data['data--page-page-decoration']->content['block_copyright'] = new \stdClass();
  cache::$data['data--page-page-decoration']->content['block_copyright']->region = 'copyright';
  cache::$data['data--page-page-decoration']->content['block_copyright']->type = 'code';
  cache::$data['data--page-page-decoration']->content['block_copyright']->handler = '\\effectivecore\\modules\\core\\events_page::on_show_block_copyright';

}
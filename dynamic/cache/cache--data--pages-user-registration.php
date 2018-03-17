<?php

namespace effcore { # cache for data--pages-user-registration

  cache::$data['data--pages-user-registration'] = new \effcore\page();
  cache::$data['data--pages-user-registration']->title = 'Registration';
  cache::$data['data--pages-user-registration']->https = true;
  cache::$data['data--pages-user-registration']->display = new \stdClass();
  cache::$data['data--pages-user-registration']->display->check = 'path';
  cache::$data['data--pages-user-registration']->display->where = 'url';
  cache::$data['data--pages-user-registration']->display->match = '%^/user/registration$%';
  cache::$data['data--pages-user-registration']->access = new \stdClass();
  cache::$data['data--pages-user-registration']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--pages-user-registration']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-user-registration']->content['block_menu_main']->region = 'main_menu';
  cache::$data['data--pages-user-registration']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-user-registration']->content['block_menu_main']->dpath = 'trees/core/main';
  cache::$data['data--pages-user-registration']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-user-registration']->content['block_menu_user']->region = 'head';
  cache::$data['data--pages-user-registration']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-user-registration']->content['block_menu_user']->handler = '\\effcore\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-registration']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-user-registration']->content['block_logo']->region = 'head';
  cache::$data['data--pages-user-registration']->content['block_logo']->type = 'link';
  cache::$data['data--pages-user-registration']->content['block_logo']->dpath = 'blocks/page/logo';
  cache::$data['data--pages-user-registration']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-user-registration']->content['block_title']->region = 'title';
  cache::$data['data--pages-user-registration']->content['block_title']->type = 'code';
  cache::$data['data--pages-user-registration']->content['block_title']->handler = '\\effcore\\events_page::on_show_block_title';
  cache::$data['data--pages-user-registration']->content['form_registration'] = new \stdClass();
  cache::$data['data--pages-user-registration']->content['form_registration']->region = 'content';
  cache::$data['data--pages-user-registration']->content['form_registration']->type = 'link';
  cache::$data['data--pages-user-registration']->content['form_registration']->dpath = 'forms/user/registration';

}
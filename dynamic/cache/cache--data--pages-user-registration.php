<?php

namespace effcore { # cache for data--pages-user-registration

  cache::$data['data--pages-user-registration'] = new \effcore\page();
  cache::$data['data--pages-user-registration']->title = 'Registration';
  cache::$data['data--pages-user-registration']->https = true;
  cache::$data['data--pages-user-registration']->display = new \stdClass();
  cache::$data['data--pages-user-registration']->display->check = 'url';
  cache::$data['data--pages-user-registration']->display->where = 'path';
  cache::$data['data--pages-user-registration']->display->match = '%^/user/registration$%';
  cache::$data['data--pages-user-registration']->access = new \stdClass();
  cache::$data['data--pages-user-registration']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--pages-user-registration']->content['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-user-registration']->content['menu_main']->region = 'main_menu';
  cache::$data['data--pages-user-registration']->content['menu_main']->type = 'link';
  cache::$data['data--pages-user-registration']->content['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-user-registration']->content['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-user-registration']->content['menu_user']->region = 'head';
  cache::$data['data--pages-user-registration']->content['menu_user']->type = 'code';
  cache::$data['data--pages-user-registration']->content['menu_user']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-registration']->content['logo'] = new \effcore\page_part();
  cache::$data['data--pages-user-registration']->content['logo']->region = 'head';
  cache::$data['data--pages-user-registration']->content['logo']->type = 'link';
  cache::$data['data--pages-user-registration']->content['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-user-registration']->content['title'] = new \effcore\page_part();
  cache::$data['data--pages-user-registration']->content['title']->region = 'title';
  cache::$data['data--pages-user-registration']->content['title']->type = 'code';
  cache::$data['data--pages-user-registration']->content['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-user-registration']->content['form_registration'] = new \effcore\page_part();
  cache::$data['data--pages-user-registration']->content['form_registration']->type = 'link';
  cache::$data['data--pages-user-registration']->content['form_registration']->source = 'forms/user/registration';

}
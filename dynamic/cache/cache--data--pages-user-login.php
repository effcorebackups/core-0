<?php

namespace effcore { # cache for data--pages-user-login

  cache::$data['data--pages-user-login'] = new \effcore\page();
  cache::$data['data--pages-user-login']->title = 'Login';
  cache::$data['data--pages-user-login']->https = true;
  cache::$data['data--pages-user-login']->display = new \stdClass();
  cache::$data['data--pages-user-login']->display->check = 'url';
  cache::$data['data--pages-user-login']->display->where = 'path';
  cache::$data['data--pages-user-login']->display->match = '%^/user/login$%';
  cache::$data['data--pages-user-login']->access = new \stdClass();
  cache::$data['data--pages-user-login']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--pages-user-login']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-user-login']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-user-login']->children['menu_main']->type = 'link';
  cache::$data['data--pages-user-login']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-user-login']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-user-login']->children['menu_user']->region = 'head';
  cache::$data['data--pages-user-login']->children['menu_user']->type = 'code';
  cache::$data['data--pages-user-login']->children['menu_user']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-login']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-user-login']->children['logo']->region = 'head';
  cache::$data['data--pages-user-login']->children['logo']->type = 'link';
  cache::$data['data--pages-user-login']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-user-login']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-user-login']->children['title']->region = 'title';
  cache::$data['data--pages-user-login']->children['title']->type = 'code';
  cache::$data['data--pages-user-login']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-user-login']->children['form_login'] = new \effcore\page_part();
  cache::$data['data--pages-user-login']->children['form_login']->type = 'link';
  cache::$data['data--pages-user-login']->children['form_login']->source = 'forms/user/login';

}
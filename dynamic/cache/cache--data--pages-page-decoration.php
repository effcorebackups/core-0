<?php

namespace effcore { # cache for data--pages-page-decoration

  cache::$data['data--pages-page-decoration'] = new \effcore\page();
  cache::$data['data--pages-page-decoration']->title = 'Decoration';
  cache::$data['data--pages-page-decoration']->https = true;
  cache::$data['data--pages-page-decoration']->display = new \stdClass();
  cache::$data['data--pages-page-decoration']->display->check = 'url';
  cache::$data['data--pages-page-decoration']->display->where = 'path';
  cache::$data['data--pages-page-decoration']->display->match = '%^/manage/decoration$%';
  cache::$data['data--pages-page-decoration']->access = new \stdClass();
  cache::$data['data--pages-page-decoration']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-page-decoration']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-page-decoration']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-page-decoration']->children['menu_main']->type = 'link';
  cache::$data['data--pages-page-decoration']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-page-decoration']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-page-decoration']->children['menu_user']->region = 'head';
  cache::$data['data--pages-page-decoration']->children['menu_user']->type = 'code';
  cache::$data['data--pages-page-decoration']->children['menu_user']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-page-decoration']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-page-decoration']->children['logo']->region = 'head';
  cache::$data['data--pages-page-decoration']->children['logo']->type = 'link';
  cache::$data['data--pages-page-decoration']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-page-decoration']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-page-decoration']->children['title']->region = 'title';
  cache::$data['data--pages-page-decoration']->children['title']->type = 'code';
  cache::$data['data--pages-page-decoration']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-page-decoration']->children['form_decoration'] = new \effcore\page_part();
  cache::$data['data--pages-page-decoration']->children['form_decoration']->type = 'link';
  cache::$data['data--pages-page-decoration']->children['form_decoration']->source = 'forms/page/decoration';

}
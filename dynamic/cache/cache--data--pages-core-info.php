<?php

namespace effcore { # cache for data--pages-core-info

  cache::$data['data--pages-core-info'] = new \effcore\page();
  cache::$data['data--pages-core-info']->title = 'Information';
  cache::$data['data--pages-core-info']->https = true;
  cache::$data['data--pages-core-info']->display = new \stdClass();
  cache::$data['data--pages-core-info']->display->check = 'url';
  cache::$data['data--pages-core-info']->display->where = 'path';
  cache::$data['data--pages-core-info']->display->match = '%^/manage/info$%';
  cache::$data['data--pages-core-info']->access = new \stdClass();
  cache::$data['data--pages-core-info']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-core-info']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-core-info']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-core-info']->children['menu_main']->type = 'link';
  cache::$data['data--pages-core-info']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-core-info']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-core-info']->children['menu_user']->region = 'head';
  cache::$data['data--pages-core-info']->children['menu_user']->type = 'code';
  cache::$data['data--pages-core-info']->children['menu_user']->source = '\\effcore\\modules\\user\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-core-info']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-core-info']->children['logo']->region = 'head';
  cache::$data['data--pages-core-info']->children['logo']->type = 'link';
  cache::$data['data--pages-core-info']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-core-info']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-core-info']->children['title']->region = 'title';
  cache::$data['data--pages-core-info']->children['title']->type = 'code';
  cache::$data['data--pages-core-info']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-core-info']->children['block_info'] = new \effcore\page_part();
  cache::$data['data--pages-core-info']->children['block_info']->type = 'code';
  cache::$data['data--pages-core-info']->children['block_info']->source = '\\effcore\\modules\\core\\events_page::on_show_block_info';
  cache::$data['data--pages-core-info']->children['form_access'] = new \effcore\page_part();
  cache::$data['data--pages-core-info']->children['form_access']->display = new \stdClass();
  cache::$data['data--pages-core-info']->children['form_access']->display->check = 'user';
  cache::$data['data--pages-core-info']->children['form_access']->display->where = 'role';
  cache::$data['data--pages-core-info']->children['form_access']->display->match = '%^admins$%';
  cache::$data['data--pages-core-info']->children['form_access']->type = 'link';
  cache::$data['data--pages-core-info']->children['form_access']->source = 'forms/user/access';
  cache::$data['data--pages-core-info']->children['form_access']->source_args['entity_name'] = 'page';

}
<?php

namespace effcore { # cache for data--pages-user-user

  cache::$data['data--pages-user-user'] = new \effcore\page();
  cache::$data['data--pages-user-user']->title = 'User %%_nick_context{2}';
  cache::$data['data--pages-user-user']->https = true;
  cache::$data['data--pages-user-user']->display = new \stdClass();
  cache::$data['data--pages-user-user']->display->check = 'url';
  cache::$data['data--pages-user-user']->display->where = 'path';
  cache::$data['data--pages-user-user']->display->match = '%^/user/(?<nick>[a-zA-Z0-9-_]{4,32})$%';
  cache::$data['data--pages-user-user']->access = new \stdClass();
  cache::$data['data--pages-user-user']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-user-user']->access->roles['registered'] = 'registered';
  cache::$data['data--pages-user-user']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-user-user']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-user-user']->children['menu_main']->type = 'link';
  cache::$data['data--pages-user-user']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-user-user']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-user-user']->children['menu_user']->region = 'head';
  cache::$data['data--pages-user-user']->children['menu_user']->type = 'code';
  cache::$data['data--pages-user-user']->children['menu_user']->source = '\\effcore\\modules\\user\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-user']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-user-user']->children['logo']->region = 'head';
  cache::$data['data--pages-user-user']->children['logo']->type = 'link';
  cache::$data['data--pages-user-user']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-user-user']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-user-user']->children['title']->region = 'title';
  cache::$data['data--pages-user-user']->children['title']->type = 'code';
  cache::$data['data--pages-user-user']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-user-user']->children['block_user_info'] = new \effcore\page_part();
  cache::$data['data--pages-user-user']->children['block_user_info']->type = 'code';
  cache::$data['data--pages-user-user']->children['block_user_info']->source = '\\effcore\\modules\\user\\events_page::on_show_block_user_info';
  cache::$data['data--pages-user-user']->children['form_access'] = new \effcore\page_part();
  cache::$data['data--pages-user-user']->children['form_access']->display = new \stdClass();
  cache::$data['data--pages-user-user']->children['form_access']->display->check = 'user';
  cache::$data['data--pages-user-user']->children['form_access']->display->where = 'role';
  cache::$data['data--pages-user-user']->children['form_access']->display->match = '%^admins$%';
  cache::$data['data--pages-user-user']->children['form_access']->type = 'link';
  cache::$data['data--pages-user-user']->children['form_access']->source = 'forms/user/access';
  cache::$data['data--pages-user-user']->children['form_access']->source_args['entity_name'] = 'page';

}
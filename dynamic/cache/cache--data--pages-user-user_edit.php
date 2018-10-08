<?php

namespace effcore { # cache for data--pages-user-user_edit

  cache::$data['data--pages-user-user_edit'] = new \effcore\page();
  cache::$data['data--pages-user-user_edit']->title = 'Edit user %%_nick_context{2}';
  cache::$data['data--pages-user-user_edit']->https = true;
  cache::$data['data--pages-user-user_edit']->display = new \stdClass();
  cache::$data['data--pages-user-user_edit']->display->check = 'url';
  cache::$data['data--pages-user-user_edit']->display->where = 'path';
  cache::$data['data--pages-user-user_edit']->display->match = '%^/user/(?<nick>[a-zA-Z0-9-_]{4,32})/edit$%';
  cache::$data['data--pages-user-user_edit']->access = new \stdClass();
  cache::$data['data--pages-user-user_edit']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-user-user_edit']->access->roles['registered'] = 'registered';
  cache::$data['data--pages-user-user_edit']->children['check_access_user_edit'] = new \effcore\page_part();
  cache::$data['data--pages-user-user_edit']->children['check_access_user_edit']->region = 'head';
  cache::$data['data--pages-user-user_edit']->children['check_access_user_edit']->type = 'code';
  cache::$data['data--pages-user-user_edit']->children['check_access_user_edit']->source = '\\effcore\\modules\\user\\events_access::on_check_access_user_edit';
  cache::$data['data--pages-user-user_edit']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-user-user_edit']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-user-user_edit']->children['menu_main']->type = 'link';
  cache::$data['data--pages-user-user_edit']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-user-user_edit']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-user-user_edit']->children['menu_user']->region = 'head';
  cache::$data['data--pages-user-user_edit']->children['menu_user']->type = 'code';
  cache::$data['data--pages-user-user_edit']->children['menu_user']->source = '\\effcore\\modules\\user\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-user-user_edit']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-user-user_edit']->children['logo']->region = 'head';
  cache::$data['data--pages-user-user_edit']->children['logo']->type = 'link';
  cache::$data['data--pages-user-user_edit']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-user-user_edit']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-user-user_edit']->children['title']->region = 'title';
  cache::$data['data--pages-user-user_edit']->children['title']->type = 'code';
  cache::$data['data--pages-user-user_edit']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-user-user_edit']->children['form_user_edit'] = new \effcore\page_part();
  cache::$data['data--pages-user-user_edit']->children['form_user_edit']->type = 'link';
  cache::$data['data--pages-user-user_edit']->children['form_user_edit']->source = 'forms/user/user_edit';
  cache::$data['data--pages-user-user_edit']->children['form_access'] = new \effcore\page_part();
  cache::$data['data--pages-user-user_edit']->children['form_access']->display = new \stdClass();
  cache::$data['data--pages-user-user_edit']->children['form_access']->display->check = 'user';
  cache::$data['data--pages-user-user_edit']->children['form_access']->display->where = 'role';
  cache::$data['data--pages-user-user_edit']->children['form_access']->display->match = '%^admins$%';
  cache::$data['data--pages-user-user_edit']->children['form_access']->type = 'link';
  cache::$data['data--pages-user-user_edit']->children['form_access']->source = 'forms/user/access';
  cache::$data['data--pages-user-user_edit']->children['form_access']->source_args['entity_name'] = 'page';

}
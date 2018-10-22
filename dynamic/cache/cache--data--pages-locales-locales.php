<?php

namespace effcore { # cache for data--pages-locales-locales

  cache::$data['data--pages-locales-locales'] = new \effcore\page();
  cache::$data['data--pages-locales-locales']->title = 'Locales';
  cache::$data['data--pages-locales-locales']->https = true;
  cache::$data['data--pages-locales-locales']->display = new \stdClass();
  cache::$data['data--pages-locales-locales']->display->check = 'url';
  cache::$data['data--pages-locales-locales']->display->where = 'path';
  cache::$data['data--pages-locales-locales']->display->match = '%^/manage/locales$%';
  cache::$data['data--pages-locales-locales']->access = new \stdClass();
  cache::$data['data--pages-locales-locales']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-locales-locales']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-locales-locales']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-locales-locales']->children['menu_main']->type = 'link';
  cache::$data['data--pages-locales-locales']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-locales-locales']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-locales-locales']->children['menu_user']->region = 'head';
  cache::$data['data--pages-locales-locales']->children['menu_user']->type = 'code';
  cache::$data['data--pages-locales-locales']->children['menu_user']->source = '\\effcore\\modules\\user\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-locales-locales']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-locales-locales']->children['logo']->region = 'head';
  cache::$data['data--pages-locales-locales']->children['logo']->type = 'link';
  cache::$data['data--pages-locales-locales']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-locales-locales']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-locales-locales']->children['title']->region = 'title';
  cache::$data['data--pages-locales-locales']->children['title']->type = 'code';
  cache::$data['data--pages-locales-locales']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-locales-locales']->children['form_locales'] = new \effcore\page_part();
  cache::$data['data--pages-locales-locales']->children['form_locales']->type = 'link';
  cache::$data['data--pages-locales-locales']->children['form_locales']->source = 'forms/locales/locales';
  cache::$data['data--pages-locales-locales']->children['form_access'] = new \effcore\page_part();
  cache::$data['data--pages-locales-locales']->children['form_access']->display = new \stdClass();
  cache::$data['data--pages-locales-locales']->children['form_access']->display->check = 'user';
  cache::$data['data--pages-locales-locales']->children['form_access']->display->where = 'role';
  cache::$data['data--pages-locales-locales']->children['form_access']->display->match = '%^admins$%';
  cache::$data['data--pages-locales-locales']->children['form_access']->type = 'link';
  cache::$data['data--pages-locales-locales']->children['form_access']->source = 'forms/user/access';
  cache::$data['data--pages-locales-locales']->children['form_access']->source_args['entity_name'] = 'page';

}
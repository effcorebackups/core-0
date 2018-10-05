<?php

namespace effcore { # cache for data--pages-core-front

  cache::$data['data--pages-core-front'] = new \effcore\page();
  cache::$data['data--pages-core-front']->title = 'Front page';
  cache::$data['data--pages-core-front']->display = new \stdClass();
  cache::$data['data--pages-core-front']->display->check = 'url';
  cache::$data['data--pages-core-front']->display->where = 'path';
  cache::$data['data--pages-core-front']->display->match = '%^/$%';
  cache::$data['data--pages-core-front']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-core-front']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-core-front']->children['menu_main']->type = 'link';
  cache::$data['data--pages-core-front']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-core-front']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-core-front']->children['menu_user']->region = 'head';
  cache::$data['data--pages-core-front']->children['menu_user']->type = 'code';
  cache::$data['data--pages-core-front']->children['menu_user']->source = '\\effcore\\modules\\user\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-core-front']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-core-front']->children['logo']->region = 'head';
  cache::$data['data--pages-core-front']->children['logo']->type = 'link';
  cache::$data['data--pages-core-front']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-core-front']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-core-front']->children['title']->region = 'title';
  cache::$data['data--pages-core-front']->children['title']->type = 'code';
  cache::$data['data--pages-core-front']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-core-front']->children['wellcome'] = new \effcore\page_part();
  cache::$data['data--pages-core-front']->children['wellcome']->type = 'text';
  cache::$data['data--pages-core-front']->children['wellcome']->source = 'Wellcome to our site!';
  cache::$data['data--pages-core-front']->children['form_access'] = new \effcore\page_part();
  cache::$data['data--pages-core-front']->children['form_access']->display = new \stdClass();
  cache::$data['data--pages-core-front']->children['form_access']->display->check = 'user';
  cache::$data['data--pages-core-front']->children['form_access']->display->where = 'role';
  cache::$data['data--pages-core-front']->children['form_access']->display->match = '%^admins$%';
  cache::$data['data--pages-core-front']->children['form_access']->type = 'link';
  cache::$data['data--pages-core-front']->children['form_access']->source = 'forms/user/access';
  cache::$data['data--pages-core-front']->children['form_access']->source_args['entity_name'] = 'page';

}
<?php

namespace effcore { # cache for data--pages-menu-trees

  cache::$data['data--pages-menu-trees'] = new \effcore\page();
  cache::$data['data--pages-menu-trees']->title = 'Trees';
  cache::$data['data--pages-menu-trees']->https = true;
  cache::$data['data--pages-menu-trees']->display = new \stdClass();
  cache::$data['data--pages-menu-trees']->display->check = 'url';
  cache::$data['data--pages-menu-trees']->display->where = 'path';
  cache::$data['data--pages-menu-trees']->display->match = '%^(?<base>/manage/trees)/(?<action>select|insert)(/(?<id>[a-z_]+)|)$%';
  cache::$data['data--pages-menu-trees']->access = new \stdClass();
  cache::$data['data--pages-menu-trees']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-menu-trees']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-menu-trees']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-menu-trees']->children['menu_main']->type = 'link';
  cache::$data['data--pages-menu-trees']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-menu-trees']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-menu-trees']->children['menu_user']->region = 'head';
  cache::$data['data--pages-menu-trees']->children['menu_user']->type = 'code';
  cache::$data['data--pages-menu-trees']->children['menu_user']->source = '\\effcore\\modules\\user\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-menu-trees']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-menu-trees']->children['logo']->region = 'head';
  cache::$data['data--pages-menu-trees']->children['logo']->type = 'link';
  cache::$data['data--pages-menu-trees']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-menu-trees']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-menu-trees']->children['title']->region = 'title';
  cache::$data['data--pages-menu-trees']->children['title']->type = 'code';
  cache::$data['data--pages-menu-trees']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-menu-trees']->children['tabs'] = new \effcore\page_part();
  cache::$data['data--pages-menu-trees']->children['tabs']->region = 'tabs';
  cache::$data['data--pages-menu-trees']->children['tabs']->type = 'link';
  cache::$data['data--pages-menu-trees']->children['tabs']->source = 'tabs/menu/manage_trees';
  cache::$data['data--pages-menu-trees']->children['block_tree_select'] = new \effcore\page_part();
  cache::$data['data--pages-menu-trees']->children['block_tree_select']->display = new \stdClass();
  cache::$data['data--pages-menu-trees']->children['block_tree_select']->display->check = 'page_args';
  cache::$data['data--pages-menu-trees']->children['block_tree_select']->display->where = 'action';
  cache::$data['data--pages-menu-trees']->children['block_tree_select']->display->match = '%^select$%';
  cache::$data['data--pages-menu-trees']->children['block_tree_select']->type = 'code';
  cache::$data['data--pages-menu-trees']->children['block_tree_select']->source = '\\effcore\\manage_trees::tree_select';
  cache::$data['data--pages-menu-trees']->children['block_tree_insert'] = new \effcore\page_part();
  cache::$data['data--pages-menu-trees']->children['block_tree_insert']->display = new \stdClass();
  cache::$data['data--pages-menu-trees']->children['block_tree_insert']->display->check = 'page_args';
  cache::$data['data--pages-menu-trees']->children['block_tree_insert']->display->where = 'action';
  cache::$data['data--pages-menu-trees']->children['block_tree_insert']->display->match = '%^insert$%';
  cache::$data['data--pages-menu-trees']->children['block_tree_insert']->type = 'code';
  cache::$data['data--pages-menu-trees']->children['block_tree_insert']->source = '\\effcore\\manage_trees::tree_insert';
  cache::$data['data--pages-menu-trees']->children['form_access'] = new \effcore\page_part();
  cache::$data['data--pages-menu-trees']->children['form_access']->display = new \stdClass();
  cache::$data['data--pages-menu-trees']->children['form_access']->display->check = 'user';
  cache::$data['data--pages-menu-trees']->children['form_access']->display->where = 'role';
  cache::$data['data--pages-menu-trees']->children['form_access']->display->match = '%^admins$%';
  cache::$data['data--pages-menu-trees']->children['form_access']->type = 'link';
  cache::$data['data--pages-menu-trees']->children['form_access']->source = 'forms/user/access';
  cache::$data['data--pages-menu-trees']->children['form_access']->source_args['entity_name'] = 'page';

}
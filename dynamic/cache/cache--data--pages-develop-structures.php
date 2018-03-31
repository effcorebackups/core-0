<?php

namespace effcore { # cache for data--pages-develop-structures

  cache::$data['data--pages-develop-structures'] = new \effcore\page();
  cache::$data['data--pages-develop-structures']->title = 'Structures';
  cache::$data['data--pages-develop-structures']->https = true;
  cache::$data['data--pages-develop-structures']->display = new \stdClass();
  cache::$data['data--pages-develop-structures']->display->check = 'path';
  cache::$data['data--pages-develop-structures']->display->where = 'url';
  cache::$data['data--pages-develop-structures']->display->match = '%^(?<base>/develop/structures)/(?<action>list|diagrams)$%';
  cache::$data['data--pages-develop-structures']->access = new \stdClass();
  cache::$data['data--pages-develop-structures']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-develop-structures']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_menu_main']->region = 'main_menu';
  cache::$data['data--pages-develop-structures']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-develop-structures']->content['block_menu_main']->dpath = 'trees/core/main';
  cache::$data['data--pages-develop-structures']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_menu_user']->region = 'head';
  cache::$data['data--pages-develop-structures']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-develop-structures']->content['block_menu_user']->handler = '\\effcore\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-develop-structures']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_logo']->region = 'head';
  cache::$data['data--pages-develop-structures']->content['block_logo']->type = 'link';
  cache::$data['data--pages-develop-structures']->content['block_logo']->dpath = 'blocks/page/logo';
  cache::$data['data--pages-develop-structures']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_title']->region = 'title';
  cache::$data['data--pages-develop-structures']->content['block_title']->type = 'code';
  cache::$data['data--pages-develop-structures']->content['block_title']->handler = '\\effcore\\events_page::on_show_block_title';
  cache::$data['data--pages-develop-structures']->content['block_tabs'] = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_tabs']->region = 'tabs';
  cache::$data['data--pages-develop-structures']->content['block_tabs']->type = 'link';
  cache::$data['data--pages-develop-structures']->content['block_tabs']->dpath = 'tabs/develop/structures';
  cache::$data['data--pages-develop-structures']->content['block_structures_list'] = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->display = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->display->check = 'action';
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->display->where = 'page_args';
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->display->match = '%list%';
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->region = 'content';
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->type = 'code';
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->handler = '\\effcore\\modules\\develop\\events_page::on_show_block_structures_list';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagrams'] = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_structures_diagrams']->display = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_structures_diagrams']->display->check = 'action';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagrams']->display->where = 'page_args';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagrams']->display->match = '%diagrams%';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagrams']->region = 'content';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagrams']->type = 'code';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagrams']->handler = '\\effcore\\modules\\develop\\events_page::on_show_block_structures_diagrams';

}
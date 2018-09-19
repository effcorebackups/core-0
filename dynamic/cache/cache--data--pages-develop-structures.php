<?php

namespace effcore { # cache for data--pages-develop-structures

  cache::$data['data--pages-develop-structures'] = new \effcore\page();
  cache::$data['data--pages-develop-structures']->title = 'Structures';
  cache::$data['data--pages-develop-structures']->https = true;
  cache::$data['data--pages-develop-structures']->display = new \stdClass();
  cache::$data['data--pages-develop-structures']->display->check = 'url';
  cache::$data['data--pages-develop-structures']->display->where = 'path';
  cache::$data['data--pages-develop-structures']->display->match = '%^(?<base>/develop/structures)/(?<type>class|interface|trait)/(?<view>list|diagram|diagram_export)$%';
  cache::$data['data--pages-develop-structures']->access = new \stdClass();
  cache::$data['data--pages-develop-structures']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-develop-structures']->content['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-develop-structures']->content['menu_main']->region = 'main_menu';
  cache::$data['data--pages-develop-structures']->content['menu_main']->type = 'link';
  cache::$data['data--pages-develop-structures']->content['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-develop-structures']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_menu_user']->region = 'head';
  cache::$data['data--pages-develop-structures']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-develop-structures']->content['block_menu_user']->handler = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-develop-structures']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_logo']->region = 'head';
  cache::$data['data--pages-develop-structures']->content['block_logo']->type = 'link';
  cache::$data['data--pages-develop-structures']->content['block_logo']->dpath = 'blocks/page/logo';
  cache::$data['data--pages-develop-structures']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_title']->region = 'title';
  cache::$data['data--pages-develop-structures']->content['block_title']->type = 'code';
  cache::$data['data--pages-develop-structures']->content['block_title']->handler = '\\effcore\\modules\\page\\events_page::on_show_block_title';
  cache::$data['data--pages-develop-structures']->content['block_tabs'] = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_tabs']->region = 'tabs';
  cache::$data['data--pages-develop-structures']->content['block_tabs']->type = 'link';
  cache::$data['data--pages-develop-structures']->content['block_tabs']->dpath = 'tabs/develop/structures';
  cache::$data['data--pages-develop-structures']->content['block_structures_list'] = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->display = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->display->check = 'page_args';
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->display->where = 'view';
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->display->match = '%list%';
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->region = 'content';
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->type = 'code';
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->handler = '\\effcore\\modules\\develop\\events_page::on_show_block_structures_list';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram'] = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram']->display = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram']->display->check = 'page_args';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram']->display->where = 'view';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram']->display->match = '%diagram%';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram']->region = 'content';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram']->type = 'code';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram']->handler = '\\effcore\\modules\\develop\\events_page::on_show_block_structures_diagram';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram_export'] = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram_export']->display = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram_export']->display->check = 'page_args';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram_export']->display->where = 'view';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram_export']->display->match = '%diagram_export%';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram_export']->region = 'content';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram_export']->type = 'code';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram_export']->handler = '\\effcore\\modules\\develop\\events_page::on_export_diagram';

}
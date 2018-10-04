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
  cache::$data['data--pages-develop-structures']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-develop-structures']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-develop-structures']->children['menu_main']->type = 'link';
  cache::$data['data--pages-develop-structures']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-develop-structures']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-develop-structures']->children['menu_user']->region = 'head';
  cache::$data['data--pages-develop-structures']->children['menu_user']->type = 'code';
  cache::$data['data--pages-develop-structures']->children['menu_user']->source = '\\effcore\\modules\\user\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-develop-structures']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-develop-structures']->children['logo']->region = 'head';
  cache::$data['data--pages-develop-structures']->children['logo']->type = 'link';
  cache::$data['data--pages-develop-structures']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-develop-structures']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-develop-structures']->children['title']->region = 'title';
  cache::$data['data--pages-develop-structures']->children['title']->type = 'code';
  cache::$data['data--pages-develop-structures']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-develop-structures']->children['tabs'] = new \effcore\page_part();
  cache::$data['data--pages-develop-structures']->children['tabs']->region = 'tabs';
  cache::$data['data--pages-develop-structures']->children['tabs']->type = 'link';
  cache::$data['data--pages-develop-structures']->children['tabs']->source = 'tabs/develop/structures';
  cache::$data['data--pages-develop-structures']->children['block_structures_list'] = new \effcore\page_part();
  cache::$data['data--pages-develop-structures']->children['block_structures_list']->display = new \stdClass();
  cache::$data['data--pages-develop-structures']->children['block_structures_list']->display->check = 'page_args';
  cache::$data['data--pages-develop-structures']->children['block_structures_list']->display->where = 'view';
  cache::$data['data--pages-develop-structures']->children['block_structures_list']->display->match = '%^list$%';
  cache::$data['data--pages-develop-structures']->children['block_structures_list']->type = 'code';
  cache::$data['data--pages-develop-structures']->children['block_structures_list']->source = '\\effcore\\modules\\develop\\events_page::on_show_block_structures_list';
  cache::$data['data--pages-develop-structures']->children['block_structures_diagram'] = new \effcore\page_part();
  cache::$data['data--pages-develop-structures']->children['block_structures_diagram']->display = new \stdClass();
  cache::$data['data--pages-develop-structures']->children['block_structures_diagram']->display->check = 'page_args';
  cache::$data['data--pages-develop-structures']->children['block_structures_diagram']->display->where = 'view';
  cache::$data['data--pages-develop-structures']->children['block_structures_diagram']->display->match = '%^diagram$%';
  cache::$data['data--pages-develop-structures']->children['block_structures_diagram']->type = 'code';
  cache::$data['data--pages-develop-structures']->children['block_structures_diagram']->source = '\\effcore\\modules\\develop\\events_page::on_show_block_structures_diagram';
  cache::$data['data--pages-develop-structures']->children['block_structures_diagram_export'] = new \effcore\page_part();
  cache::$data['data--pages-develop-structures']->children['block_structures_diagram_export']->display = new \stdClass();
  cache::$data['data--pages-develop-structures']->children['block_structures_diagram_export']->display->check = 'page_args';
  cache::$data['data--pages-develop-structures']->children['block_structures_diagram_export']->display->where = 'view';
  cache::$data['data--pages-develop-structures']->children['block_structures_diagram_export']->display->match = '%^diagram_export$%';
  cache::$data['data--pages-develop-structures']->children['block_structures_diagram_export']->type = 'code';
  cache::$data['data--pages-develop-structures']->children['block_structures_diagram_export']->source = '\\effcore\\modules\\develop\\events_page::on_export_diagram';

}
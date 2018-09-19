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
  cache::$data['data--pages-develop-structures']->content['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-develop-structures']->content['menu_user']->region = 'head';
  cache::$data['data--pages-develop-structures']->content['menu_user']->type = 'code';
  cache::$data['data--pages-develop-structures']->content['menu_user']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-develop-structures']->content['logo'] = new \effcore\page_part();
  cache::$data['data--pages-develop-structures']->content['logo']->region = 'head';
  cache::$data['data--pages-develop-structures']->content['logo']->type = 'link';
  cache::$data['data--pages-develop-structures']->content['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-develop-structures']->content['title'] = new \effcore\page_part();
  cache::$data['data--pages-develop-structures']->content['title']->region = 'title';
  cache::$data['data--pages-develop-structures']->content['title']->type = 'code';
  cache::$data['data--pages-develop-structures']->content['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-develop-structures']->content['tabs'] = new \effcore\page_part();
  cache::$data['data--pages-develop-structures']->content['tabs']->region = 'tabs';
  cache::$data['data--pages-develop-structures']->content['tabs']->type = 'link';
  cache::$data['data--pages-develop-structures']->content['tabs']->source = 'tabs/develop/structures';
  cache::$data['data--pages-develop-structures']->content['block_structures_list'] = new \effcore\page_part();
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->display = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->display->check = 'page_args';
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->display->where = 'view';
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->display->match = '%list%';
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->type = 'code';
  cache::$data['data--pages-develop-structures']->content['block_structures_list']->source = '\\effcore\\modules\\develop\\events_page::on_show_block_structures_list';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram'] = new \effcore\page_part();
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram']->display = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram']->display->check = 'page_args';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram']->display->where = 'view';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram']->display->match = '%diagram%';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram']->type = 'code';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram']->source = '\\effcore\\modules\\develop\\events_page::on_show_block_structures_diagram';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram_export'] = new \effcore\page_part();
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram_export']->display = new \stdClass();
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram_export']->display->check = 'page_args';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram_export']->display->where = 'view';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram_export']->display->match = '%diagram_export%';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram_export']->type = 'code';
  cache::$data['data--pages-develop-structures']->content['block_structures_diagram_export']->source = '\\effcore\\modules\\develop\\events_page::on_export_diagram';

}
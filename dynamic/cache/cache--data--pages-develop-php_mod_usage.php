<?php

namespace effcore { # cache for data--pages-develop-php_mod_usage

  cache::$data['data--pages-develop-php_mod_usage'] = new \effcore\page();
  cache::$data['data--pages-develop-php_mod_usage']->title = 'PHP modules usage';
  cache::$data['data--pages-develop-php_mod_usage']->https = true;
  cache::$data['data--pages-develop-php_mod_usage']->display = new \stdClass();
  cache::$data['data--pages-develop-php_mod_usage']->display->check = 'url';
  cache::$data['data--pages-develop-php_mod_usage']->display->where = 'path';
  cache::$data['data--pages-develop-php_mod_usage']->display->match = '%^/develop/php_mod_usage$%';
  cache::$data['data--pages-develop-php_mod_usage']->access = new \stdClass();
  cache::$data['data--pages-develop-php_mod_usage']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-develop-php_mod_usage']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-develop-php_mod_usage']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-develop-php_mod_usage']->children['menu_main']->type = 'link';
  cache::$data['data--pages-develop-php_mod_usage']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-develop-php_mod_usage']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-develop-php_mod_usage']->children['menu_user']->region = 'head';
  cache::$data['data--pages-develop-php_mod_usage']->children['menu_user']->type = 'code';
  cache::$data['data--pages-develop-php_mod_usage']->children['menu_user']->source = '\\effcore\\modules\\user\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-develop-php_mod_usage']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-develop-php_mod_usage']->children['logo']->region = 'head';
  cache::$data['data--pages-develop-php_mod_usage']->children['logo']->type = 'link';
  cache::$data['data--pages-develop-php_mod_usage']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-develop-php_mod_usage']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-develop-php_mod_usage']->children['title']->region = 'title';
  cache::$data['data--pages-develop-php_mod_usage']->children['title']->type = 'code';
  cache::$data['data--pages-develop-php_mod_usage']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-develop-php_mod_usage']->children['block_php_mod_usage_list'] = new \effcore\page_part();
  cache::$data['data--pages-develop-php_mod_usage']->children['block_php_mod_usage_list']->type = 'code';
  cache::$data['data--pages-develop-php_mod_usage']->children['block_php_mod_usage_list']->source = '\\effcore\\modules\\develop\\events_page::on_show_block_php_mod_usage_list';

}
<?php

namespace effcore { # cache for data--pages-storage-instances_manager

  cache::$data['data--pages-storage-instances_manager'] = new \effcore\page();
  cache::$data['data--pages-storage-instances_manager']->title = 'Manage instance User';
  cache::$data['data--pages-storage-instances_manager']->https = true;
  cache::$data['data--pages-storage-instances_manager']->display = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->display->check = 'path';
  cache::$data['data--pages-storage-instances_manager']->display->where = 'url';
  cache::$data['data--pages-storage-instances_manager']->display->match = '%^(?<base>/admin/instances/(?<entity>[a-z]+))/(?<action>[a-z]+)(/(?<id_user>[a-z0-9]+)|)$%';
  cache::$data['data--pages-storage-instances_manager']->access = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-storage-instances_manager']->content['block_menu_main'] = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['block_menu_main']->region = 'main_menu';
  cache::$data['data--pages-storage-instances_manager']->content['block_menu_main']->type = 'link';
  cache::$data['data--pages-storage-instances_manager']->content['block_menu_main']->dpath = 'trees/core/main';
  cache::$data['data--pages-storage-instances_manager']->content['block_menu_user'] = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['block_menu_user']->region = 'head';
  cache::$data['data--pages-storage-instances_manager']->content['block_menu_user']->type = 'code';
  cache::$data['data--pages-storage-instances_manager']->content['block_menu_user']->handler = '\\effcore\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-storage-instances_manager']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['block_logo']->region = 'head';
  cache::$data['data--pages-storage-instances_manager']->content['block_logo']->type = 'link';
  cache::$data['data--pages-storage-instances_manager']->content['block_logo']->dpath = 'blocks/page/logo';
  cache::$data['data--pages-storage-instances_manager']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['block_title']->region = 'title';
  cache::$data['data--pages-storage-instances_manager']->content['block_title']->type = 'code';
  cache::$data['data--pages-storage-instances_manager']->content['block_title']->handler = '\\effcore\\events_page::on_show_block_title';
  cache::$data['data--pages-storage-instances_manager']->content['block_tabs'] = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['block_tabs']->region = 'tabs';
  cache::$data['data--pages-storage-instances_manager']->content['block_tabs']->type = 'link';
  cache::$data['data--pages-storage-instances_manager']->content['block_tabs']->dpath = 'tabs/storage/instance_manage';
  cache::$data['data--pages-storage-instances_manager']->content['users_insert'] = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['users_insert']->display = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['users_insert']->display->check = 'action';
  cache::$data['data--pages-storage-instances_manager']->content['users_insert']->display->where = 'page_args';
  cache::$data['data--pages-storage-instances_manager']->content['users_insert']->display->match = '%insert%';
  cache::$data['data--pages-storage-instances_manager']->content['users_insert']->region = 'content';
  cache::$data['data--pages-storage-instances_manager']->content['users_insert']->type = 'code';
  cache::$data['data--pages-storage-instances_manager']->content['users_insert']->handler = '\\effcore\\instances_manager::instance_insert';
  cache::$data['data--pages-storage-instances_manager']->content['users_select'] = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['users_select']->display = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['users_select']->display->check = 'action';
  cache::$data['data--pages-storage-instances_manager']->content['users_select']->display->where = 'page_args';
  cache::$data['data--pages-storage-instances_manager']->content['users_select']->display->match = '%select%';
  cache::$data['data--pages-storage-instances_manager']->content['users_select']->region = 'content';
  cache::$data['data--pages-storage-instances_manager']->content['users_select']->type = 'code';
  cache::$data['data--pages-storage-instances_manager']->content['users_select']->handler = '\\effcore\\instances_manager::instance_select';
  cache::$data['data--pages-storage-instances_manager']->content['users_select']->items_per_page = 50;
  cache::$data['data--pages-storage-instances_manager']->content['users_update'] = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['users_update']->display = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['users_update']->display->check = 'action';
  cache::$data['data--pages-storage-instances_manager']->content['users_update']->display->where = 'page_args';
  cache::$data['data--pages-storage-instances_manager']->content['users_update']->display->match = '%update%';
  cache::$data['data--pages-storage-instances_manager']->content['users_update']->region = 'content';
  cache::$data['data--pages-storage-instances_manager']->content['users_update']->type = 'code';
  cache::$data['data--pages-storage-instances_manager']->content['users_update']->handler = '\\effcore\\instances_manager::instance_update';
  cache::$data['data--pages-storage-instances_manager']->content['users_delete'] = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['users_delete']->display = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['users_delete']->display->check = 'action';
  cache::$data['data--pages-storage-instances_manager']->content['users_delete']->display->where = 'page_args';
  cache::$data['data--pages-storage-instances_manager']->content['users_delete']->display->match = '%delete%';
  cache::$data['data--pages-storage-instances_manager']->content['users_delete']->region = 'content';
  cache::$data['data--pages-storage-instances_manager']->content['users_delete']->type = 'code';
  cache::$data['data--pages-storage-instances_manager']->content['users_delete']->handler = '\\effcore\\instances_manager::instance_delete';

}
<?php

namespace effcore { # cache for data--pages-storage-instances_manager

  cache::$data['data--pages-storage-instances_manager'] = new \effcore\page();
  cache::$data['data--pages-storage-instances_manager']->title = 'Manage instances';
  cache::$data['data--pages-storage-instances_manager']->https = true;
  cache::$data['data--pages-storage-instances_manager']->display = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->display->check = 'url';
  cache::$data['data--pages-storage-instances_manager']->display->where = 'path';
  cache::$data['data--pages-storage-instances_manager']->display->match = '%^(?<base>/manage/instances)/(?<action>[a-z]+)(/(?<entity>[a-z_]+)|)$%';
  cache::$data['data--pages-storage-instances_manager']->access = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-storage-instances_manager']->content['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instances_manager']->content['menu_main']->region = 'main_menu';
  cache::$data['data--pages-storage-instances_manager']->content['menu_main']->type = 'link';
  cache::$data['data--pages-storage-instances_manager']->content['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-storage-instances_manager']->content['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instances_manager']->content['menu_user']->region = 'head';
  cache::$data['data--pages-storage-instances_manager']->content['menu_user']->type = 'code';
  cache::$data['data--pages-storage-instances_manager']->content['menu_user']->source = '\\effcore\\modules\\menu\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-storage-instances_manager']->content['block_logo'] = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['block_logo']->region = 'head';
  cache::$data['data--pages-storage-instances_manager']->content['block_logo']->type = 'link';
  cache::$data['data--pages-storage-instances_manager']->content['block_logo']->dpath = 'blocks/page/logo';
  cache::$data['data--pages-storage-instances_manager']->content['block_title'] = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['block_title']->region = 'title';
  cache::$data['data--pages-storage-instances_manager']->content['block_title']->type = 'code';
  cache::$data['data--pages-storage-instances_manager']->content['block_title']->handler = '\\effcore\\modules\\page\\events_page::on_show_block_title';
  cache::$data['data--pages-storage-instances_manager']->content['block_tabs'] = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['block_tabs']->region = 'tabs';
  cache::$data['data--pages-storage-instances_manager']->content['block_tabs']->type = 'link';
  cache::$data['data--pages-storage-instances_manager']->content['block_tabs']->dpath = 'tabs/storage/instance_manage';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_select'] = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_select']->display = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_select']->display->check = 'page_args';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_select']->display->where = 'action';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_select']->display->match = '%select%';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_select']->region = 'content';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_select']->type = 'code';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_select']->handler = '\\effcore\\instances_manager::instance_select';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_select']->items_per_page = 50;
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_insert'] = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_insert']->display = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_insert']->display->check = 'page_args';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_insert']->display->where = 'action';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_insert']->display->match = '%insert%';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_insert']->region = 'content';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_insert']->type = 'code';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_insert']->handler = '\\effcore\\instances_manager::instance_insert';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_update'] = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_update']->display = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_update']->display->check = 'page_args';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_update']->display->where = 'action';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_update']->display->match = '%update%';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_update']->region = 'content';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_update']->type = 'code';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_update']->handler = '\\effcore\\instances_manager::instance_update';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_delete'] = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_delete']->display = new \stdClass();
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_delete']->display->check = 'page_args';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_delete']->display->where = 'action';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_delete']->display->match = '%delete%';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_delete']->region = 'content';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_delete']->type = 'code';
  cache::$data['data--pages-storage-instances_manager']->content['block_instance_delete']->handler = '\\effcore\\instances_manager::instance_delete';

}
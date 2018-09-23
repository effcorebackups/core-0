<?php

namespace effcore { # cache for data--pages-storage-instances

  cache::$data['data--pages-storage-instances'] = new \effcore\page();
  cache::$data['data--pages-storage-instances']->title = 'Instances';
  cache::$data['data--pages-storage-instances']->https = true;
  cache::$data['data--pages-storage-instances']->display = new \stdClass();
  cache::$data['data--pages-storage-instances']->display->check = 'url';
  cache::$data['data--pages-storage-instances']->display->where = 'path';
  cache::$data['data--pages-storage-instances']->display->match = '%^(?<base>/manage/instances)/(?<action>[a-z]+)(/(?<id>[a-z_]+)|)$%';
  cache::$data['data--pages-storage-instances']->access = new \stdClass();
  cache::$data['data--pages-storage-instances']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-storage-instances']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instances']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-storage-instances']->children['menu_main']->type = 'link';
  cache::$data['data--pages-storage-instances']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-storage-instances']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instances']->children['menu_user']->region = 'head';
  cache::$data['data--pages-storage-instances']->children['menu_user']->type = 'code';
  cache::$data['data--pages-storage-instances']->children['menu_user']->source = '\\effcore\\modules\\user\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-storage-instances']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instances']->children['logo']->region = 'head';
  cache::$data['data--pages-storage-instances']->children['logo']->type = 'link';
  cache::$data['data--pages-storage-instances']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-storage-instances']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instances']->children['title']->region = 'title';
  cache::$data['data--pages-storage-instances']->children['title']->type = 'code';
  cache::$data['data--pages-storage-instances']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-storage-instances']->children['tabs'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instances']->children['tabs']->region = 'tabs';
  cache::$data['data--pages-storage-instances']->children['tabs']->type = 'link';
  cache::$data['data--pages-storage-instances']->children['tabs']->source = 'tabs/storage/manage_instances';
  cache::$data['data--pages-storage-instances']->children['block_instance_select'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instances']->children['block_instance_select']->display = new \stdClass();
  cache::$data['data--pages-storage-instances']->children['block_instance_select']->display->check = 'page_args';
  cache::$data['data--pages-storage-instances']->children['block_instance_select']->display->where = 'action';
  cache::$data['data--pages-storage-instances']->children['block_instance_select']->display->match = '%select%';
  cache::$data['data--pages-storage-instances']->children['block_instance_select']->type = 'code';
  cache::$data['data--pages-storage-instances']->children['block_instance_select']->source = '\\effcore\\manage_instances::instance_select';
  cache::$data['data--pages-storage-instances']->children['block_instance_insert'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instances']->children['block_instance_insert']->display = new \stdClass();
  cache::$data['data--pages-storage-instances']->children['block_instance_insert']->display->check = 'page_args';
  cache::$data['data--pages-storage-instances']->children['block_instance_insert']->display->where = 'action';
  cache::$data['data--pages-storage-instances']->children['block_instance_insert']->display->match = '%insert%';
  cache::$data['data--pages-storage-instances']->children['block_instance_insert']->type = 'code';
  cache::$data['data--pages-storage-instances']->children['block_instance_insert']->source = '\\effcore\\manage_instances::instance_insert';
  cache::$data['data--pages-storage-instances']->children['block_instance_update'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instances']->children['block_instance_update']->display = new \stdClass();
  cache::$data['data--pages-storage-instances']->children['block_instance_update']->display->check = 'page_args';
  cache::$data['data--pages-storage-instances']->children['block_instance_update']->display->where = 'action';
  cache::$data['data--pages-storage-instances']->children['block_instance_update']->display->match = '%update%';
  cache::$data['data--pages-storage-instances']->children['block_instance_update']->type = 'code';
  cache::$data['data--pages-storage-instances']->children['block_instance_update']->source = '\\effcore\\manage_instances::instance_update';
  cache::$data['data--pages-storage-instances']->children['block_instance_delete'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instances']->children['block_instance_delete']->display = new \stdClass();
  cache::$data['data--pages-storage-instances']->children['block_instance_delete']->display->check = 'page_args';
  cache::$data['data--pages-storage-instances']->children['block_instance_delete']->display->where = 'action';
  cache::$data['data--pages-storage-instances']->children['block_instance_delete']->display->match = '%delete%';
  cache::$data['data--pages-storage-instances']->children['block_instance_delete']->type = 'code';
  cache::$data['data--pages-storage-instances']->children['block_instance_delete']->source = '\\effcore\\manage_instances::instance_delete';

}
<?php

namespace effcore { # cache for data--pages-storage-instance_delete_multiple_by_instances_id

  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id'] = new \effcore\page();
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->title = 'Delete instances';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->https = true;
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->display = new \stdClass();
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->display->check = 'url';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->display->where = 'path';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->display->match = '%^(?<base>/manage/instances)/(?<action>delete)/(?<entity_name>[a-z0-9_]+)/(?<instances_id>[a-z0-9_+]+/[a-z0-9_+/]+)$%';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->access = new \stdClass();
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['menu_main']->type = 'link';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['menu_user']->region = 'head';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['menu_user']->type = 'code';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['menu_user']->source = '\\effcore\\modules\\user\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['logo']->region = 'head';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['logo']->type = 'link';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['title']->region = 'title';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['title']->type = 'code';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['tabs'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['tabs']->region = 'tabs';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['tabs']->type = 'link';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['tabs']->source = 'tabs/storage/manage_instances';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['block_instance_delete_multiple_by_instances_id'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['block_instance_delete_multiple_by_instances_id']->type = 'code';
  cache::$data['data--pages-storage-instance_delete_multiple_by_instances_id']->children['block_instance_delete_multiple_by_instances_id']->source = '\\effcore\\manage_instances::instance_delete_multiple_by_instances_id';

}
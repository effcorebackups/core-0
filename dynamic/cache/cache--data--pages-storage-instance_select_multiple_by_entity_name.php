<?php

namespace effcore { # cache for data--pages-storage-instance_select_multiple_by_entity_name

  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name'] = new \effcore\page();
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->title = 'Select instances';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->https = true;
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->display = new \stdClass();
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->display->check = 'url';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->display->where = 'path';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->display->match = '%^(?<base>/manage/instances)/(?<action>select)/(?<entity_name>[a-z0-9_]+)$%';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->access = new \stdClass();
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['menu_main']->type = 'link';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['menu_user']->region = 'head';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['menu_user']->type = 'code';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['menu_user']->source = '\\effcore\\modules\\user\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['logo']->region = 'head';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['logo']->type = 'link';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['title']->region = 'title';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['title']->type = 'code';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['tabs'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['tabs']->region = 'tabs';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['tabs']->type = 'link';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['tabs']->source = 'tabs/storage/manage_instances';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['block_instance_select_multiple_by_entity_name'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['block_instance_select_multiple_by_entity_name']->type = 'code';
  cache::$data['data--pages-storage-instance_select_multiple_by_entity_name']->children['block_instance_select_multiple_by_entity_name']->source = '\\effcore\\manage_instances::instance_select_multiple_by_entity_name';

}
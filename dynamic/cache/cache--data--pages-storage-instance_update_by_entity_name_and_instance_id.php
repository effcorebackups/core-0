<?php

namespace effcore { # cache for data--pages-storage-instance_update_by_entity_name_and_instance_id

  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id'] = new \effcore\page();
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->title = 'Update instance';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->https = true;
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->display = new \stdClass();
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->display->check = 'url';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->display->where = 'path';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->display->match = '%^(?<base>/manage/instances)/(?<action>update)/(?<entity_name>[a-z0-9_]+)/(?<instance_id>[a-zA-Z0-9-_+]+)$%';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->access = new \stdClass();
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['menu_main'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['menu_main']->region = 'main_menu';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['menu_main']->type = 'link';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['menu_main']->source = 'trees/core/main';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['menu_user'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['menu_user']->region = 'head';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['menu_user']->type = 'code';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['menu_user']->source = '\\effcore\\modules\\user\\events_page::on_show_block_menu_user';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['logo'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['logo']->region = 'head';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['logo']->type = 'link';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['logo']->source = 'blocks/page/logo';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['title']->region = 'title';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['title']->type = 'code';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['block_instance_update_by_entity_name_and_instance_id'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['block_instance_update_by_entity_name_and_instance_id']->type = 'code';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['block_instance_update_by_entity_name_and_instance_id']->source = '\\effcore\\manage_instances::instance_update_by_entity_name_and_instance_id';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['form_access'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['form_access']->display = new \stdClass();
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['form_access']->display->check = 'user';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['form_access']->display->where = 'role';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['form_access']->display->match = '%^admins$%';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['form_access']->type = 'link';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['form_access']->source = 'forms/user/access';
  cache::$data['data--pages-storage-instance_update_by_entity_name_and_instance_id']->children['form_access']->source_args['entity_name'] = 'page';

}
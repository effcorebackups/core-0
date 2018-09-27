<?php

namespace effcore { # cache for data--pages-storage-instance_redirect_to_select

  cache::$data['data--pages-storage-instance_redirect_to_select'] = new \effcore\page();
  cache::$data['data--pages-storage-instance_redirect_to_select']->https = true;
  cache::$data['data--pages-storage-instance_redirect_to_select']->display = new \stdClass();
  cache::$data['data--pages-storage-instance_redirect_to_select']->display->check = 'url';
  cache::$data['data--pages-storage-instance_redirect_to_select']->display->where = 'path';
  cache::$data['data--pages-storage-instance_redirect_to_select']->display->match = '%^(?<base>/manage/instances)/(?<action>select)$%';
  cache::$data['data--pages-storage-instance_redirect_to_select']->access = new \stdClass();
  cache::$data['data--pages-storage-instance_redirect_to_select']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-storage-instance_redirect_to_select']->children['block_instance_redirect_to_select'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_redirect_to_select']->children['block_instance_redirect_to_select']->type = 'code';
  cache::$data['data--pages-storage-instance_redirect_to_select']->children['block_instance_redirect_to_select']->source = '\\effcore\\manage_instances::redirect_to_select';

}
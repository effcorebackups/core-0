<?php

namespace effcore { # cache for data--pages-storage-instance_redirect_to_insert

  cache::$data['data--pages-storage-instance_redirect_to_insert'] = new \effcore\page();
  cache::$data['data--pages-storage-instance_redirect_to_insert']->https = true;
  cache::$data['data--pages-storage-instance_redirect_to_insert']->display = new \stdClass();
  cache::$data['data--pages-storage-instance_redirect_to_insert']->display->check = 'url';
  cache::$data['data--pages-storage-instance_redirect_to_insert']->display->where = 'path';
  cache::$data['data--pages-storage-instance_redirect_to_insert']->display->match = '%^(?<base>/manage/instances)/(?<action>insert)$%';
  cache::$data['data--pages-storage-instance_redirect_to_insert']->access = new \stdClass();
  cache::$data['data--pages-storage-instance_redirect_to_insert']->access->roles['admins'] = 'admins';
  cache::$data['data--pages-storage-instance_redirect_to_insert']->children['block_instance_redirect_to_insert'] = new \effcore\page_part();
  cache::$data['data--pages-storage-instance_redirect_to_insert']->children['block_instance_redirect_to_insert']->type = 'code';
  cache::$data['data--pages-storage-instance_redirect_to_insert']->children['block_instance_redirect_to_insert']->source = '\\effcore\\manage_instances::redirect_to_insert';

}
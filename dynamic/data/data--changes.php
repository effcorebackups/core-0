<?php

namespace effectivecore { # data for changes

  dynamic_factory::$info['changes']['build'] = '2017-10-16 21:36:49';
  dynamic_factory::$data['changes']['core'] = new \stdClass();
  dynamic_factory::$data['changes']['core']->insert['storages/storage/storage_sql_dpo'] = new \stdClass();
  dynamic_factory::$data['changes']['core']->insert['storages/storage/storage_sql_dpo']->driver = 'mysql';
  dynamic_factory::$data['changes']['core']->insert['storages/storage/storage_sql_dpo']->credentials = new \stdClass();
  dynamic_factory::$data['changes']['core']->insert['storages/storage/storage_sql_dpo']->credentials->host_name = '127.0.0.1';
  dynamic_factory::$data['changes']['core']->insert['storages/storage/storage_sql_dpo']->credentials->storage_name = 'main';
  dynamic_factory::$data['changes']['core']->insert['storages/storage/storage_sql_dpo']->credentials->user_name = 'root';
  dynamic_factory::$data['changes']['core']->insert['storages/storage/storage_sql_dpo']->credentials->password = '123';
  dynamic_factory::$data['changes']['page'] = new \stdClass();
  dynamic_factory::$data['changes']['page']->update['decoration/page/color_id'] = 'color_black';
  dynamic_factory::$data['changes']['page']->update['decoration/page/color_bg_id'] = 'color_original_blue';

}
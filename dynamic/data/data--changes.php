<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-21 15:06:34';
  data::$data['changes']['core'] = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql'] = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->driver = 'mysql';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->host_name = '[::1]';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->port = '3306';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->storage_name = 'main';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->user_name = 'root';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->password = '123';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->table_prefix = '';
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '9e79fe05ed48b13c9770abfd09e7453c2021fec9';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '921326dd02fc9f3bfc6fc16d7b0f5431fddca0f7';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'f84c15c68aaae506738737ff63ed4fc132788fb4';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '7c13b68c469b6cbaaa6d162d77de29c9d0b0d541';

}
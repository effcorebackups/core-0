<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-09 12:15:56';
  data::$data['changes']['core'] = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql'] = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->driver = 'mysql';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->host_name = '127.0.0.1';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->port = '3306';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->storage_id = 'main';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->user_name = 'root';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->password = '123';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->table_prefix = '';
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '17adc8e99e44a13b4ed49e40086886a204f2f74a';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '5647855d0300657fa6b9d4fd3696b91cb96a2f57';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '39f3d9cc41506f4606c97bef517264f73fe2fa12';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '2b9b3e56e599d7b0dc5a0d36000d4b6f63260172';

}
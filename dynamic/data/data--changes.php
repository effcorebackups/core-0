<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-09 08:59:39';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = 'b4a796374c2a2267b9aa6d84ea5091fc666a6ba6';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'b5380ae1143b6708bedc2ebd4747b314c6a86ffa';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '61d356b9d66ebb940275c4817cef88aeacb40b88';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '217b6818ba7328fa86630839a0eed549301ad81b';

}
<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-21 12:36:22';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '33ae7005e3fed8e4afe161a19b86cf20fbb4a710';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '08d2619b11fcc847c07558fdc9b8fb77744e94a8';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '2592bfb15b06d18ad741c554deb1ea208b820008';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = 'b337148134d9e50f8100f2ed2ad16f395cfd911b';

}
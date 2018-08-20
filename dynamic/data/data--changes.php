<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-08-20 16:21:25';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '07ffdeff7f6eaaf2d52b78ee75cd5c07e1bc0058';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '6a5f6c3261090c1407c851470d55d21127f1c650';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '8a68d5881d3eccc1844deb2bb232d700bcee5aa9';

}
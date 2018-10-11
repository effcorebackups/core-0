<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-11 13:28:40';
  data::$data['changes']['core'] = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql'] = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->driver = 'mysql';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->host_name = '[::1]';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->port = '3306';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->storage_id = 'main';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->user_name = 'root';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->password = '123';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->table_prefix = '';
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = 'e86526a85594c395488bff9fc1682b1fcdeea458';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '7cef0f930b7cef60e27d91545030145db1bd8650';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'df7ede03ff675f0576e144d4de08167ae34184eb';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = 'd601476cb0a4aa410ee2703955a80e34737e6bf2';

}
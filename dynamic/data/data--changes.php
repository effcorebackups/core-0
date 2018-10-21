<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-21 20:40:40';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = 'c93e46f828b2d177ce07feee215cab0a013930b5';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '8f73713de60581ea6f1d8801fdcd1b21bb2fb4ae';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'ef05f971f94c5402f1ced6bc32973d0bb22ef7a5';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '13e30cbc29e43d5c5df6e1fd345a93a001f0c30f';

}
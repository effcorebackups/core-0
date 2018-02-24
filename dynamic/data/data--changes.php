<?php

namespace effectivecore { # data for changes

  dynamic::$info['changes']['build'] = '2018-02-24 18:02:22';
  dynamic::$data['changes']['core'] = new \stdClass();
  dynamic::$data['changes']['core']->insert['storages/storage/storage_pdo_sql'] = new \stdClass();
  dynamic::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->driver = 'mysql';
  dynamic::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials = new \stdClass();
  dynamic::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->host_name = '127.0.0.1';
  dynamic::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->port = '3306';
  dynamic::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->storage_id = 'main';
  dynamic::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->user_name = 'root';
  dynamic::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->password = '123';
  dynamic::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->table_prefix = '';
  dynamic::$data['changes']['core']->update['settings/core/key'] = '69eac3e85d7b1751cd8d6138039458f6233bda00';

}
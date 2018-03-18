<?php

namespace effcore { # data for changes

  dynamic::$info['changes']['build'] = '2018-03-18 15:04:54';
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
  dynamic::$data['changes']['core']->update['settings/core/key'] = '46193d12552d09cde4e002d4d2386e552db3f520';

}
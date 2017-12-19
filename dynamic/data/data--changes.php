<?php

namespace effectivecore { # data for changes

  dynamic::$info['changes']['build'] = '2017-12-18 23:37:59';
  dynamic::$data['changes']['core'] = new \stdClass();
  dynamic::$data['changes']['core']->insert['storages/storage/storage_sql_dpo'] = new \stdClass();
  dynamic::$data['changes']['core']->insert['storages/storage/storage_sql_dpo']->driver = 'mysql';
  dynamic::$data['changes']['core']->insert['storages/storage/storage_sql_dpo']->credentials = new \stdClass();
  dynamic::$data['changes']['core']->insert['storages/storage/storage_sql_dpo']->credentials->host_name = '127.0.0.1';
  dynamic::$data['changes']['core']->insert['storages/storage/storage_sql_dpo']->credentials->port = '3306';
  dynamic::$data['changes']['core']->insert['storages/storage/storage_sql_dpo']->credentials->storage_name = 'main';
  dynamic::$data['changes']['core']->insert['storages/storage/storage_sql_dpo']->credentials->user_name = 'root';
  dynamic::$data['changes']['core']->insert['storages/storage/storage_sql_dpo']->credentials->password = '123';
  dynamic::$data['changes']['core']->insert['storages/storage/storage_sql_dpo']->table_prefix = '';

}
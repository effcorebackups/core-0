<?php

namespace effectivecore { # data for changes

  dynamic::$info['changes']['build'] = '2017-12-30 15:00:37';
  dynamic::$data['changes']['core'] = new \stdClass();
  dynamic::$data['changes']['core']->insert['storage/storage/storage_pdo_sql'] = new \stdClass();
  dynamic::$data['changes']['core']->insert['storage/storage/storage_pdo_sql']->driver = 'mysql';
  dynamic::$data['changes']['core']->insert['storage/storage/storage_pdo_sql']->credentials = new \stdClass();
  dynamic::$data['changes']['core']->insert['storage/storage/storage_pdo_sql']->credentials->host_name = '127.0.0.1';
  dynamic::$data['changes']['core']->insert['storage/storage/storage_pdo_sql']->credentials->port = '3306';
  dynamic::$data['changes']['core']->insert['storage/storage/storage_pdo_sql']->credentials->storage_name = 'main';
  dynamic::$data['changes']['core']->insert['storage/storage/storage_pdo_sql']->credentials->user_name = 'root';
  dynamic::$data['changes']['core']->insert['storage/storage/storage_pdo_sql']->credentials->password = '123';
  dynamic::$data['changes']['core']->insert['storage/storage/storage_pdo_sql']->table_prefix = '';
  dynamic::$data['changes']['core']->update['settings/core/key'] = 'd86f9200a8c64625ab1c557531cadfe501ee0c90';

}
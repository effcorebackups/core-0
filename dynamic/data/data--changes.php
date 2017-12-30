<?php

namespace effectivecore { # data for changes

  dynamic::$info['changes']['build'] = '2017-12-30 15:06:21';
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
  dynamic::$data['changes']['core']->update['settings/core/key'] = '75e688bfe44812dfe4b53b70e11b47b0dabcbf86';

}
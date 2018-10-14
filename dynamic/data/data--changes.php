<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-14 17:12:57';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '7e662366dd3bc4195e280742f05dea93cf0080a8';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'efc7d3124c8174b3e1443cca8728ff88639de068';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'a33acf8db4684d11a88148b428f79a77b8859097';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = 'e29acd4565b542f40c120e68eaff4f1ecf42e730';

}
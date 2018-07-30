<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-07-30 14:03:57';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '6052c82522e70f3bc8a184eddd91330212838ecb';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'c7b3c0d905322e0d090cb5d962522c26db776c35';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'baa4dc37ba36430098e61f5cea6d4cc99b27256d';

}
<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-03 10:25:03';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = 'dd72ad17891beff959436a5f6f5454e8a2fbf9e9';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'a8fe7d4fca06b6ef782d9d1e0e3dd4e7d41714a8';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '663aa0ca00f9bc80f9df46405d09c04d7e8bb233';

}
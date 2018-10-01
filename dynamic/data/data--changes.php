<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-01 12:07:15';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '155b3c1abbd3b93cc04f93e51e68a99168c71a1a';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '1037abdad6a54635788f0d7070e8d51c2de06f63';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '7d3a39409af3bcd2765dba1f6bd55bb67c085761';

}
<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-09 14:07:53';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '4129b5ae16bb89f7ebf78534f48f740039ed2775';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '72aeab6a4857983e94a72b2a3a0bd02d38507543';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '1a610fb944699c04cef8c4953e487d1f863122c6';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '2ae3f4b59afebd1565d43c0c12f785f10eb6e8ea';

}
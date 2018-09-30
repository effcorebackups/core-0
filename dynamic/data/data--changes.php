<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-09-30 11:48:12';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = 'ebefed6327e8d230e5797edd5fa047f4a45b5b15';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'c00db6de063eab8f0ccdfb0de384ded77cdf1e3a';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '04425ec67ba2e0ba59e0b301fa648d096f0ebce6';

}
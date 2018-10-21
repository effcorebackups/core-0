<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-21 05:41:32';
  data::$data['changes']['core'] = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql'] = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->driver = 'mysql';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->host_name = '[::1]';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->port = '3306';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->storage_name = 'main';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->user_name = 'root';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->password = '123';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->table_prefix = '';
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '0d8fc89626ef461916f95b36ade66ef7d23a3e11';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '84bd4d6ba67bb7a1c084a3bf57cb4712b8bf7169';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '5c34166020ed64b67c0013a85ccab1e4da5b1ffe';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '4e28bf8d9f4ce2a30047024effb6614683a9161b';

}
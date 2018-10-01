<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-01 11:28:14';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '7052a0b9f511939f9596df63bf81e860c49fa97f';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'b6eff220eb7e9a45773d22e44a5671d6ea800dd2';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'ab28f5a66c3eeb3985daed75c1399fce6b73d86c';

}
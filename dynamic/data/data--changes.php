<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-08 22:19:35';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '04b83a99f1d0a39a573b524244a8889d516594f1';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '6cf0afecd6e25ac5dc95143f5f1e9510c80c9934';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '4c87bc17daf846b77ab74060d85914c96000826d';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '5d76b91354748c41125c712a02f7e2c9afbbe51f';

}
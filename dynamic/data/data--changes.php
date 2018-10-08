<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-08 19:11:58';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = 'a2059e106b3d051d75b3eca08a9d2d3422f3ce04';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '9c7bf92f07634a185442a41ae42f9e0112560fad';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '59c1d1b312041b8be5a276f959415946b79e6b2e';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '7f68894ced89eb76db4cdd3d8de50a0fd081408c';

}
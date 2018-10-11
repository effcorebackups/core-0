<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-11 12:57:12';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '3a00c5f063a7f8d06f9abd4072702b53d0df83cf';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '5ce01ad78ea2276972d6bf8d8692efc169170122';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'eebf12870c8281d9144fa1d46c7ff573d9f67d47';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '4e0b8a4471428be71d4c8932149b5af14173c5a9';

}
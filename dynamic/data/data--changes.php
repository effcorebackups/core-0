<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-22 11:04:21';
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
  data::$data['changes']['core']->update['settings/locales/lang_code'] = 'ru';
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '8fc3331bd5595a9bed479b79f8bc5d3cd54eb420';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'dbdc86b5b587b0c9a062d14838b4d4cd2112c7d2';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '51065a701028befd83e40c4ff63ffb0828d99259';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = 'bc26a6aadaabed6e1205190687c9112123da801c';

}
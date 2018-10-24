<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-24 09:39:28';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '8e1b6046b694121d1e55f6fd866e5a99b64e7b6d';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '6d2bce52815cc8255dbefa8c243d5e7b07deb989';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'a370dbf737dfc74fc937cafaabe273e39a08aa81';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = 'cec3f4763fb08951b907fb91b9925dd084c7a7f8';

}
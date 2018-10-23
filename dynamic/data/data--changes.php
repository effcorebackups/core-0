<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-23 21:10:48';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = 'c199306e06284c07e9ea376444a64a9a70f6b802';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '9d712e5d8a5c4de4ebbc3162df19ea58adc6bc5d';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '77d6a3a1d0727b2946f7176b8ba116ae34c79fd3';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '4227ec46c9a37b4e8e145babe81f61e02116a65e';

}
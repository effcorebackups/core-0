<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-25 10:59:43';
  data::$data['changes']['core'] = new \stdClass();
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '2e8248d6f509b2c55bac9f87a404e7fc9fb29549';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '1381e34a8121320c79a23d3ff18c449596733de3';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'd0e068e4c363a9c41bb119dd822367a3829bbb52';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = 'db70e2ade85e06a53ddcba158104c85386a6431e';
  data::$data['changes']['core']->update['settings/locales/lang_code'] = 'en';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql'] = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->driver = 'mysql';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->host_name = '[::1]';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->port = '3306';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->storage_name = 'main';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->user_name = 'root';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->password = '123';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->table_prefix = '';

}
<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-24 14:36:20';
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
  data::$data['changes']['core']->update['settings/locales/lang_code'] = 'en';
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = 'c5f463796d852811958a7c30c8e2e1ebc647f2d7';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'a2b46751bb2041c2d127b2feb3ec2ea1f12b84f5';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'adf7bedd276fba9e19707b744703556b4a42c5ce';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = 'b757da948c9628c995a4b173bb409e04e1096d37';
  data::$data['changes']['locales'] = new \stdClass();
  data::$data['changes']['locales']->update['settings/locales/lang_code'] = 'ru';

}
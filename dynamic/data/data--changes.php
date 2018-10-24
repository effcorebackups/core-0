<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-24 21:22:35';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '30e32359709a09b412bce82d9120c7ded442e38d';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'e91f2ea551967f51894c1c76780bf0ec5294c3c1';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '7906da3a58b041f21006fdc496814098f4444804';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = 'b85de9f1ac12645507a7286e684c8fba7c224281';

}
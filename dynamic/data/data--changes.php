<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-22 14:50:13';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '5b2656bf4a920ea9c86989c5a114bd91ccbc3b89';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '9a69052194f26eb04a7169ec64d6ef47363f04f7';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'c210859d78f65536912441b14576a9323e7c6586';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = 'a7b20ad8942a4459c5524d0fcfbdf6dc205844e0';
  data::$data['changes']['locales'] = new \stdClass();
  data::$data['changes']['locales']->update['settings/locales/lang_code'] = 'ru';

}
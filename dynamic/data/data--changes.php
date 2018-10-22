<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-22 08:32:10';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '28e36d7a7b69cfecbc10c9331f2d44273a3a5e25';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'b4f4ea0b873dfa09fa29f9bac44a746993f13c6d';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '921df9b1ceded640e8688c08e8dcf3696022fde5';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '6ab5016833189d4f84d435372311e1f04911a257';

}
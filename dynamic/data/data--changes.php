<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-23 20:30:15';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = 'b741dcf1d23ad671ce254ce6570b74c695fec719';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'd11df359b25738303bccd9ddf95da4d62d6ee1b3';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '27acaefb5ca9ba65846a7634ab52ef037494eab7';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '037f37381f7c3241531366717ed01539f8425e5c';

}
<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-25 11:18:36';
  data::$data['changes']['core'] = new \stdClass();
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '58e82bad799744b49adb5a71267d9251529e296a';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '105e934d71fd503647a7e3511644c3a51bdf0d07';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'acb748b4042a643eaebf786de5646267a80e1fd3';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '4ec21d2509caf55bebcecc0185c3c2329563ef44';
  data::$data['changes']['core']->update['settings/locales/lang_code'] = 'en';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql'] = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->driver = 'mysql';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->host_name = '[::1]';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->port = '3306';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->storage_name = 'main';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->login = 'root';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->password = '123';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->table_prefix = '';

}
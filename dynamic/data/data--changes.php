<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-23 20:09:34';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = 'dde7cb1b8448de344d9c83c9a74a52882f74ad8a';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '46fc176aae6d6dc53a9574d576cff66babeaf372';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '38eebbc159d0470eb1d656f5a9f9d9c532362e0b';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '0570a1fb80b3459ba0329bad9bb2db666846ce16';

}
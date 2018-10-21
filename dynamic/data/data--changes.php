<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-21 09:36:32';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '9f4fb5e388cfecd44b65cd4a6932fd5332f2bc29';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '72bde13ada7af5a5572805745c362697a228df6c';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '5e6155fd4676fc8374bd54bb68f2f2449015b58c';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '21520f9144e13182bf039332f58c5e14724e8688';

}
<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-08 21:21:16';
  data::$data['changes']['core'] = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql'] = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->driver = 'mysql';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->host_name = '127.0.0.1';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->port = '3306';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->storage_id = 'main';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->user_name = 'root';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->password = '123';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->table_prefix = '';
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '54a7dd0b1600ebca34094c7082ed3e52916aa547';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'b711dcaa5b94ed55702a1e48e2e0ddfd5a2662a3';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '93118f10dc80a11320b420c35596b7c1c509d3b6';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = 'e90437de5f051b633be8fef1dd0530b41538cccc';

}
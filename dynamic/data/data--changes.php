<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-14 11:27:58';
  data::$data['changes']['core'] = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql'] = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->driver = 'mysql';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->host_name = '[::1]';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->port = '3306';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->storage_id = 'main';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->user_name = 'root';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->password = '123';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->table_prefix = '';
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = 'd139bb781feb1bebc1c535c915767c086f7f8908';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'f303cd411c710fb55a2ddc8fad0f42ef2d0a98b7';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'ad0c1cb28eedbcb93ac7f3e9dd035a73fc9d21a9';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '833a049ac46301caa73cee56e452f13a811540b5';

}
<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-11 08:51:52';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '3e8e612c7e9bfaacffe221a89a8aef543ede68d9';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '50445047c06a2a32e4da4624950b0c6e3bf655df';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '62e37c02b8ab24b422c82fa88bb9afa5cdc01343';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '79dd6d766b9af801a84ffe845a2c9c1a0a01eafc';

}
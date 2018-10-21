<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-21 20:28:34';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '667dfab892ecb8b9b819d514f514ddb55ee6d6be';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '370539719222bb1d33350fc257bc802324bcdcea';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'a47a4a9b8d910609d90986bcbe5239fb0881fbf4';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '3181714d5c7887991ab4667f8ba77079b416a2c3';

}
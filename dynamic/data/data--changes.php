<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-21 13:57:56';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '95a8a25aa1f415c78e4e158429cb680dca427a48';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '56d0aea91b898de7b80887cc921f63b039596780';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'c5067b05f02d120698fefae0555c186df419a708';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '8219653e2b5f7f5a97f8f7988ed376787825a580';

}
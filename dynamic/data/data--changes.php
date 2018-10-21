<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-21 05:46:46';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '0352a7e2fc812e87599b8fe1fc39ecb6c5113de3';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'f7e0874ceaf891e108aa3af27b142260e5073f0a';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'b6107cb9745f06ef866ae152ff4a08a45b1dffcb';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '8f6a8ed3dc56dadb545e6a90281bc4e879a18153';

}
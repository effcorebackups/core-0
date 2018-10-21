<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-21 10:17:18';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '3a763b6c82d86060abeaadf05a688866313eea4a';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '436253e05cd3a8b59ad1518cef38bae248d64ed3';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'a8781a07a2ce214f0d5278e40511c3917049acb1';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = 'be44eea26dd50f6f34fe6912fab1cc53f9678290';

}
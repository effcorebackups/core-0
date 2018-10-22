<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-22 06:41:14';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '06d561b519cc2779e4c555cbe69300f6f2933fe0';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'eb29f8b34354a2e3806e3e318a4ac0f502bea082';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'bb8a7a620efcda8b2c0197348be7cdf231e75b32';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = 'c32a61a3cb8e852199b8018065eb628d82bfef36';

}
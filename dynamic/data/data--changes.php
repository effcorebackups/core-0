<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-13 11:06:15';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = 'a78dd6406e7f34edb3698c7d36440955ba81c4ba';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '8a9552427b1c0478b53ae681ce216db15828f1f9';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'cc248ede1410f664a0f093ebbc69ad46894e5188';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = 'f7132a9495c38d484bb0950fbe5178e9b86ddd5e';

}
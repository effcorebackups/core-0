<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-09 13:44:36';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = 'ef0f5ed89c0dc649e09664293c26c13058385046';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '58b3d8fa2a1a802b16ef4229ebba88d56009648b';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '27637f04daf40560878a30a19a1ad3ee0d02e3ec';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = 'b183bdebcc312a1eeb6d1be840bb9d6904f70f09';

}
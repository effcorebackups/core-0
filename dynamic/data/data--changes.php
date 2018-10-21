<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-21 15:24:06';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '0c23703ab4ff22bf9b0663b37267100b2ecd0daf';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'b04cff1b13a1ac6e7788a4525160d1c25e2cb9c9';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'fe5a7afe2160dd5cbd359956d6017835ef3a57f4';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '539b87c06dbdef90699e027882b625af4b84ab50';

}
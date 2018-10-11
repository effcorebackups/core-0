<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-11 13:25:31';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '549de043b1aedbcae15e472c4ee7cd4a0d1dd378';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'f1dc60f916903c5fbb6b1f1871a3203ac3620005';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'ff1bd465cb288d13c5bf11482f920b5705cfea24';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '9f658b390f894db11c714079868764b78de5ec75';

}
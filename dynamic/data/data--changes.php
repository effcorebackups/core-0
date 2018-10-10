<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-10 15:06:13';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = 'b792ef1f30b8e45851087a145e1a08d209de194f';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '45f0907a0acc86697226163cbd42816cffd73939';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'bf70a18f9a672651a2125eb7aa60d56e1cca88f6';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = 'fb2ce500a3458590fcb365c8298ee6f3a52ecfbe';

}
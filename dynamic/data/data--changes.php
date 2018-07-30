<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-07-30 10:40:39';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '7d9cd8df79a5304b282934f8824a91c9d915a3ae';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'd18abe3db6f39e2735f2555af1a25a503c635f5e';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'a55940be526d3081a43a2e20f3bdb9d1d8008a4f';

}
<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-07 21:38:56';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '66abce80965ad60e180b2f4c471a1af7390c6fa3';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'e23ce190173a95a49c2bcfb06162f63c04fb28d0';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'b4867cbaf9596dd58fe2761659d1f3cacb198c8d';

}
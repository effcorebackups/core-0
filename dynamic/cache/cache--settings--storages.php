<?php

namespace effectivecore { # cache for settings--storages

  cache::$data['settings--storages']['storage']['storage_pdo_sql'] = new \effectivecore\storage_pdo();
  cache::$data['settings--storages']['storage']['storage_pdo_sql']->id = 'main';
  cache::$data['settings--storages']['storage']['storage_pdo_sql']->driver = 'mysql';
  cache::$data['settings--storages']['storage']['storage_pdo_sql']->credentials = new \stdClass();
  cache::$data['settings--storages']['storage']['storage_pdo_sql']->credentials->host_name = '127.0.0.1';
  cache::$data['settings--storages']['storage']['storage_pdo_sql']->credentials->port = '3306';
  cache::$data['settings--storages']['storage']['storage_pdo_sql']->credentials->storage_name = 'main';
  cache::$data['settings--storages']['storage']['storage_pdo_sql']->credentials->user_name = 'root';
  cache::$data['settings--storages']['storage']['storage_pdo_sql']->credentials->password = '123';
  cache::$data['settings--storages']['storage']['storage_files_nosql'] = new \effectivecore\storage_files();
  cache::$data['settings--storages']['storage']['storage_files_nosql']->id = 'files';

}
<?php

namespace effectivecore { # cache for data--storages-storage-storage_pdo_sql

  cache::$data['data--storages-storage-storage_pdo_sql'] = new \effectivecore\storage_pdo();
  cache::$data['data--storages-storage-storage_pdo_sql']->id = 'main';
  cache::$data['data--storages-storage-storage_pdo_sql']->driver = 'mysql';
  cache::$data['data--storages-storage-storage_pdo_sql']->credentials = new \stdClass();
  cache::$data['data--storages-storage-storage_pdo_sql']->credentials->host_name = '127.0.0.1';
  cache::$data['data--storages-storage-storage_pdo_sql']->credentials->port = '3306';
  cache::$data['data--storages-storage-storage_pdo_sql']->credentials->storage_id = 'main';
  cache::$data['data--storages-storage-storage_pdo_sql']->credentials->user_name = 'root';
  cache::$data['data--storages-storage-storage_pdo_sql']->credentials->password = '123';

}
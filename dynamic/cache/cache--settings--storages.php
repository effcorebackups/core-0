<?php

namespace effectivecore { # cache for settings--storages

  cache::$data['settings--storages']['storage']['storage_sql_dpo'] = new \effectivecore\storage_pdo();
  cache::$data['settings--storages']['storage']['storage_sql_dpo']->id = 'main';
  cache::$data['settings--storages']['storage']['storage_sql_dpo']->driver = 'mysql';
  cache::$data['settings--storages']['storage']['storage_sql_dpo']->credentials = new \stdClass();
  cache::$data['settings--storages']['storage']['storage_sql_dpo']->credentials->host_name = '127.0.0.1';
  cache::$data['settings--storages']['storage']['storage_sql_dpo']->credentials->port = '3306';
  cache::$data['settings--storages']['storage']['storage_sql_dpo']->credentials->storage_name = 'main';
  cache::$data['settings--storages']['storage']['storage_sql_dpo']->credentials->user_name = 'root';
  cache::$data['settings--storages']['storage']['storage_sql_dpo']->credentials->password = '123';
  cache::$data['settings--storages']['storage']['storage_nosql_settings'] = new \effectivecore\storage_settings();
  cache::$data['settings--storages']['storage']['storage_nosql_settings']->id = 'settings';

}
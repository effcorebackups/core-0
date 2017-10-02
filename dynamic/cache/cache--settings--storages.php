<?php

namespace effectivecore { # cache for settings--storages

  cache_factory::$info['settings--storages']['build'] = '2017-10-02 13:22:15';
  cache_factory::$data['settings--storages']['storage']['storage_sql_dpo'] = new \effectivecore\storage_pdo();
  cache_factory::$data['settings--storages']['storage']['storage_sql_dpo']->id = 'db';
  cache_factory::$data['settings--storages']['storage']['storage_sql_dpo']->directory_name = 'effectivecore';
  cache_factory::$data['settings--storages']['storage']['storage_sql_dpo']->host_name = '127.0.0.1';
  cache_factory::$data['settings--storages']['storage']['storage_sql_dpo']->user_name = 'root';
  cache_factory::$data['settings--storages']['storage']['storage_sql_dpo']->password = 123;
  cache_factory::$data['settings--storages']['storage']['storage_sql_dpo']->driver = 'mysql';
  cache_factory::$data['settings--storages']['storage']['storage_nosql_settings'] = new \effectivecore\storage_settings();
  cache_factory::$data['settings--storages']['storage']['storage_nosql_settings']->id = 'settings';

}
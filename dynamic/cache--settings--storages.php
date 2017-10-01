<?php

namespace effectivecore { # cache for settings--storages

  cache_factory::$info['settings--storages']['build'] = '2017-10-01 11:37:47';
  cache_factory::$data['settings--storages']['storage']['storage_db_main'] = new \effectivecore\storage_instance_pdo();
  cache_factory::$data['settings--storages']['storage']['storage_db_main']->id = 'db_main';
  cache_factory::$data['settings--storages']['storage']['storage_db_main']->directory_name = 'effectivecore';
  cache_factory::$data['settings--storages']['storage']['storage_db_main']->host_name = '127.0.0.1';
  cache_factory::$data['settings--storages']['storage']['storage_db_main']->user_name = 'root';
  cache_factory::$data['settings--storages']['storage']['storage_db_main']->password = 123;
  cache_factory::$data['settings--storages']['storage']['storage_db_main']->driver = 'mysql';
  cache_factory::$data['settings--storages']['storage']['storage_settings'] = new \effectivecore\storage_instance_settings();
  cache_factory::$data['settings--storages']['storage']['storage_settings']->id = 'settings';

}
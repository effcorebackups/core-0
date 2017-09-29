<?php

namespace effectivecore { # cache for settings--storages

  caches_factory::$data['settings--storages']['storage']['storage_db_main'] = new \effectivecore\storage_instance_pdo();
  caches_factory::$data['settings--storages']['storage']['storage_db_main']->id = 'db_main';
  caches_factory::$data['settings--storages']['storage']['storage_db_main']->directory_name = 'effectivecore';
  caches_factory::$data['settings--storages']['storage']['storage_db_main']->host_name = '127.0.0.1';
  caches_factory::$data['settings--storages']['storage']['storage_db_main']->user_name = 'root';
  caches_factory::$data['settings--storages']['storage']['storage_db_main']->password = 123;
  caches_factory::$data['settings--storages']['storage']['storage_db_main']->driver = 'mysql';
  caches_factory::$data['settings--storages']['storage']['storage_settings'] = new \effectivecore\storage_instance_settings();
  caches_factory::$data['settings--storages']['storage']['storage_settings']->id = 'settings';

}
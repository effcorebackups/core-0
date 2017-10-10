<?php

namespace effectivecore { # cache for settings--storages

  cache_factory::$data['settings--storages']['storage']['storage_sql_dpo'] = new \effectivecore\storage_pdo();
  cache_factory::$data['settings--storages']['storage']['storage_sql_dpo']->id = 'db';
  cache_factory::$data['settings--storages']['storage']['storage_nosql_settings'] = new \effectivecore\storage_settings();
  cache_factory::$data['settings--storages']['storage']['storage_nosql_settings']->id = 'settings';

}
<?php

namespace effectivecore { # cache for data--storages

  cache::$data['data--storages']['storage']['storage_pdo_sql'] = new \effectivecore\different_cache();
  cache::$data['data--storages']['storage']['storage_pdo_sql']->cache_name = 'data--storages--storage--storage_pdo_sql';
  cache::$data['data--storages']['storage']['storage_pdo_sql']->id = 'main';
  cache::$data['data--storages']['storage']['storage_files_nosql'] = new \effectivecore\different_cache();
  cache::$data['data--storages']['storage']['storage_files_nosql']->cache_name = 'data--storages--storage--storage_files_nosql';
  cache::$data['data--storages']['storage']['storage_files_nosql']->id = 'files';

}
<?php

namespace effectivecore { # cache for data--storage

  cache::$data['data--storage']['storage']['storage_pdo_sql'] = new \effectivecore\different_cache();
  cache::$data['data--storage']['storage']['storage_pdo_sql']->cache_name = 'data--storage-storage-storage_pdo_sql';
  cache::$data['data--storage']['storage']['storage_pdo_sql']->id = 'main';
  cache::$data['data--storage']['storage']['storage_files_nosql'] = new \effectivecore\different_cache();
  cache::$data['data--storage']['storage']['storage_files_nosql']->cache_name = 'data--storage-storage-storage_files_nosql';
  cache::$data['data--storage']['storage']['storage_files_nosql']->id = 'files';

}
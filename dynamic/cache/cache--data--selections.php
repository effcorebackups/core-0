<?php

namespace effcore { # cache for data--selections

  cache::$data['data--selections']['storage']['user_list'] = new \effcore\external_cache();
  cache::$data['data--selections']['storage']['user_list']->cache_name = 'data--selections-storage-user_list';

}
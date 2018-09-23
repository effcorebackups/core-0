<?php

namespace effcore { # cache for data--selections-storage-user_list

  cache::$data['data--selections-storage-user_list'] = new \effcore\selection();
  cache::$data['data--selections-storage-user_list']->fields['id'] = 'users.id';
  cache::$data['data--selections-storage-user_list']->fields['email'] = 'users.email';
  cache::$data['data--selections-storage-user_list']->fields['nick'] = 'users.nick';
  cache::$data['data--selections-storage-user_list']->fields['is_embed'] = 'users.is_embed';
  cache::$data['data--selections-storage-user_list']->fields['avatar_path_relative'] = 'users.avatar_path_relative';
  cache::$data['data--selections-storage-user_list']->fields['created'] = 'users.created';
  cache::$data['data--selections-storage-user_list']->fields['updated'] = 'users.updated';

}
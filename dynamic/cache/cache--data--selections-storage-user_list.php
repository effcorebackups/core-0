<?php

namespace effcore { # cache for data--selections-storage-user_list

  cache::$data['data--selections-storage-user_list'] = new \effcore\selection();
  cache::$data['data--selections-storage-user_list']->fields['id'] = new \stdClass();
  cache::$data['data--selections-storage-user_list']->fields['id']->entity_name = 'user';
  cache::$data['data--selections-storage-user_list']->fields['id']->field = 'id';
  cache::$data['data--selections-storage-user_list']->fields['email'] = new \stdClass();
  cache::$data['data--selections-storage-user_list']->fields['email']->entity_name = 'user';
  cache::$data['data--selections-storage-user_list']->fields['email']->field = 'email';
  cache::$data['data--selections-storage-user_list']->fields['nick'] = new \stdClass();
  cache::$data['data--selections-storage-user_list']->fields['nick']->entity_name = 'user';
  cache::$data['data--selections-storage-user_list']->fields['nick']->field = 'nick';
  cache::$data['data--selections-storage-user_list']->fields['is_embed'] = new \stdClass();
  cache::$data['data--selections-storage-user_list']->fields['is_embed']->entity_name = 'user';
  cache::$data['data--selections-storage-user_list']->fields['is_embed']->field = 'is_embed';
  cache::$data['data--selections-storage-user_list']->fields['avatar_path_relative'] = new \stdClass();
  cache::$data['data--selections-storage-user_list']->fields['avatar_path_relative']->entity_name = 'user';
  cache::$data['data--selections-storage-user_list']->fields['avatar_path_relative']->field = 'avatar_path_relative';
  cache::$data['data--selections-storage-user_list']->fields['created'] = new \stdClass();
  cache::$data['data--selections-storage-user_list']->fields['created']->entity_name = 'user';
  cache::$data['data--selections-storage-user_list']->fields['created']->field = 'created';
  cache::$data['data--selections-storage-user_list']->fields['updated'] = new \stdClass();
  cache::$data['data--selections-storage-user_list']->fields['updated']->entity_name = 'user';
  cache::$data['data--selections-storage-user_list']->fields['updated']->field = 'updated';

}
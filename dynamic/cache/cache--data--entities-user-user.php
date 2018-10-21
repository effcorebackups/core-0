<?php

namespace effcore { # cache for data--entities-user-user

  cache::$data['data--entities-user-user'] = new \effcore\entity();
  cache::$data['data--entities-user-user']->name = 'user';
  cache::$data['data--entities-user-user']->storage_name = 'main';
  cache::$data['data--entities-user-user']->catalog_id = 'users';
  cache::$data['data--entities-user-user']->ws_created = true;
  cache::$data['data--entities-user-user']->ws_updated = true;
  cache::$data['data--entities-user-user']->title = 'User';
  cache::$data['data--entities-user-user']->title_plural = 'Users';
  cache::$data['data--entities-user-user']->fields['nick'] = new \stdClass();
  cache::$data['data--entities-user-user']->fields['nick']->title = 'Nick';
  cache::$data['data--entities-user-user']->fields['nick']->type = 'varchar';
  cache::$data['data--entities-user-user']->fields['nick']->size = 32;
  cache::$data['data--entities-user-user']->fields['nick']->not_null = true;
  cache::$data['data--entities-user-user']->fields['email'] = new \stdClass();
  cache::$data['data--entities-user-user']->fields['email']->title = 'EMail';
  cache::$data['data--entities-user-user']->fields['email']->type = 'varchar';
  cache::$data['data--entities-user-user']->fields['email']->size = 64;
  cache::$data['data--entities-user-user']->fields['email']->not_null = true;
  cache::$data['data--entities-user-user']->fields['password_hash'] = new \stdClass();
  cache::$data['data--entities-user-user']->fields['password_hash']->title = 'Password hash';
  cache::$data['data--entities-user-user']->fields['password_hash']->hidden = true;
  cache::$data['data--entities-user-user']->fields['password_hash']->type = 'varchar';
  cache::$data['data--entities-user-user']->fields['password_hash']->size = 255;
  cache::$data['data--entities-user-user']->fields['is_embed'] = new \stdClass();
  cache::$data['data--entities-user-user']->fields['is_embed']->title = 'Is embed';
  cache::$data['data--entities-user-user']->fields['is_embed']->type = 'integer';
  cache::$data['data--entities-user-user']->fields['is_embed']->not_null = true;
  cache::$data['data--entities-user-user']->fields['is_embed']->default = 0;
  cache::$data['data--entities-user-user']->fields['avatar_path_relative'] = new \stdClass();
  cache::$data['data--entities-user-user']->fields['avatar_path_relative']->title = 'Avatar relative path';
  cache::$data['data--entities-user-user']->fields['avatar_path_relative']->hidden = true;
  cache::$data['data--entities-user-user']->fields['avatar_path_relative']->type = 'varchar';
  cache::$data['data--entities-user-user']->fields['avatar_path_relative']->size = 1024;
  cache::$data['data--entities-user-user']->fields['created'] = new \stdClass();
  cache::$data['data--entities-user-user']->fields['created']->title = 'Created';
  cache::$data['data--entities-user-user']->fields['created']->type = 'datetime';
  cache::$data['data--entities-user-user']->fields['created']->not_null = true;
  cache::$data['data--entities-user-user']->fields['updated'] = new \stdClass();
  cache::$data['data--entities-user-user']->fields['updated']->title = 'Updated';
  cache::$data['data--entities-user-user']->fields['updated']->type = 'datetime';
  cache::$data['data--entities-user-user']->fields['updated']->not_null = true;
  cache::$data['data--entities-user-user']->constraints['primary_nick'] = new \stdClass();
  cache::$data['data--entities-user-user']->constraints['primary_nick']->type = 'primary';
  cache::$data['data--entities-user-user']->constraints['primary_nick']->fields['nick'] = 'nick';
  cache::$data['data--entities-user-user']->constraints['unique_email'] = new \stdClass();
  cache::$data['data--entities-user-user']->constraints['unique_email']->type = 'unique';
  cache::$data['data--entities-user-user']->constraints['unique_email']->fields['email'] = 'email';
  cache::$data['data--entities-user-user']->indexes['index_created'] = new \stdClass();
  cache::$data['data--entities-user-user']->indexes['index_created']->type = 'index';
  cache::$data['data--entities-user-user']->indexes['index_created']->fields['created'] = 'created';
  cache::$data['data--entities-user-user']->indexes['index_updated'] = new \stdClass();
  cache::$data['data--entities-user-user']->indexes['index_updated']->type = 'index';
  cache::$data['data--entities-user-user']->indexes['index_updated']->fields['updated'] = 'updated';

}
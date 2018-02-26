<?php

namespace effcore { # cache for data--entities-user-user

  cache::$data['data--entities-user-user'] = new \effcore\entity();
  cache::$data['data--entities-user-user']->name = 'user';
  cache::$data['data--entities-user-user']->storage_id = 'main';
  cache::$data['data--entities-user-user']->catalog_id = 'users';
  cache::$data['data--entities-user-user']->fields = new \stdClass();
  cache::$data['data--entities-user-user']->fields->id = new \stdClass();
  cache::$data['data--entities-user-user']->fields->id->type = 'autoincrement';
  cache::$data['data--entities-user-user']->fields->id->not_null = true;
  cache::$data['data--entities-user-user']->fields->email = new \stdClass();
  cache::$data['data--entities-user-user']->fields->email->type = 'varchar';
  cache::$data['data--entities-user-user']->fields->email->size = 64;
  cache::$data['data--entities-user-user']->fields->email->not_null = true;
  cache::$data['data--entities-user-user']->fields->nick = new \stdClass();
  cache::$data['data--entities-user-user']->fields->nick->type = 'varchar';
  cache::$data['data--entities-user-user']->fields->nick->size = 32;
  cache::$data['data--entities-user-user']->fields->nick->not_null = true;
  cache::$data['data--entities-user-user']->fields->password_hash = new \stdClass();
  cache::$data['data--entities-user-user']->fields->password_hash->type = 'varchar';
  cache::$data['data--entities-user-user']->fields->password_hash->size = 255;
  cache::$data['data--entities-user-user']->fields->created = new \stdClass();
  cache::$data['data--entities-user-user']->fields->created->type = 'datetime';
  cache::$data['data--entities-user-user']->fields->created->not_null = true;
  cache::$data['data--entities-user-user']->fields->is_embed = new \stdClass();
  cache::$data['data--entities-user-user']->fields->is_embed->type = 'integer';
  cache::$data['data--entities-user-user']->fields->is_embed->not_null = true;
  cache::$data['data--entities-user-user']->fields->is_embed->default = 0;
  cache::$data['data--entities-user-user']->fields->avatar_path_relative = new \stdClass();
  cache::$data['data--entities-user-user']->fields->avatar_path_relative->type = 'varchar';
  cache::$data['data--entities-user-user']->fields->avatar_path_relative->size = 1024;
  cache::$data['data--entities-user-user']->constraints['key_id'] = new \stdClass();
  cache::$data['data--entities-user-user']->constraints['key_id']->type = 'primary key';
  cache::$data['data--entities-user-user']->constraints['key_id']->fields['id'] = 'id';
  cache::$data['data--entities-user-user']->constraints['key_email'] = new \stdClass();
  cache::$data['data--entities-user-user']->constraints['key_email']->type = 'unique';
  cache::$data['data--entities-user-user']->constraints['key_email']->fields['email'] = 'email';
  cache::$data['data--entities-user-user']->constraints['key_nick'] = new \stdClass();
  cache::$data['data--entities-user-user']->constraints['key_nick']->type = 'unique';
  cache::$data['data--entities-user-user']->constraints['key_nick']->fields['nick'] = 'nick';

}
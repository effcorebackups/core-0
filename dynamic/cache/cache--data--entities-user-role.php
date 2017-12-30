<?php

namespace effectivecore { # cache for data--entities-user-role

  cache::$data['data--entities-user-role'] = new \effectivecore\entity();
  cache::$data['data--entities-user-role']->name = 'role';
  cache::$data['data--entities-user-role']->storage_id = 'main';
  cache::$data['data--entities-user-role']->fields = new \stdClass();
  cache::$data['data--entities-user-role']->fields->id = new \stdClass();
  cache::$data['data--entities-user-role']->fields->id->type = 'varchar';
  cache::$data['data--entities-user-role']->fields->id->size = 255;
  cache::$data['data--entities-user-role']->fields->id->not_null = true;
  cache::$data['data--entities-user-role']->fields->title = new \stdClass();
  cache::$data['data--entities-user-role']->fields->title->type = 'varchar';
  cache::$data['data--entities-user-role']->fields->title->size = 255;
  cache::$data['data--entities-user-role']->fields->title->not_null = true;
  cache::$data['data--entities-user-role']->fields->is_embed = new \stdClass();
  cache::$data['data--entities-user-role']->fields->is_embed->type = 'integer';
  cache::$data['data--entities-user-role']->fields->is_embed->not_null = true;
  cache::$data['data--entities-user-role']->fields->is_embed->default = 0;
  cache::$data['data--entities-user-role']->constraints['key_id'] = new \stdClass();
  cache::$data['data--entities-user-role']->constraints['key_id']->type = 'primary key';
  cache::$data['data--entities-user-role']->constraints['key_id']->fields['id'] = 'id';

}
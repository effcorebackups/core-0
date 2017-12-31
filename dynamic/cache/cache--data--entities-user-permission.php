<?php

namespace effectivecore { # cache for data--entities-user-permission

  cache::$data['data--entities-user-permission'] = new \effectivecore\entity();
  cache::$data['data--entities-user-permission']->name = 'permission';
  cache::$data['data--entities-user-permission']->storage_id = 'main';
  cache::$data['data--entities-user-permission']->catalog_id = 'permissions';
  cache::$data['data--entities-user-permission']->fields = new \stdClass();
  cache::$data['data--entities-user-permission']->fields->id = new \stdClass();
  cache::$data['data--entities-user-permission']->fields->id->type = 'varchar';
  cache::$data['data--entities-user-permission']->fields->id->size = 255;
  cache::$data['data--entities-user-permission']->fields->id->not_null = true;
  cache::$data['data--entities-user-permission']->fields->title = new \stdClass();
  cache::$data['data--entities-user-permission']->fields->title->type = 'varchar';
  cache::$data['data--entities-user-permission']->fields->title->size = 255;
  cache::$data['data--entities-user-permission']->fields->title->not_null = true;
  cache::$data['data--entities-user-permission']->constraints['key_id'] = new \stdClass();
  cache::$data['data--entities-user-permission']->constraints['key_id']->type = 'primary key';
  cache::$data['data--entities-user-permission']->constraints['key_id']->fields['id'] = 'id';

}
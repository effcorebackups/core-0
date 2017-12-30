<?php

namespace effectivecore { # cache for data--entity-user-permission

  cache::$data['data--entity-user-permission'] = new \effectivecore\entity();
  cache::$data['data--entity-user-permission']->name = 'permission';
  cache::$data['data--entity-user-permission']->storage_id = 'main';
  cache::$data['data--entity-user-permission']->fields = new \stdClass();
  cache::$data['data--entity-user-permission']->fields->id = new \stdClass();
  cache::$data['data--entity-user-permission']->fields->id->type = 'varchar';
  cache::$data['data--entity-user-permission']->fields->id->size = 255;
  cache::$data['data--entity-user-permission']->fields->id->not_null = true;
  cache::$data['data--entity-user-permission']->fields->title = new \stdClass();
  cache::$data['data--entity-user-permission']->fields->title->type = 'varchar';
  cache::$data['data--entity-user-permission']->fields->title->size = 255;
  cache::$data['data--entity-user-permission']->fields->title->not_null = true;
  cache::$data['data--entity-user-permission']->constraints['key_id'] = new \stdClass();
  cache::$data['data--entity-user-permission']->constraints['key_id']->type = 'primary key';
  cache::$data['data--entity-user-permission']->constraints['key_id']->fields['id'] = 'id';

}
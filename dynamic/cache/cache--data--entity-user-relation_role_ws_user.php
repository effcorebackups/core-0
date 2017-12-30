<?php

namespace effectivecore { # cache for data--entity-user-relation_role_ws_user

  cache::$data['data--entity-user-relation_role_ws_user'] = new \effectivecore\entity();
  cache::$data['data--entity-user-relation_role_ws_user']->name = 'relation_role_ws_user';
  cache::$data['data--entity-user-relation_role_ws_user']->storage_id = 'main';
  cache::$data['data--entity-user-relation_role_ws_user']->fields = new \stdClass();
  cache::$data['data--entity-user-relation_role_ws_user']->fields->id_role = new \stdClass();
  cache::$data['data--entity-user-relation_role_ws_user']->fields->id_role->type = 'varchar';
  cache::$data['data--entity-user-relation_role_ws_user']->fields->id_role->size = 255;
  cache::$data['data--entity-user-relation_role_ws_user']->fields->id_role->not_null = true;
  cache::$data['data--entity-user-relation_role_ws_user']->fields->id_user = new \stdClass();
  cache::$data['data--entity-user-relation_role_ws_user']->fields->id_user->type = 'integer';
  cache::$data['data--entity-user-relation_role_ws_user']->fields->id_user->not_null = true;
  cache::$data['data--entity-user-relation_role_ws_user']->constraints['key_id'] = new \stdClass();
  cache::$data['data--entity-user-relation_role_ws_user']->constraints['key_id']->type = 'primary key';
  cache::$data['data--entity-user-relation_role_ws_user']->constraints['key_id']->fields['id_role'] = 'id_role';
  cache::$data['data--entity-user-relation_role_ws_user']->constraints['key_id']->fields['id_user'] = 'id_user';

}
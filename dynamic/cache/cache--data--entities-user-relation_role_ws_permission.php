<?php

namespace effcore { # cache for data--entities-user-relation_role_ws_permission

  cache::$data['data--entities-user-relation_role_ws_permission'] = new \effcore\entity();
  cache::$data['data--entities-user-relation_role_ws_permission']->name = 'relation_role_ws_permission';
  cache::$data['data--entities-user-relation_role_ws_permission']->storage_id = 'main';
  cache::$data['data--entities-user-relation_role_ws_permission']->catalog_id = 'relations_role_ws_permission';
  cache::$data['data--entities-user-relation_role_ws_permission']->title = 'Relation: Role + Permission';
  cache::$data['data--entities-user-relation_role_ws_permission']->fields = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_permission']->fields->id_role = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_permission']->fields->id_role->type = 'varchar';
  cache::$data['data--entities-user-relation_role_ws_permission']->fields->id_role->size = 255;
  cache::$data['data--entities-user-relation_role_ws_permission']->fields->id_role->not_null = true;
  cache::$data['data--entities-user-relation_role_ws_permission']->fields->id_permission = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_permission']->fields->id_permission->type = 'varchar';
  cache::$data['data--entities-user-relation_role_ws_permission']->fields->id_permission->size = 255;
  cache::$data['data--entities-user-relation_role_ws_permission']->fields->id_permission->not_null = true;
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['key_id'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['key_id']->type = 'primary key';
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['key_id']->fields['id_role'] = 'id_role';
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['key_id']->fields['id_permission'] = 'id_permission';

}
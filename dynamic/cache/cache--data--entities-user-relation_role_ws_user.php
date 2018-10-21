<?php

namespace effcore { # cache for data--entities-user-relation_role_ws_user

  cache::$data['data--entities-user-relation_role_ws_user'] = new \effcore\entity();
  cache::$data['data--entities-user-relation_role_ws_user']->name = 'relation_role_ws_user';
  cache::$data['data--entities-user-relation_role_ws_user']->storage_name = 'main';
  cache::$data['data--entities-user-relation_role_ws_user']->catalog_name = 'relations_role_ws_user';
  cache::$data['data--entities-user-relation_role_ws_user']->ws_created = true;
  cache::$data['data--entities-user-relation_role_ws_user']->ws_updated = true;
  cache::$data['data--entities-user-relation_role_ws_user']->title = 'Relation: Role + User';
  cache::$data['data--entities-user-relation_role_ws_user']->title_plural = 'Relations: Role + User';
  cache::$data['data--entities-user-relation_role_ws_user']->fields['id_role'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_user']->fields['id_role']->title = 'Role ID';
  cache::$data['data--entities-user-relation_role_ws_user']->fields['id_role']->type = 'varchar';
  cache::$data['data--entities-user-relation_role_ws_user']->fields['id_role']->size = 255;
  cache::$data['data--entities-user-relation_role_ws_user']->fields['id_role']->not_null = true;
  cache::$data['data--entities-user-relation_role_ws_user']->fields['nick'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_user']->fields['nick']->title = 'Nick';
  cache::$data['data--entities-user-relation_role_ws_user']->fields['nick']->type = 'varchar';
  cache::$data['data--entities-user-relation_role_ws_user']->fields['nick']->size = 32;
  cache::$data['data--entities-user-relation_role_ws_user']->fields['nick']->not_null = true;
  cache::$data['data--entities-user-relation_role_ws_user']->fields['created'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_user']->fields['created']->title = 'Created';
  cache::$data['data--entities-user-relation_role_ws_user']->fields['created']->type = 'datetime';
  cache::$data['data--entities-user-relation_role_ws_user']->fields['created']->not_null = true;
  cache::$data['data--entities-user-relation_role_ws_user']->fields['updated'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_user']->fields['updated']->title = 'Updated';
  cache::$data['data--entities-user-relation_role_ws_user']->fields['updated']->type = 'datetime';
  cache::$data['data--entities-user-relation_role_ws_user']->fields['updated']->not_null = true;
  cache::$data['data--entities-user-relation_role_ws_user']->constraints['primary_id_role_nick'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_user']->constraints['primary_id_role_nick']->type = 'primary';
  cache::$data['data--entities-user-relation_role_ws_user']->constraints['primary_id_role_nick']->fields['id_role'] = 'id_role';
  cache::$data['data--entities-user-relation_role_ws_user']->constraints['primary_id_role_nick']->fields['nick'] = 'nick';
  cache::$data['data--entities-user-relation_role_ws_user']->constraints['foreign_id_role'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_user']->constraints['foreign_id_role']->type = 'foreign';
  cache::$data['data--entities-user-relation_role_ws_user']->constraints['foreign_id_role']->fields['id_role'] = 'id_role';
  cache::$data['data--entities-user-relation_role_ws_user']->constraints['foreign_id_role']->references = 'roles';
  cache::$data['data--entities-user-relation_role_ws_user']->constraints['foreign_id_role']->references_fields['id'] = 'id';
  cache::$data['data--entities-user-relation_role_ws_user']->constraints['foreign_nick'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_user']->constraints['foreign_nick']->type = 'foreign';
  cache::$data['data--entities-user-relation_role_ws_user']->constraints['foreign_nick']->fields['nick'] = 'nick';
  cache::$data['data--entities-user-relation_role_ws_user']->constraints['foreign_nick']->references = 'users';
  cache::$data['data--entities-user-relation_role_ws_user']->constraints['foreign_nick']->references_fields['nick'] = 'nick';
  cache::$data['data--entities-user-relation_role_ws_user']->indexes['index_created'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_user']->indexes['index_created']->type = 'index';
  cache::$data['data--entities-user-relation_role_ws_user']->indexes['index_created']->fields['created'] = 'created';
  cache::$data['data--entities-user-relation_role_ws_user']->indexes['index_updated'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_user']->indexes['index_updated']->type = 'index';
  cache::$data['data--entities-user-relation_role_ws_user']->indexes['index_updated']->fields['updated'] = 'updated';

}
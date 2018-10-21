<?php

namespace effcore { # cache for data--entities-user-relation_role_ws_permission

  cache::$data['data--entities-user-relation_role_ws_permission'] = new \effcore\entity();
  cache::$data['data--entities-user-relation_role_ws_permission']->name = 'relation_role_ws_permission';
  cache::$data['data--entities-user-relation_role_ws_permission']->storage_name = 'main';
  cache::$data['data--entities-user-relation_role_ws_permission']->catalog_name = 'relations_role_ws_permission';
  cache::$data['data--entities-user-relation_role_ws_permission']->ws_created = true;
  cache::$data['data--entities-user-relation_role_ws_permission']->ws_updated = true;
  cache::$data['data--entities-user-relation_role_ws_permission']->title = 'Relation: Role + Permission';
  cache::$data['data--entities-user-relation_role_ws_permission']->title_plural = 'Relations: Role + Permission';
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['id_role'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['id_role']->title = 'Role ID';
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['id_role']->type = 'varchar';
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['id_role']->size = 255;
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['id_role']->not_null = true;
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['id_permission'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['id_permission']->title = 'Permission ID';
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['id_permission']->type = 'varchar';
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['id_permission']->size = 255;
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['id_permission']->not_null = true;
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['created'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['created']->title = 'Created';
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['created']->type = 'datetime';
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['created']->not_null = true;
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['updated'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['updated']->title = 'Updated';
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['updated']->type = 'datetime';
  cache::$data['data--entities-user-relation_role_ws_permission']->fields['updated']->not_null = true;
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['primary_id_role_id_permission'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['primary_id_role_id_permission']->type = 'primary';
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['primary_id_role_id_permission']->fields['id_role'] = 'id_role';
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['primary_id_role_id_permission']->fields['id_permission'] = 'id_permission';
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['foreign_id_role'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['foreign_id_role']->type = 'foreign';
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['foreign_id_role']->fields['id_role'] = 'id_role';
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['foreign_id_role']->references = 'roles';
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['foreign_id_role']->references_fields['id'] = 'id';
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['foreign_id_permission'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['foreign_id_permission']->type = 'foreign';
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['foreign_id_permission']->fields['id_permission'] = 'id_permission';
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['foreign_id_permission']->references = 'permissions';
  cache::$data['data--entities-user-relation_role_ws_permission']->constraints['foreign_id_permission']->references_fields['id'] = 'id';
  cache::$data['data--entities-user-relation_role_ws_permission']->indexes['index_created'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_permission']->indexes['index_created']->type = 'index';
  cache::$data['data--entities-user-relation_role_ws_permission']->indexes['index_created']->fields['created'] = 'created';
  cache::$data['data--entities-user-relation_role_ws_permission']->indexes['index_updated'] = new \stdClass();
  cache::$data['data--entities-user-relation_role_ws_permission']->indexes['index_updated']->type = 'index';
  cache::$data['data--entities-user-relation_role_ws_permission']->indexes['index_updated']->fields['updated'] = 'updated';

}
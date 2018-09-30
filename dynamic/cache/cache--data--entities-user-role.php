<?php

namespace effcore { # cache for data--entities-user-role

  cache::$data['data--entities-user-role'] = new \effcore\entity();
  cache::$data['data--entities-user-role']->name = 'role';
  cache::$data['data--entities-user-role']->storage_id = 'main';
  cache::$data['data--entities-user-role']->catalog_id = 'roles';
  cache::$data['data--entities-user-role']->ws_created = true;
  cache::$data['data--entities-user-role']->ws_updated = true;
  cache::$data['data--entities-user-role']->title = 'Role';
  cache::$data['data--entities-user-role']->title_plural = 'Roles';
  cache::$data['data--entities-user-role']->fields['id'] = new \stdClass();
  cache::$data['data--entities-user-role']->fields['id']->title = 'ID';
  cache::$data['data--entities-user-role']->fields['id']->type = 'varchar';
  cache::$data['data--entities-user-role']->fields['id']->size = 255;
  cache::$data['data--entities-user-role']->fields['id']->not_null = true;
  cache::$data['data--entities-user-role']->fields['title'] = new \stdClass();
  cache::$data['data--entities-user-role']->fields['title']->title = 'Title';
  cache::$data['data--entities-user-role']->fields['title']->type = 'varchar';
  cache::$data['data--entities-user-role']->fields['title']->size = 255;
  cache::$data['data--entities-user-role']->fields['title']->not_null = true;
  cache::$data['data--entities-user-role']->fields['is_embed'] = new \stdClass();
  cache::$data['data--entities-user-role']->fields['is_embed']->title = 'Is embed';
  cache::$data['data--entities-user-role']->fields['is_embed']->type = 'integer';
  cache::$data['data--entities-user-role']->fields['is_embed']->not_null = true;
  cache::$data['data--entities-user-role']->fields['is_embed']->default = 0;
  cache::$data['data--entities-user-role']->fields['created'] = new \stdClass();
  cache::$data['data--entities-user-role']->fields['created']->title = 'Created';
  cache::$data['data--entities-user-role']->fields['created']->type = 'datetime';
  cache::$data['data--entities-user-role']->fields['created']->not_null = true;
  cache::$data['data--entities-user-role']->fields['updated'] = new \stdClass();
  cache::$data['data--entities-user-role']->fields['updated']->title = 'Updated';
  cache::$data['data--entities-user-role']->fields['updated']->type = 'datetime';
  cache::$data['data--entities-user-role']->fields['updated']->not_null = true;
  cache::$data['data--entities-user-role']->constraints['primary_id'] = new \stdClass();
  cache::$data['data--entities-user-role']->constraints['primary_id']->type = 'primary';
  cache::$data['data--entities-user-role']->constraints['primary_id']->fields['id'] = 'id';
  cache::$data['data--entities-user-role']->indexes['index_created'] = new \stdClass();
  cache::$data['data--entities-user-role']->indexes['index_created']->type = 'index';
  cache::$data['data--entities-user-role']->indexes['index_created']->fields['created'] = 'created';
  cache::$data['data--entities-user-role']->indexes['index_updated'] = new \stdClass();
  cache::$data['data--entities-user-role']->indexes['index_updated']->type = 'index';
  cache::$data['data--entities-user-role']->indexes['index_updated']->fields['updated'] = 'updated';

}
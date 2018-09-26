<?php

namespace effcore { # cache for data--entities-user-permission

  cache::$data['data--entities-user-permission'] = new \effcore\entity();
  cache::$data['data--entities-user-permission']->name = 'permission';
  cache::$data['data--entities-user-permission']->storage_id = 'main';
  cache::$data['data--entities-user-permission']->catalog_id = 'permissions';
  cache::$data['data--entities-user-permission']->ws_created = true;
  cache::$data['data--entities-user-permission']->ws_updated = true;
  cache::$data['data--entities-user-permission']->title = 'Permission';
  cache::$data['data--entities-user-permission']->title_plural = 'Permissions';
  cache::$data['data--entities-user-permission']->fields['id'] = new \stdClass();
  cache::$data['data--entities-user-permission']->fields['id']->title = 'ID';
  cache::$data['data--entities-user-permission']->fields['id']->type = 'varchar';
  cache::$data['data--entities-user-permission']->fields['id']->size = 255;
  cache::$data['data--entities-user-permission']->fields['id']->not_null = true;
  cache::$data['data--entities-user-permission']->fields['title'] = new \stdClass();
  cache::$data['data--entities-user-permission']->fields['title']->title = 'Title';
  cache::$data['data--entities-user-permission']->fields['title']->type = 'varchar';
  cache::$data['data--entities-user-permission']->fields['title']->size = 255;
  cache::$data['data--entities-user-permission']->fields['title']->not_null = true;
  cache::$data['data--entities-user-permission']->fields['created'] = new \stdClass();
  cache::$data['data--entities-user-permission']->fields['created']->title = 'Created';
  cache::$data['data--entities-user-permission']->fields['created']->type = 'datetime';
  cache::$data['data--entities-user-permission']->fields['created']->not_null = true;
  cache::$data['data--entities-user-permission']->fields['updated'] = new \stdClass();
  cache::$data['data--entities-user-permission']->fields['updated']->title = 'Updated';
  cache::$data['data--entities-user-permission']->fields['updated']->type = 'datetime';
  cache::$data['data--entities-user-permission']->fields['updated']->not_null = true;
  cache::$data['data--entities-user-permission']->constraints['key_id'] = new \stdClass();
  cache::$data['data--entities-user-permission']->constraints['key_id']->type = 'primary key';
  cache::$data['data--entities-user-permission']->constraints['key_id']->fields['id'] = 'id';
  cache::$data['data--entities-user-permission']->indexes['idx_created'] = new \stdClass();
  cache::$data['data--entities-user-permission']->indexes['idx_created']->type = 'index';
  cache::$data['data--entities-user-permission']->indexes['idx_created']->fields['created'] = 'created';
  cache::$data['data--entities-user-permission']->indexes['idx_updated'] = new \stdClass();
  cache::$data['data--entities-user-permission']->indexes['idx_updated']->type = 'index';
  cache::$data['data--entities-user-permission']->indexes['idx_updated']->fields['updated'] = 'updated';

}
<?php

namespace effcore { # cache for data--entities-menu-tree

  cache::$data['data--entities-menu-tree'] = new \effcore\entity();
  cache::$data['data--entities-menu-tree']->name = 'tree';
  cache::$data['data--entities-menu-tree']->storage_id = 'main';
  cache::$data['data--entities-menu-tree']->catalog_id = 'trees';
  cache::$data['data--entities-menu-tree']->ws_created = true;
  cache::$data['data--entities-menu-tree']->ws_updated = true;
  cache::$data['data--entities-menu-tree']->title = 'Tree';
  cache::$data['data--entities-menu-tree']->fields = new \stdClass();
  cache::$data['data--entities-menu-tree']->fields->id = new \stdClass();
  cache::$data['data--entities-menu-tree']->fields->id->type = 'autoincrement';
  cache::$data['data--entities-menu-tree']->fields->id->not_null = true;
  cache::$data['data--entities-menu-tree']->fields->title = new \stdClass();
  cache::$data['data--entities-menu-tree']->fields->title->type = 'varchar';
  cache::$data['data--entities-menu-tree']->fields->title->size = 255;
  cache::$data['data--entities-menu-tree']->fields->title->not_null = true;
  cache::$data['data--entities-menu-tree']->fields->created = new \stdClass();
  cache::$data['data--entities-menu-tree']->fields->created->type = 'datetime';
  cache::$data['data--entities-menu-tree']->fields->created->not_null = true;
  cache::$data['data--entities-menu-tree']->fields->updated = new \stdClass();
  cache::$data['data--entities-menu-tree']->fields->updated->type = 'datetime';
  cache::$data['data--entities-menu-tree']->fields->updated->not_null = true;
  cache::$data['data--entities-menu-tree']->constraints['key_id'] = new \stdClass();
  cache::$data['data--entities-menu-tree']->constraints['key_id']->type = 'primary key';
  cache::$data['data--entities-menu-tree']->constraints['key_id']->fields['id'] = 'id';
  cache::$data['data--entities-menu-tree']->indexes['idx_created'] = new \stdClass();
  cache::$data['data--entities-menu-tree']->indexes['idx_created']->type = 'index';
  cache::$data['data--entities-menu-tree']->indexes['idx_created']->fields['created'] = 'created';
  cache::$data['data--entities-menu-tree']->indexes['idx_updated'] = new \stdClass();
  cache::$data['data--entities-menu-tree']->indexes['idx_updated']->type = 'index';
  cache::$data['data--entities-menu-tree']->indexes['idx_updated']->fields['updated'] = 'updated';

}
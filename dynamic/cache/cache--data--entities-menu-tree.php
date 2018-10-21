<?php

namespace effcore { # cache for data--entities-menu-tree

  cache::$data['data--entities-menu-tree'] = new \effcore\entity();
  cache::$data['data--entities-menu-tree']->name = 'tree';
  cache::$data['data--entities-menu-tree']->storage_name = 'main';
  cache::$data['data--entities-menu-tree']->catalog_name = 'trees';
  cache::$data['data--entities-menu-tree']->ws_created = true;
  cache::$data['data--entities-menu-tree']->ws_updated = true;
  cache::$data['data--entities-menu-tree']->title = 'Tree';
  cache::$data['data--entities-menu-tree']->title_plural = 'Trees';
  cache::$data['data--entities-menu-tree']->fields['id'] = new \stdClass();
  cache::$data['data--entities-menu-tree']->fields['id']->title = 'ID';
  cache::$data['data--entities-menu-tree']->fields['id']->type = 'autoincrement';
  cache::$data['data--entities-menu-tree']->fields['id']->not_null = true;
  cache::$data['data--entities-menu-tree']->fields['title'] = new \stdClass();
  cache::$data['data--entities-menu-tree']->fields['title']->title = 'Title';
  cache::$data['data--entities-menu-tree']->fields['title']->type = 'varchar';
  cache::$data['data--entities-menu-tree']->fields['title']->size = 255;
  cache::$data['data--entities-menu-tree']->fields['title']->not_null = true;
  cache::$data['data--entities-menu-tree']->fields['created'] = new \stdClass();
  cache::$data['data--entities-menu-tree']->fields['created']->title = 'Created';
  cache::$data['data--entities-menu-tree']->fields['created']->type = 'datetime';
  cache::$data['data--entities-menu-tree']->fields['created']->not_null = true;
  cache::$data['data--entities-menu-tree']->fields['updated'] = new \stdClass();
  cache::$data['data--entities-menu-tree']->fields['updated']->title = 'Updated';
  cache::$data['data--entities-menu-tree']->fields['updated']->type = 'datetime';
  cache::$data['data--entities-menu-tree']->fields['updated']->not_null = true;
  cache::$data['data--entities-menu-tree']->constraints['primary_id'] = new \stdClass();
  cache::$data['data--entities-menu-tree']->constraints['primary_id']->type = 'primary';
  cache::$data['data--entities-menu-tree']->constraints['primary_id']->fields['id'] = 'id';
  cache::$data['data--entities-menu-tree']->indexes['index_created'] = new \stdClass();
  cache::$data['data--entities-menu-tree']->indexes['index_created']->type = 'index';
  cache::$data['data--entities-menu-tree']->indexes['index_created']->fields['created'] = 'created';
  cache::$data['data--entities-menu-tree']->indexes['index_updated'] = new \stdClass();
  cache::$data['data--entities-menu-tree']->indexes['index_updated']->type = 'index';
  cache::$data['data--entities-menu-tree']->indexes['index_updated']->fields['updated'] = 'updated';

}
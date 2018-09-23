<?php

namespace effcore { # cache for data--entities-menu-tree_item

  cache::$data['data--entities-menu-tree_item'] = new \effcore\entity();
  cache::$data['data--entities-menu-tree_item']->name = 'tree_item';
  cache::$data['data--entities-menu-tree_item']->storage_id = 'main';
  cache::$data['data--entities-menu-tree_item']->catalog_id = 'tree_items';
  cache::$data['data--entities-menu-tree_item']->ws_created = true;
  cache::$data['data--entities-menu-tree_item']->ws_updated = true;
  cache::$data['data--entities-menu-tree_item']->title = 'Tree item';
  cache::$data['data--entities-menu-tree_item']->fields['id'] = new \stdClass();
  cache::$data['data--entities-menu-tree_item']->fields['id']->title = 'ID';
  cache::$data['data--entities-menu-tree_item']->fields['id']->type = 'autoincrement';
  cache::$data['data--entities-menu-tree_item']->fields['id']->not_null = true;
  cache::$data['data--entities-menu-tree_item']->fields['id_parent'] = new \stdClass();
  cache::$data['data--entities-menu-tree_item']->fields['id_parent']->title = 'Parent ID';
  cache::$data['data--entities-menu-tree_item']->fields['id_parent']->type = 'integer';
  cache::$data['data--entities-menu-tree_item']->fields['id_parent']->not_null = true;
  cache::$data['data--entities-menu-tree_item']->fields['title'] = new \stdClass();
  cache::$data['data--entities-menu-tree_item']->fields['title']->title = 'Title';
  cache::$data['data--entities-menu-tree_item']->fields['title']->type = 'varchar';
  cache::$data['data--entities-menu-tree_item']->fields['title']->size = 255;
  cache::$data['data--entities-menu-tree_item']->fields['title']->not_null = true;
  cache::$data['data--entities-menu-tree_item']->fields['created'] = new \stdClass();
  cache::$data['data--entities-menu-tree_item']->fields['created']->title = 'Created';
  cache::$data['data--entities-menu-tree_item']->fields['created']->type = 'datetime';
  cache::$data['data--entities-menu-tree_item']->fields['created']->not_null = true;
  cache::$data['data--entities-menu-tree_item']->fields['updated'] = new \stdClass();
  cache::$data['data--entities-menu-tree_item']->fields['updated']->title = 'Updated';
  cache::$data['data--entities-menu-tree_item']->fields['updated']->type = 'datetime';
  cache::$data['data--entities-menu-tree_item']->fields['updated']->not_null = true;
  cache::$data['data--entities-menu-tree_item']->constraints['key_id'] = new \stdClass();
  cache::$data['data--entities-menu-tree_item']->constraints['key_id']->type = 'primary key';
  cache::$data['data--entities-menu-tree_item']->constraints['key_id']->fields['id'] = 'id';
  cache::$data['data--entities-menu-tree_item']->indexes['idx_created'] = new \stdClass();
  cache::$data['data--entities-menu-tree_item']->indexes['idx_created']->type = 'index';
  cache::$data['data--entities-menu-tree_item']->indexes['idx_created']->fields['created'] = 'created';
  cache::$data['data--entities-menu-tree_item']->indexes['idx_updated'] = new \stdClass();
  cache::$data['data--entities-menu-tree_item']->indexes['idx_updated']->type = 'index';
  cache::$data['data--entities-menu-tree_item']->indexes['idx_updated']->fields['updated'] = 'updated';

}
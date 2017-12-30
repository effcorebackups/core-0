<?php

namespace effectivecore { # cache for data--entity-tree-tree_item

  cache::$data['data--entity-tree-tree_item'] = new \effectivecore\entity();
  cache::$data['data--entity-tree-tree_item']->name = 'tree_item';
  cache::$data['data--entity-tree-tree_item']->storage_id = 'main';
  cache::$data['data--entity-tree-tree_item']->fields = new \stdClass();
  cache::$data['data--entity-tree-tree_item']->fields->id = new \stdClass();
  cache::$data['data--entity-tree-tree_item']->fields->id->type = 'autoincrement';
  cache::$data['data--entity-tree-tree_item']->fields->id->not_null = true;
  cache::$data['data--entity-tree-tree_item']->fields->id_parent = new \stdClass();
  cache::$data['data--entity-tree-tree_item']->fields->id_parent->type = 'integer';
  cache::$data['data--entity-tree-tree_item']->fields->id_parent->not_null = true;
  cache::$data['data--entity-tree-tree_item']->fields->parent_is_tree = new \stdClass();
  cache::$data['data--entity-tree-tree_item']->fields->parent_is_tree->type = 'integer';
  cache::$data['data--entity-tree-tree_item']->fields->parent_is_tree->not_null = true;
  cache::$data['data--entity-tree-tree_item']->fields->parent_is_tree->default = 0;
  cache::$data['data--entity-tree-tree_item']->fields->title = new \stdClass();
  cache::$data['data--entity-tree-tree_item']->fields->title->type = 'varchar';
  cache::$data['data--entity-tree-tree_item']->fields->title->size = 255;
  cache::$data['data--entity-tree-tree_item']->fields->title->not_null = true;
  cache::$data['data--entity-tree-tree_item']->constraints['key_id'] = new \stdClass();
  cache::$data['data--entity-tree-tree_item']->constraints['key_id']->type = 'primary key';
  cache::$data['data--entity-tree-tree_item']->constraints['key_id']->fields['id'] = 'id';

}
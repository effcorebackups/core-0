<?php

namespace effectivecore { # cache for data--entities-tree-tree

  cache::$data['data--entities-tree-tree'] = new \effectivecore\entity();
  cache::$data['data--entities-tree-tree']->name = 'tree';
  cache::$data['data--entities-tree-tree']->storage_id = 'main';
  cache::$data['data--entities-tree-tree']->fields = new \stdClass();
  cache::$data['data--entities-tree-tree']->fields->id = new \stdClass();
  cache::$data['data--entities-tree-tree']->fields->id->type = 'autoincrement';
  cache::$data['data--entities-tree-tree']->fields->id->not_null = true;
  cache::$data['data--entities-tree-tree']->fields->title = new \stdClass();
  cache::$data['data--entities-tree-tree']->fields->title->type = 'varchar';
  cache::$data['data--entities-tree-tree']->fields->title->size = 255;
  cache::$data['data--entities-tree-tree']->fields->title->not_null = true;
  cache::$data['data--entities-tree-tree']->constraints['key_id'] = new \stdClass();
  cache::$data['data--entities-tree-tree']->constraints['key_id']->type = 'primary key';
  cache::$data['data--entities-tree-tree']->constraints['key_id']->fields['id'] = 'id';

}
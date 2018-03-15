<?php

namespace effcore { # cache for data--tab_items

  cache::$data['data--tab_items']['core']['entity_select'] = new \effcore\tab_item();
  cache::$data['data--tab_items']['core']['entity_select']->id = 'entity_select';
  cache::$data['data--tab_items']['core']['entity_select']->id_parent = 'entity';
  cache::$data['data--tab_items']['core']['entity_select']->title = 'Select';
  cache::$data['data--tab_items']['core']['entity_select']->attributes['href'] = 'select';
  cache::$data['data--tab_items']['core']['entity_select']->attributes['class']['entity-select'] = 'entity-select';
  cache::$data['data--tab_items']['core']['entity_insert'] = new \effcore\tab_item();
  cache::$data['data--tab_items']['core']['entity_insert']->id = 'entity_insert';
  cache::$data['data--tab_items']['core']['entity_insert']->id_parent = 'entity';
  cache::$data['data--tab_items']['core']['entity_insert']->title = 'Insert';
  cache::$data['data--tab_items']['core']['entity_insert']->attributes['href'] = 'insert';
  cache::$data['data--tab_items']['core']['entity_insert']->attributes['class']['entity-insert'] = 'entity-insert';
  cache::$data['data--tab_items']['core']['entity_update'] = new \effcore\tab_item();
  cache::$data['data--tab_items']['core']['entity_update']->id = 'entity_update';
  cache::$data['data--tab_items']['core']['entity_update']->id_parent = 'entity';
  cache::$data['data--tab_items']['core']['entity_update']->title = 'Update';
  cache::$data['data--tab_items']['core']['entity_update']->attributes['href'] = 'update';
  cache::$data['data--tab_items']['core']['entity_update']->attributes['class']['entity-update'] = 'entity-update';
  cache::$data['data--tab_items']['core']['entity_delete'] = new \effcore\tab_item();
  cache::$data['data--tab_items']['core']['entity_delete']->id = 'entity_delete';
  cache::$data['data--tab_items']['core']['entity_delete']->id_parent = 'entity';
  cache::$data['data--tab_items']['core']['entity_delete']->title = 'Delete';
  cache::$data['data--tab_items']['core']['entity_delete']->attributes['href'] = 'delete';
  cache::$data['data--tab_items']['core']['entity_delete']->attributes['class']['entity-delete'] = 'entity-delete';

}
<?php

namespace effcore { # cache for data--entities-demo-demo_types

  cache::$data['data--entities-demo-demo_types'] = new \effcore\entity();
  cache::$data['data--entities-demo-demo_types']->name = 'demo_types';
  cache::$data['data--entities-demo-demo_types']->storage_id = 'main';
  cache::$data['data--entities-demo-demo_types']->catalog_id = 'demo_types';
  cache::$data['data--entities-demo-demo_types']->title = 'Demo: types';
  cache::$data['data--entities-demo-demo_types']->fields['id'] = new \stdClass();
  cache::$data['data--entities-demo-demo_types']->fields['id']->title = 'ID';
  cache::$data['data--entities-demo-demo_types']->fields['id']->type = 'autoincrement';
  cache::$data['data--entities-demo-demo_types']->fields['id']->not_null = true;
  cache::$data['data--entities-demo-demo_types']->fields['description'] = new \stdClass();
  cache::$data['data--entities-demo-demo_types']->fields['description']->title = 'Description';
  cache::$data['data--entities-demo-demo_types']->fields['description']->type = 'varchar';
  cache::$data['data--entities-demo-demo_types']->fields['description']->size = 255;
  cache::$data['data--entities-demo-demo_types']->fields['description']->null = true;
  cache::$data['data--entities-demo-demo_types']->fields['f_integer'] = new \stdClass();
  cache::$data['data--entities-demo-demo_types']->fields['f_integer']->title = 'Field integer';
  cache::$data['data--entities-demo-demo_types']->fields['f_integer']->type = 'integer';
  cache::$data['data--entities-demo-demo_types']->fields['f_integer']->not_null = true;
  cache::$data['data--entities-demo-demo_types']->fields['f_integer']->default = 0;
  cache::$data['data--entities-demo-demo_types']->fields['f_varchar'] = new \stdClass();
  cache::$data['data--entities-demo-demo_types']->fields['f_varchar']->title = 'Field varchar';
  cache::$data['data--entities-demo-demo_types']->fields['f_varchar']->type = 'varchar';
  cache::$data['data--entities-demo-demo_types']->fields['f_varchar']->size = 255;
  cache::$data['data--entities-demo-demo_types']->fields['f_varchar']->not_null = true;
  cache::$data['data--entities-demo-demo_types']->fields['f_varchar']->default = 'default text';
  cache::$data['data--entities-demo-demo_types']->fields['f_time'] = new \stdClass();
  cache::$data['data--entities-demo-demo_types']->fields['f_time']->title = 'Field time';
  cache::$data['data--entities-demo-demo_types']->fields['f_time']->type = 'time';
  cache::$data['data--entities-demo-demo_types']->fields['f_time']->not_null = true;
  cache::$data['data--entities-demo-demo_types']->fields['f_time']->default = '00:00:00';
  cache::$data['data--entities-demo-demo_types']->fields['f_date'] = new \stdClass();
  cache::$data['data--entities-demo-demo_types']->fields['f_date']->title = 'Field date';
  cache::$data['data--entities-demo-demo_types']->fields['f_date']->type = 'date';
  cache::$data['data--entities-demo-demo_types']->fields['f_date']->not_null = true;
  cache::$data['data--entities-demo-demo_types']->fields['f_date']->default = '2000-01-01';
  cache::$data['data--entities-demo-demo_types']->fields['f_datetime'] = new \stdClass();
  cache::$data['data--entities-demo-demo_types']->fields['f_datetime']->title = 'Field date + time';
  cache::$data['data--entities-demo-demo_types']->fields['f_datetime']->type = 'datetime';
  cache::$data['data--entities-demo-demo_types']->fields['f_datetime']->not_null = true;
  cache::$data['data--entities-demo-demo_types']->fields['f_datetime']->default = '2000-01-01 00:00:00';
  cache::$data['data--entities-demo-demo_types']->fields['f_blob'] = new \stdClass();
  cache::$data['data--entities-demo-demo_types']->fields['f_blob']->title = 'Field blob';
  cache::$data['data--entities-demo-demo_types']->fields['f_blob']->type = 'blob';
  cache::$data['data--entities-demo-demo_types']->fields['f_blob']->null = true;
  cache::$data['data--entities-demo-demo_types']->constraints['key_id'] = new \stdClass();
  cache::$data['data--entities-demo-demo_types']->constraints['key_id']->type = 'primary key';
  cache::$data['data--entities-demo-demo_types']->constraints['key_id']->fields['id'] = 'id';

}
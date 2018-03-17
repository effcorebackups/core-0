<?php

namespace effcore { # cache for data--entities-develop-demo_indexes

  cache::$data['data--entities-develop-demo_indexes'] = new \effcore\entity();
  cache::$data['data--entities-develop-demo_indexes']->name = 'demo_indexes';
  cache::$data['data--entities-develop-demo_indexes']->storage_id = 'main';
  cache::$data['data--entities-develop-demo_indexes']->catalog_id = 'demo_indexes';
  cache::$data['data--entities-develop-demo_indexes']->title = 'Demo: indexes';
  cache::$data['data--entities-develop-demo_indexes']->fields = new \stdClass();
  cache::$data['data--entities-develop-demo_indexes']->fields->f_integer_1 = new \stdClass();
  cache::$data['data--entities-develop-demo_indexes']->fields->f_integer_1->type = 'integer';
  cache::$data['data--entities-develop-demo_indexes']->fields->f_integer_1->not_null = true;
  cache::$data['data--entities-develop-demo_indexes']->fields->f_integer_1->default = 0;
  cache::$data['data--entities-develop-demo_indexes']->fields->f_integer_2 = new \stdClass();
  cache::$data['data--entities-develop-demo_indexes']->fields->f_integer_2->type = 'integer';
  cache::$data['data--entities-develop-demo_indexes']->fields->f_integer_2->not_null = true;
  cache::$data['data--entities-develop-demo_indexes']->fields->f_integer_2->default = 0;
  cache::$data['data--entities-develop-demo_indexes']->indexes['idx_f_integer_1'] = new \stdClass();
  cache::$data['data--entities-develop-demo_indexes']->indexes['idx_f_integer_1']->type = 'index';
  cache::$data['data--entities-develop-demo_indexes']->indexes['idx_f_integer_1']->fields['f_integer_1'] = 'f_integer_1';
  cache::$data['data--entities-develop-demo_indexes']->indexes['idx_f_integer_2'] = new \stdClass();
  cache::$data['data--entities-develop-demo_indexes']->indexes['idx_f_integer_2']->type = 'unique index';
  cache::$data['data--entities-develop-demo_indexes']->indexes['idx_f_integer_2']->fields['f_integer_2'] = 'f_integer_2';

}
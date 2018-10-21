<?php

namespace effcore { # cache for data--entities-demo-demo_constraints

  cache::$data['data--entities-demo-demo_constraints'] = new \effcore\entity();
  cache::$data['data--entities-demo-demo_constraints']->name = 'demo_constraints';
  cache::$data['data--entities-demo-demo_constraints']->storage_name = 'main';
  cache::$data['data--entities-demo-demo_constraints']->catalog_name = 'demo_constraints';
  cache::$data['data--entities-demo-demo_constraints']->title = 'Demo: constraints';
  cache::$data['data--entities-demo-demo_constraints']->title_plural = 'Demo: constraints';
  cache::$data['data--entities-demo-demo_constraints']->fields['f_integer_1'] = new \stdClass();
  cache::$data['data--entities-demo-demo_constraints']->fields['f_integer_1']->title = 'Field integer 1';
  cache::$data['data--entities-demo-demo_constraints']->fields['f_integer_1']->type = 'integer';
  cache::$data['data--entities-demo-demo_constraints']->fields['f_integer_1']->not_null = true;
  cache::$data['data--entities-demo-demo_constraints']->fields['f_integer_1']->default = 0;
  cache::$data['data--entities-demo-demo_constraints']->fields['f_integer_2'] = new \stdClass();
  cache::$data['data--entities-demo-demo_constraints']->fields['f_integer_2']->title = 'Field integer 2';
  cache::$data['data--entities-demo-demo_constraints']->fields['f_integer_2']->type = 'integer';
  cache::$data['data--entities-demo-demo_constraints']->fields['f_integer_2']->not_null = true;
  cache::$data['data--entities-demo-demo_constraints']->fields['f_integer_2']->default = 0;
  cache::$data['data--entities-demo-demo_constraints']->constraints['primary_f_integer_1'] = new \stdClass();
  cache::$data['data--entities-demo-demo_constraints']->constraints['primary_f_integer_1']->type = 'primary';
  cache::$data['data--entities-demo-demo_constraints']->constraints['primary_f_integer_1']->fields['f_integer_1'] = 'f_integer_1';
  cache::$data['data--entities-demo-demo_constraints']->constraints['unique_f_integer_2'] = new \stdClass();
  cache::$data['data--entities-demo-demo_constraints']->constraints['unique_f_integer_2']->type = 'unique';
  cache::$data['data--entities-demo-demo_constraints']->constraints['unique_f_integer_2']->fields['f_integer_2'] = 'f_integer_2';
  cache::$data['data--entities-demo-demo_constraints']->constraints['foreign_f_integer_2'] = new \stdClass();
  cache::$data['data--entities-demo-demo_constraints']->constraints['foreign_f_integer_2']->type = 'foreign';
  cache::$data['data--entities-demo-demo_constraints']->constraints['foreign_f_integer_2']->fields['f_integer_1'] = 'f_integer_1';
  cache::$data['data--entities-demo-demo_constraints']->constraints['foreign_f_integer_2']->references = 'demo_autoincrement';
  cache::$data['data--entities-demo-demo_constraints']->constraints['foreign_f_integer_2']->references_fields['f_integer_1'] = 'f_integer_1';

}
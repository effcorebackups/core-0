<?php

namespace effectivecore { # cache for data--entities-develop-demo_autoincrement

  cache::$data['data--entities-develop-demo_autoincrement'] = new \effectivecore\entity();
  cache::$data['data--entities-develop-demo_autoincrement']->name = 'demo_autoincrement';
  cache::$data['data--entities-develop-demo_autoincrement']->storage_id = 'main';
  cache::$data['data--entities-develop-demo_autoincrement']->fields = new \stdClass();
  cache::$data['data--entities-develop-demo_autoincrement']->fields->f_integer_1 = new \stdClass();
  cache::$data['data--entities-develop-demo_autoincrement']->fields->f_integer_1->type = 'autoincrement';
  cache::$data['data--entities-develop-demo_autoincrement']->fields->f_integer_1->not_null = true;
  cache::$data['data--entities-develop-demo_autoincrement']->constraints['key_f_integer_1'] = new \stdClass();
  cache::$data['data--entities-develop-demo_autoincrement']->constraints['key_f_integer_1']->type = 'primary key';
  cache::$data['data--entities-develop-demo_autoincrement']->constraints['key_f_integer_1']->fields['f_integer_1'] = 'f_integer_1';

}
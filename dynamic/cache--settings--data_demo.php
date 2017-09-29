<?php

namespace effectivecore { # cache for settings--data_demo

  caches_factory::$data['settings--data_demo']['develop'] = new \stdClass();
  caches_factory::$data['settings--data_demo']['develop']->demo_integer = 1;
  caches_factory::$data['settings--data_demo']['develop']->demo_float = 2.3;
  caches_factory::$data['settings--data_demo']['develop']->demo_boolean = true;
  caches_factory::$data['settings--data_demo']['develop']->demo_string_empty = '';
  caches_factory::$data['settings--data_demo']['develop']->demo_string = 'text';
  caches_factory::$data['settings--data_demo']['develop']->demo_string_text = new \effectivecore\text();
  caches_factory::$data['settings--data_demo']['develop']->demo_string_text->text = 'like code: new text(\'any text\') # translated by default';
  caches_factory::$data['settings--data_demo']['develop']->demo_array_empty = [];
  caches_factory::$data['settings--data_demo']['develop']->demo_array['item_1'] = 'item value #1';
  caches_factory::$data['settings--data_demo']['develop']->demo_array['item_2'] = 'item value #2';
  caches_factory::$data['settings--data_demo']['develop']->demo_array['item_3'] = 'item value #3';
  caches_factory::$data['settings--data_demo']['develop']->demo_array['item_5'] = 'item value #5 (insert + update)';
  caches_factory::$data['settings--data_demo']['develop']->demo_array['item_6'] = 'item value #6 (insert)';
  caches_factory::$data['settings--data_demo']['develop']->demo_object_empty = new \stdClass();
  caches_factory::$data['settings--data_demo']['develop']->demo_object = new \stdClass();
  caches_factory::$data['settings--data_demo']['develop']->demo_object->prop_1 = 'property value #1';
  caches_factory::$data['settings--data_demo']['develop']->demo_object->prop_2 = 'property value #2';
  caches_factory::$data['settings--data_demo']['develop']->demo_object->prop_3 = 'property value #3';
  caches_factory::$data['settings--data_demo']['develop']->demo_object->prop_5 = 'property value #5 (insert + update)';
  caches_factory::$data['settings--data_demo']['develop']->demo_object->prop_6 = 'property value #6 (insert)';
  caches_factory::$data['settings--data_demo']['develop']->demo_null = null;

}
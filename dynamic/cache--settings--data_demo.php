<?php

namespace effectivecore { # cache for settings--data_demo

  cache_factory::$info['settings--data_demo']['created']['created'] = '2017-10-01 11:29:35';
  cache_factory::$data['settings--data_demo']['develop'] = new \stdClass();
  cache_factory::$data['settings--data_demo']['develop']->demo_integer = 1;
  cache_factory::$data['settings--data_demo']['develop']->demo_float = 2.3;
  cache_factory::$data['settings--data_demo']['develop']->demo_boolean = true;
  cache_factory::$data['settings--data_demo']['develop']->demo_string_empty = '';
  cache_factory::$data['settings--data_demo']['develop']->demo_string = 'text';
  cache_factory::$data['settings--data_demo']['develop']->demo_string_text = new \effectivecore\text();
  cache_factory::$data['settings--data_demo']['develop']->demo_string_text->text = 'like code: new text(\'any text\') # translated by default';
  cache_factory::$data['settings--data_demo']['develop']->demo_array_empty = [];
  cache_factory::$data['settings--data_demo']['develop']->demo_array['item_1'] = 'item value #1';
  cache_factory::$data['settings--data_demo']['develop']->demo_array['item_2'] = 'item value #2';
  cache_factory::$data['settings--data_demo']['develop']->demo_array['item_3'] = 'item value #3';
  cache_factory::$data['settings--data_demo']['develop']->demo_array['item_5'] = 'item value #5 (insert + update)';
  cache_factory::$data['settings--data_demo']['develop']->demo_array['item_6'] = 'item value #6 (insert)';
  cache_factory::$data['settings--data_demo']['develop']->demo_object_empty = new \stdClass();
  cache_factory::$data['settings--data_demo']['develop']->demo_object = new \stdClass();
  cache_factory::$data['settings--data_demo']['develop']->demo_object->prop_1 = 'property value #1';
  cache_factory::$data['settings--data_demo']['develop']->demo_object->prop_2 = 'property value #2';
  cache_factory::$data['settings--data_demo']['develop']->demo_object->prop_3 = 'property value #3';
  cache_factory::$data['settings--data_demo']['develop']->demo_object->prop_5 = 'property value #5 (insert + update)';
  cache_factory::$data['settings--data_demo']['develop']->demo_object->prop_6 = 'property value #6 (insert)';
  cache_factory::$data['settings--data_demo']['develop']->demo_null = null;

}
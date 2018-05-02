<?php

namespace effcore { # cache for data--demo_data

  cache::$data['data--demo_data']['demo'] = new \stdClass();
  cache::$data['data--demo_data']['demo']->demo_integer = 1;
  cache::$data['data--demo_data']['demo']->demo_float = 2.3;
  cache::$data['data--demo_data']['demo']->demo_boolean = true;
  cache::$data['data--demo_data']['demo']->demo_string_empty = '';
  cache::$data['data--demo_data']['demo']->demo_string = 'text';
  cache::$data['data--demo_data']['demo']->demo_string_text = new \effcore\text();
  cache::$data['data--demo_data']['demo']->demo_string_text->text = 'some translated text';
  cache::$data['data--demo_data']['demo']->demo_string_text_simple = new \effcore\text_simple();
  cache::$data['data--demo_data']['demo']->demo_string_text_simple->text = 'some raw text';
  cache::$data['data--demo_data']['demo']->demo_array_empty = [];
  cache::$data['data--demo_data']['demo']->demo_array['item_1'] = 'item value #1';
  cache::$data['data--demo_data']['demo']->demo_array['item_2'] = 'item value #2';
  cache::$data['data--demo_data']['demo']->demo_array['item_3'] = 'item value #3';
  cache::$data['data--demo_data']['demo']->demo_array['item_5'] = 'item value #5 (insert + update)';
  cache::$data['data--demo_data']['demo']->demo_array['item_6'] = 'item value #6 (insert)';
  cache::$data['data--demo_data']['demo']->demo_object_empty = new \stdClass();
  cache::$data['data--demo_data']['demo']->demo_object = new \stdClass();
  cache::$data['data--demo_data']['demo']->demo_object->prop_1 = 'property value #1';
  cache::$data['data--demo_data']['demo']->demo_object->prop_2 = 'property value #2';
  cache::$data['data--demo_data']['demo']->demo_object->prop_3 = 'property value #3';
  cache::$data['data--demo_data']['demo']->demo_object->prop_5 = 'property value #5 (insert + update)';
  cache::$data['data--demo_data']['demo']->demo_object->prop_6 = 'property value #6 (insert)';
  cache::$data['data--demo_data']['demo']->demo_null = null;

}
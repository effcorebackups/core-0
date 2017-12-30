<?php

namespace effectivecore { # cache for data--change

  cache::$data['data--change']['develop'] = new \stdClass();
  cache::$data['data--change']['develop']->insert['demo_data/develop/demo_object'] = new \stdClass();
  cache::$data['data--change']['develop']->insert['demo_data/develop/demo_object']->prop_4 = 'property value #4 (insert)';
  cache::$data['data--change']['develop']->insert['demo_data/develop/demo_object']->prop_5 = 'property value #5 (insert)';
  cache::$data['data--change']['develop']->insert['demo_data/develop/demo_object']->prop_6 = 'property value #6 (insert)';
  cache::$data['data--change']['develop']->insert['demo_data/develop/demo_array']['item_4'] = 'item value #4 (insert)';
  cache::$data['data--change']['develop']->insert['demo_data/develop/demo_array']['item_5'] = 'item value #5 (insert)';
  cache::$data['data--change']['develop']->insert['demo_data/develop/demo_array']['item_6'] = 'item value #6 (insert)';
  cache::$data['data--change']['develop']->update['demo_data/develop/demo_object/prop_5'] = 'property value #5 (insert + update)';
  cache::$data['data--change']['develop']->update['demo_data/develop/demo_array/item_5'] = 'item value #5 (insert + update)';
  cache::$data['data--change']['develop']->delete['demo_data/develop/demo_object/prop_4'] = null;
  cache::$data['data--change']['develop']->delete['demo_data/develop/demo_array/item_4'] = null;

}
<?php 

namespace effectivecore { # ARRAY[type][scope]...

  use \effectivecore\storage_instance_s as settings;

  settings::$changes_dynamic['changes']['storage']['test_insert_arr'] = new \stdClass();
  settings::$changes_dynamic['changes']['storage']['test_insert_arr']->action = 'insert';
  settings::$changes_dynamic['changes']['storage']['test_insert_arr']->npath = 'test_changes/storage/test_arr';
  settings::$changes_dynamic['changes']['storage']['test_insert_arr']->value['item_4'] = 'a4';
  settings::$changes_dynamic['changes']['storage']['test_insert_arr']->value['item_5'] = 'a5';
  settings::$changes_dynamic['changes']['storage']['test_insert_arr']->value['item_6'] = 'a6';
  settings::$changes_dynamic['changes']['storage']['test_update_arr'] = new \stdClass();
  settings::$changes_dynamic['changes']['storage']['test_update_arr']->action = 'update';
  settings::$changes_dynamic['changes']['storage']['test_update_arr']->npath = 'test_changes/storage/test_arr/item_1';
  settings::$changes_dynamic['changes']['storage']['test_update_arr']->value = 'a1 modified';
  settings::$changes_dynamic['changes']['storage']['test_delete_arr'] = new \stdClass();
  settings::$changes_dynamic['changes']['storage']['test_delete_arr']->action = 'delete';
  settings::$changes_dynamic['changes']['storage']['test_delete_arr']->npath = 'test_changes/storage/test_arr/item_2';

}
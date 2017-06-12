<?php 

namespace effectivecore { # ARRAY[type][scope]...

  use \effectivecore\storage_instance_s as settings;

  settings::$data_orig['changes_dynamic']['storage']['test_insert_arr'] = new \stdClass();
  settings::$data_orig['changes_dynamic']['storage']['test_insert_arr']->action = 'insert';
  settings::$data_orig['changes_dynamic']['storage']['test_insert_arr']->npath = 'test_changes/storage/test_arr';
  settings::$data_orig['changes_dynamic']['storage']['test_insert_arr']->value['item_4'] = 'a4';
  settings::$data_orig['changes_dynamic']['storage']['test_insert_arr']->value['item_5'] = 'a5';
  settings::$data_orig['changes_dynamic']['storage']['test_insert_arr']->value['item_6'] = 'a6';
  settings::$data_orig['changes_dynamic']['storage']['test_update_arr'] = new \stdClass();
  settings::$data_orig['changes_dynamic']['storage']['test_update_arr']->action = 'update';
  settings::$data_orig['changes_dynamic']['storage']['test_update_arr']->npath = 'test_changes/storage/test_arr/item_1';
  settings::$data_orig['changes_dynamic']['storage']['test_update_arr']->value = 'a1 modified';
  settings::$data_orig['changes_dynamic']['storage']['test_delete_arr'] = new \stdClass();
  settings::$data_orig['changes_dynamic']['storage']['test_delete_arr']->action = 'delete';
  settings::$data_orig['changes_dynamic']['storage']['test_delete_arr']->npath = 'test_changes/storage/test_arr/item_2';

}
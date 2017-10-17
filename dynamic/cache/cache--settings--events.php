<?php

namespace effectivecore { # cache for settings--events

  cache_factory::$data['settings--events']['core'] = new \stdClass();
  cache_factory::$data['settings--events']['core']->on_form_init['installation'] = new \stdClass();
  cache_factory::$data['settings--events']['core']->on_form_init['installation']->for = 'installation';
  cache_factory::$data['settings--events']['core']->on_form_init['installation']->handler = '\\effectivecore\\modules\\core\\events_form::on_init_install';
  cache_factory::$data['settings--events']['core']->on_form_init['installation']->weight = 0;
  cache_factory::$data['settings--events']['core']->on_form_validate['installation_default'] = new \stdClass();
  cache_factory::$data['settings--events']['core']->on_form_validate['installation_default']->for = 'installation';
  cache_factory::$data['settings--events']['core']->on_form_validate['installation_default']->handler = '\\effectivecore\\events_form::on_validate';
  cache_factory::$data['settings--events']['core']->on_form_validate['installation_default']->weight = 0;
  cache_factory::$data['settings--events']['core']->on_form_validate['installation'] = new \stdClass();
  cache_factory::$data['settings--events']['core']->on_form_validate['installation']->for = 'installation';
  cache_factory::$data['settings--events']['core']->on_form_validate['installation']->handler = '\\effectivecore\\modules\\core\\events_form::on_validate_install';
  cache_factory::$data['settings--events']['core']->on_form_validate['installation']->weight = 0;
  cache_factory::$data['settings--events']['core']->on_form_submit['installation'] = new \stdClass();
  cache_factory::$data['settings--events']['core']->on_form_submit['installation']->for = 'installation';
  cache_factory::$data['settings--events']['core']->on_form_submit['installation']->handler = '\\effectivecore\\modules\\core\\events_form::on_submit_install';
  cache_factory::$data['settings--events']['core']->on_form_submit['installation']->weight = 0;
  cache_factory::$data['settings--events']['develop'] = new \stdClass();
  cache_factory::$data['settings--events']['develop']->on_module_start['demo'] = new \stdClass();
  cache_factory::$data['settings--events']['develop']->on_module_start['demo']->for = 'demo';
  cache_factory::$data['settings--events']['develop']->on_module_start['demo']->handler = '\\effectivecore\\modules\\develop\\events_module::on_start';
  cache_factory::$data['settings--events']['develop']->on_module_start['demo']->weight = 0;
  cache_factory::$data['settings--events']['develop']->on_module_install['demo'] = new \stdClass();
  cache_factory::$data['settings--events']['develop']->on_module_install['demo']->for = 'demo';
  cache_factory::$data['settings--events']['develop']->on_module_install['demo']->handler = '\\effectivecore\\modules\\develop\\events_module::on_install';
  cache_factory::$data['settings--events']['develop']->on_module_install['demo']->weight = 0;
  cache_factory::$data['settings--events']['develop']->on_form_init['form_demo'] = new \stdClass();
  cache_factory::$data['settings--events']['develop']->on_form_init['form_demo']->for = 'demo';
  cache_factory::$data['settings--events']['develop']->on_form_init['form_demo']->handler = '\\effectivecore\\modules\\develop\\events_form::on_init_demo';
  cache_factory::$data['settings--events']['develop']->on_form_init['form_demo']->weight = 0;
  cache_factory::$data['settings--events']['develop']->on_form_validate['form_demo_default'] = new \stdClass();
  cache_factory::$data['settings--events']['develop']->on_form_validate['form_demo_default']->for = 'demo';
  cache_factory::$data['settings--events']['develop']->on_form_validate['form_demo_default']->handler = '\\effectivecore\\events_form::on_validate';
  cache_factory::$data['settings--events']['develop']->on_form_validate['form_demo_default']->weight = 0;
  cache_factory::$data['settings--events']['develop']->on_form_submit['form_demo'] = new \stdClass();
  cache_factory::$data['settings--events']['develop']->on_form_submit['form_demo']->for = 'demo';
  cache_factory::$data['settings--events']['develop']->on_form_submit['form_demo']->handler = '\\effectivecore\\modules\\develop\\events_form::on_submit_demo';
  cache_factory::$data['settings--events']['develop']->on_form_submit['form_demo']->weight = 0;
  cache_factory::$data['settings--events']['page'] = new \stdClass();
  cache_factory::$data['settings--events']['page']->on_module_start['page'] = new \stdClass();
  cache_factory::$data['settings--events']['page']->on_module_start['page']->for = 'page';
  cache_factory::$data['settings--events']['page']->on_module_start['page']->handler = '\\effectivecore\\modules\\page\\events_module::on_start';
  cache_factory::$data['settings--events']['page']->on_module_start['page']->weight = 0;
  cache_factory::$data['settings--events']['page']->on_form_init['decoration'] = new \stdClass();
  cache_factory::$data['settings--events']['page']->on_form_init['decoration']->for = 'decoration';
  cache_factory::$data['settings--events']['page']->on_form_init['decoration']->handler = '\\effectivecore\\modules\\page\\events_form::on_init_decoration';
  cache_factory::$data['settings--events']['page']->on_form_init['decoration']->weight = 0;
  cache_factory::$data['settings--events']['page']->on_form_validate['decoration_default'] = new \stdClass();
  cache_factory::$data['settings--events']['page']->on_form_validate['decoration_default']->for = 'decoration';
  cache_factory::$data['settings--events']['page']->on_form_validate['decoration_default']->handler = '\\effectivecore\\events_form::on_validate';
  cache_factory::$data['settings--events']['page']->on_form_validate['decoration_default']->weight = 0;
  cache_factory::$data['settings--events']['page']->on_form_submit['decoration'] = new \stdClass();
  cache_factory::$data['settings--events']['page']->on_form_submit['decoration']->for = 'decoration';
  cache_factory::$data['settings--events']['page']->on_form_submit['decoration']->handler = '\\effectivecore\\modules\\page\\events_form::on_submit_decoration';
  cache_factory::$data['settings--events']['page']->on_form_submit['decoration']->weight = 0;
  cache_factory::$data['settings--events']['storage'] = new \stdClass();
  cache_factory::$data['settings--events']['storage']->on_storage_init_before['pdo'] = new \stdClass();
  cache_factory::$data['settings--events']['storage']->on_storage_init_before['pdo']->for = 'pdo';
  cache_factory::$data['settings--events']['storage']->on_storage_init_before['pdo']->handler = '\\effectivecore\\modules\\storage\\events_storage::on_storage_init_before';
  cache_factory::$data['settings--events']['storage']->on_storage_init_before['pdo']->weight = 0;
  cache_factory::$data['settings--events']['storage']->on_storage_init_after['pdo'] = new \stdClass();
  cache_factory::$data['settings--events']['storage']->on_storage_init_after['pdo']->for = 'pdo';
  cache_factory::$data['settings--events']['storage']->on_storage_init_after['pdo']->handler = '\\effectivecore\\modules\\storage\\events_storage::on_storage_init_after';
  cache_factory::$data['settings--events']['storage']->on_storage_init_after['pdo']->weight = 0;
  cache_factory::$data['settings--events']['storage']->on_query_before['pdo'] = new \stdClass();
  cache_factory::$data['settings--events']['storage']->on_query_before['pdo']->for = 'pdo';
  cache_factory::$data['settings--events']['storage']->on_query_before['pdo']->handler = '\\effectivecore\\modules\\storage\\events_storage::on_query_before';
  cache_factory::$data['settings--events']['storage']->on_query_before['pdo']->weight = 0;
  cache_factory::$data['settings--events']['storage']->on_query_after['pdo'] = new \stdClass();
  cache_factory::$data['settings--events']['storage']->on_query_after['pdo']->for = 'pdo';
  cache_factory::$data['settings--events']['storage']->on_query_after['pdo']->handler = '\\effectivecore\\modules\\storage\\events_storage::on_query_after';
  cache_factory::$data['settings--events']['storage']->on_query_after['pdo']->weight = 0;
  cache_factory::$data['settings--events']['tree'] = new \stdClass();
  cache_factory::$data['settings--events']['tree']->on_module_start['tree'] = new \stdClass();
  cache_factory::$data['settings--events']['tree']->on_module_start['tree']->for = 'tree';
  cache_factory::$data['settings--events']['tree']->on_module_start['tree']->handler = '\\effectivecore\\modules\\tree\\events_module::on_start';
  cache_factory::$data['settings--events']['tree']->on_module_start['tree']->weight = -100;
  cache_factory::$data['settings--events']['tree']->on_module_install['tree'] = new \stdClass();
  cache_factory::$data['settings--events']['tree']->on_module_install['tree']->for = 'tree';
  cache_factory::$data['settings--events']['tree']->on_module_install['tree']->handler = '\\effectivecore\\modules\\tree\\events_module::on_install';
  cache_factory::$data['settings--events']['tree']->on_module_install['tree']->weight = 0;
  cache_factory::$data['settings--events']['user'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_module_start['user'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_module_start['user']->for = 'user';
  cache_factory::$data['settings--events']['user']->on_module_start['user']->handler = '\\effectivecore\\modules\\user\\events_module::on_start';
  cache_factory::$data['settings--events']['user']->on_module_start['user']->weight = -80;
  cache_factory::$data['settings--events']['user']->on_module_install['user'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_module_install['user']->for = 'user';
  cache_factory::$data['settings--events']['user']->on_module_install['user']->handler = '\\effectivecore\\modules\\user\\events_module::on_install';
  cache_factory::$data['settings--events']['user']->on_module_install['user']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_validate['login_default'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_validate['login_default']->for = 'login';
  cache_factory::$data['settings--events']['user']->on_form_validate['login_default']->handler = '\\effectivecore\\events_form::on_validate';
  cache_factory::$data['settings--events']['user']->on_form_validate['login_default']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_validate['login'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_validate['login']->for = 'login';
  cache_factory::$data['settings--events']['user']->on_form_validate['login']->handler = '\\effectivecore\\modules\\user\\events_form::on_validate_login';
  cache_factory::$data['settings--events']['user']->on_form_validate['login']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_validate['logout_default'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_validate['logout_default']->for = 'logout';
  cache_factory::$data['settings--events']['user']->on_form_validate['logout_default']->handler = '\\effectivecore\\events_form::on_validate';
  cache_factory::$data['settings--events']['user']->on_form_validate['logout_default']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_validate['user_n_delete_default'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_validate['user_n_delete_default']->for = 'user_n_delete';
  cache_factory::$data['settings--events']['user']->on_form_validate['user_n_delete_default']->handler = '\\effectivecore\\events_form::on_validate';
  cache_factory::$data['settings--events']['user']->on_form_validate['user_n_delete_default']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_validate['user_n_edit_default'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_validate['user_n_edit_default']->for = 'user_n_edit';
  cache_factory::$data['settings--events']['user']->on_form_validate['user_n_edit_default']->handler = '\\effectivecore\\events_form::on_validate';
  cache_factory::$data['settings--events']['user']->on_form_validate['user_n_edit_default']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_validate['user_n_edit'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_validate['user_n_edit']->for = 'user_n_edit';
  cache_factory::$data['settings--events']['user']->on_form_validate['user_n_edit']->handler = '\\effectivecore\\modules\\user\\events_form::on_validate_user_n_edit';
  cache_factory::$data['settings--events']['user']->on_form_validate['user_n_edit']->weight = 1;
  cache_factory::$data['settings--events']['user']->on_form_validate['registration_default'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_validate['registration_default']->for = 'registration';
  cache_factory::$data['settings--events']['user']->on_form_validate['registration_default']->handler = '\\effectivecore\\events_form::on_validate';
  cache_factory::$data['settings--events']['user']->on_form_validate['registration_default']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_submit['login'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_submit['login']->for = 'login';
  cache_factory::$data['settings--events']['user']->on_form_submit['login']->handler = '\\effectivecore\\modules\\user\\events_form::on_submit_login';
  cache_factory::$data['settings--events']['user']->on_form_submit['login']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_submit['logout'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_submit['logout']->for = 'logout';
  cache_factory::$data['settings--events']['user']->on_form_submit['logout']->handler = '\\effectivecore\\modules\\user\\events_form::on_submit_logout';
  cache_factory::$data['settings--events']['user']->on_form_submit['logout']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_submit['user_n_delete'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_submit['user_n_delete']->for = 'user_n_delete';
  cache_factory::$data['settings--events']['user']->on_form_submit['user_n_delete']->handler = '\\effectivecore\\modules\\user\\events_form::on_submit_user_n_delete';
  cache_factory::$data['settings--events']['user']->on_form_submit['user_n_delete']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_submit['user_n_edit'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_submit['user_n_edit']->for = 'user_n_edit';
  cache_factory::$data['settings--events']['user']->on_form_submit['user_n_edit']->handler = '\\effectivecore\\modules\\user\\events_form::on_submit_user_n_edit';
  cache_factory::$data['settings--events']['user']->on_form_submit['user_n_edit']->weight = 0;
  cache_factory::$data['settings--events']['user']->on_form_submit['registration'] = new \stdClass();
  cache_factory::$data['settings--events']['user']->on_form_submit['registration']->for = 'registration';
  cache_factory::$data['settings--events']['user']->on_form_submit['registration']->handler = '\\effectivecore\\modules\\user\\events_form::on_submit_registration';
  cache_factory::$data['settings--events']['user']->on_form_submit['registration']->weight = 0;

}
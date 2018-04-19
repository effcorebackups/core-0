<?php

namespace effcore { # cache for data--events

  cache::$data['data--events']['user'] = new \stdClass();
  cache::$data['data--events']['user']->on_module_start['user'] = new \effcore\event();
  cache::$data['data--events']['user']->on_module_start['user']->for = 'user';
  cache::$data['data--events']['user']->on_module_start['user']->handler = '\\effcore\\modules\\user\\events_module::on_start';
  cache::$data['data--events']['user']->on_module_start['user']->weight = -80;
  cache::$data['data--events']['user']->on_module_install['user'] = new \effcore\event();
  cache::$data['data--events']['user']->on_module_install['user']->for = 'user';
  cache::$data['data--events']['user']->on_module_install['user']->handler = '\\effcore\\modules\\user\\events_module::on_install';
  cache::$data['data--events']['user']->on_form_init['login'] = new \effcore\event();
  cache::$data['data--events']['user']->on_form_init['login']->for = 'login';
  cache::$data['data--events']['user']->on_form_init['login']->handler = '\\effcore\\modules\\user\\events_form::on_init_login';
  cache::$data['data--events']['user']->on_form_init['user_edit'] = new \effcore\event();
  cache::$data['data--events']['user']->on_form_init['user_edit']->for = 'user_edit';
  cache::$data['data--events']['user']->on_form_init['user_edit']->handler = '\\effcore\\modules\\user\\events_form::on_init_user_edit';
  cache::$data['data--events']['user']->on_form_validate['login'] = new \effcore\event();
  cache::$data['data--events']['user']->on_form_validate['login']->for = 'login';
  cache::$data['data--events']['user']->on_form_validate['login']->handler = '\\effcore\\modules\\user\\events_form::on_validate_login';
  cache::$data['data--events']['user']->on_form_validate['user_edit'] = new \effcore\event();
  cache::$data['data--events']['user']->on_form_validate['user_edit']->for = 'user_edit';
  cache::$data['data--events']['user']->on_form_validate['user_edit']->handler = '\\effcore\\modules\\user\\events_form::on_validate_user_edit';
  cache::$data['data--events']['user']->on_form_validate['registration'] = new \effcore\event();
  cache::$data['data--events']['user']->on_form_validate['registration']->for = 'registration';
  cache::$data['data--events']['user']->on_form_validate['registration']->handler = '\\effcore\\modules\\user\\events_form::on_validate_registration';
  cache::$data['data--events']['user']->on_form_submit['login'] = new \effcore\event();
  cache::$data['data--events']['user']->on_form_submit['login']->for = 'login';
  cache::$data['data--events']['user']->on_form_submit['login']->handler = '\\effcore\\modules\\user\\events_form::on_submit_login';
  cache::$data['data--events']['user']->on_form_submit['logout'] = new \effcore\event();
  cache::$data['data--events']['user']->on_form_submit['logout']->for = 'logout';
  cache::$data['data--events']['user']->on_form_submit['logout']->handler = '\\effcore\\modules\\user\\events_form::on_submit_logout';
  cache::$data['data--events']['user']->on_form_submit['user_delete'] = new \effcore\event();
  cache::$data['data--events']['user']->on_form_submit['user_delete']->for = 'user_delete';
  cache::$data['data--events']['user']->on_form_submit['user_delete']->handler = '\\effcore\\modules\\user\\events_form::on_submit_user_delete';
  cache::$data['data--events']['user']->on_form_submit['user_edit'] = new \effcore\event();
  cache::$data['data--events']['user']->on_form_submit['user_edit']->for = 'user_edit';
  cache::$data['data--events']['user']->on_form_submit['user_edit']->handler = '\\effcore\\modules\\user\\events_form::on_submit_user_edit';
  cache::$data['data--events']['user']->on_form_submit['registration'] = new \effcore\event();
  cache::$data['data--events']['user']->on_form_submit['registration']->for = 'registration';
  cache::$data['data--events']['user']->on_form_submit['registration']->handler = '\\effcore\\modules\\user\\events_form::on_submit_registration';
  cache::$data['data--events']['storage'] = new \stdClass();
  cache::$data['data--events']['storage']->on_storage_init_before['pdo'] = new \effcore\event();
  cache::$data['data--events']['storage']->on_storage_init_before['pdo']->for = 'pdo';
  cache::$data['data--events']['storage']->on_storage_init_before['pdo']->handler = '\\effcore\\modules\\storage\\events_storage::on_storage_init_before';
  cache::$data['data--events']['storage']->on_storage_init_after['pdo'] = new \effcore\event();
  cache::$data['data--events']['storage']->on_storage_init_after['pdo']->for = 'pdo';
  cache::$data['data--events']['storage']->on_storage_init_after['pdo']->handler = '\\effcore\\modules\\storage\\events_storage::on_storage_init_after';
  cache::$data['data--events']['storage']->on_query_before['pdo'] = new \effcore\event();
  cache::$data['data--events']['storage']->on_query_before['pdo']->for = 'pdo';
  cache::$data['data--events']['storage']->on_query_before['pdo']->handler = '\\effcore\\modules\\storage\\events_storage::on_query_before';
  cache::$data['data--events']['storage']->on_query_after['pdo'] = new \effcore\event();
  cache::$data['data--events']['storage']->on_query_after['pdo']->for = 'pdo';
  cache::$data['data--events']['storage']->on_query_after['pdo']->handler = '\\effcore\\modules\\storage\\events_storage::on_query_after';
  cache::$data['data--events']['page'] = new \stdClass();
  cache::$data['data--events']['page']->on_module_install['page'] = new \effcore\event();
  cache::$data['data--events']['page']->on_module_install['page']->for = 'page';
  cache::$data['data--events']['page']->on_module_install['page']->handler = '\\effcore\\modules\\page\\events_module::on_install';
  cache::$data['data--events']['page']->on_module_start['page'] = new \effcore\event();
  cache::$data['data--events']['page']->on_module_start['page']->for = 'page';
  cache::$data['data--events']['page']->on_module_start['page']->handler = '\\effcore\\modules\\page\\events_module::on_start';
  cache::$data['data--events']['page']->on_form_init['decoration'] = new \effcore\event();
  cache::$data['data--events']['page']->on_form_init['decoration']->for = 'decoration';
  cache::$data['data--events']['page']->on_form_init['decoration']->handler = '\\effcore\\modules\\page\\events_form::on_init_decoration';
  cache::$data['data--events']['page']->on_form_validate['decoration'] = new \effcore\event();
  cache::$data['data--events']['page']->on_form_validate['decoration']->for = 'decoration';
  cache::$data['data--events']['page']->on_form_validate['decoration']->handler = '\\effcore\\modules\\page\\events_form::on_validate_decoration';
  cache::$data['data--events']['page']->on_form_submit['decoration'] = new \effcore\event();
  cache::$data['data--events']['page']->on_form_submit['decoration']->for = 'decoration';
  cache::$data['data--events']['page']->on_form_submit['decoration']->handler = '\\effcore\\modules\\page\\events_form::on_submit_decoration';
  cache::$data['data--events']['menu'] = new \stdClass();
  cache::$data['data--events']['menu']->on_module_start['menu'] = new \effcore\event();
  cache::$data['data--events']['menu']->on_module_start['menu']->for = 'menu';
  cache::$data['data--events']['menu']->on_module_start['menu']->handler = '\\effcore\\modules\\menu\\events_module::on_start';
  cache::$data['data--events']['menu']->on_module_start['menu']->weight = -100;
  cache::$data['data--events']['menu']->on_module_install['menu'] = new \effcore\event();
  cache::$data['data--events']['menu']->on_module_install['menu']->for = 'menu';
  cache::$data['data--events']['menu']->on_module_install['menu']->handler = '\\effcore\\modules\\menu\\events_module::on_install';
  cache::$data['data--events']['demo'] = new \stdClass();
  cache::$data['data--events']['demo']->on_module_start['demo'] = new \effcore\event();
  cache::$data['data--events']['demo']->on_module_start['demo']->for = 'demo';
  cache::$data['data--events']['demo']->on_module_start['demo']->handler = '\\effcore\\modules\\demo\\events_module::on_start';
  cache::$data['data--events']['demo']->on_module_install['demo'] = new \effcore\event();
  cache::$data['data--events']['demo']->on_module_install['demo']->for = 'demo';
  cache::$data['data--events']['demo']->on_module_install['demo']->handler = '\\effcore\\modules\\demo\\events_module::on_install';
  cache::$data['data--events']['demo']->on_form_init['demo'] = new \effcore\event();
  cache::$data['data--events']['demo']->on_form_init['demo']->for = 'demo';
  cache::$data['data--events']['demo']->on_form_init['demo']->handler = '\\effcore\\modules\\demo\\events_form::on_init_demo';
  cache::$data['data--events']['demo']->on_form_validate['demo'] = new \effcore\event();
  cache::$data['data--events']['demo']->on_form_validate['demo']->for = 'demo';
  cache::$data['data--events']['demo']->on_form_validate['demo']->handler = '\\effcore\\modules\\demo\\events_form::on_validate_demo';
  cache::$data['data--events']['demo']->on_form_submit['demo'] = new \effcore\event();
  cache::$data['data--events']['demo']->on_form_submit['demo']->for = 'demo';
  cache::$data['data--events']['demo']->on_form_submit['demo']->handler = '\\effcore\\modules\\demo\\events_form::on_submit_demo';
  cache::$data['data--events']['core'] = new \stdClass();
  cache::$data['data--events']['core']->on_form_init['install'] = new \effcore\event();
  cache::$data['data--events']['core']->on_form_init['install']->for = 'install';
  cache::$data['data--events']['core']->on_form_init['install']->handler = '\\effcore\\modules\\core\\events_form::on_init_install';
  cache::$data['data--events']['core']->on_form_validate['install'] = new \effcore\event();
  cache::$data['data--events']['core']->on_form_validate['install']->for = 'install';
  cache::$data['data--events']['core']->on_form_validate['install']->handler = '\\effcore\\modules\\core\\events_form::on_validate_install';
  cache::$data['data--events']['core']->on_form_submit['install'] = new \effcore\event();
  cache::$data['data--events']['core']->on_form_submit['install']->for = 'install';
  cache::$data['data--events']['core']->on_form_submit['install']->handler = '\\effcore\\modules\\core\\events_form::on_submit_install';

}
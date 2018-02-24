<?php

namespace effectivecore { # cache for data--forms-core-install

  cache::$data['data--forms-core-install'] = new \effectivecore\form();
  cache::$data['data--forms-core-install']->children['storage'] = new \effectivecore\form_container();
  cache::$data['data--forms-core-install']->children['storage']->tag_name = 'fieldset';
  cache::$data['data--forms-core-install']->children['storage']->title = 'Storage params';
  cache::$data['data--forms-core-install']->children['storage']->title_tag_name = 'legend';
  cache::$data['data--forms-core-install']->children['storage']->children['is_mysql'] = new \effectivecore\form_field();
  cache::$data['data--forms-core-install']->children['storage']->children['is_mysql']->title = 'MySQL';
  cache::$data['data--forms-core-install']->children['storage']->children['is_mysql']->title_position = 'bottom';
  cache::$data['data--forms-core-install']->children['storage']->children['is_mysql']->children['element'] = new \effectivecore\markup_simple();
  cache::$data['data--forms-core-install']->children['storage']->children['is_mysql']->children['element']->tag_name = 'input';
  cache::$data['data--forms-core-install']->children['storage']->children['is_mysql']->children['element']->attributes['type'] = 'radio';
  cache::$data['data--forms-core-install']->children['storage']->children['is_mysql']->children['element']->attributes['name'] = 'driver';
  cache::$data['data--forms-core-install']->children['storage']->children['is_mysql']->children['element']->attributes['value'] = 'mysql';
  cache::$data['data--forms-core-install']->children['storage']->children['is_mysql']->attributes['class']['boxes'] = 'boxes';
  cache::$data['data--forms-core-install']->children['storage']->children['is_mysql']->attributes['class']['radioboxes'] = 'radioboxes';
  cache::$data['data--forms-core-install']->children['storage']->children['is_mysql']->attributes['class']['before-container'] = 'before-container';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql'] = new \effectivecore\form_container();
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->tag_name = 'fieldset';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['storage_id'] = new \effectivecore\form_field();
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['storage_id']->title = 'Storage ID';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['storage_id']->description = new \effectivecore\text();
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['storage_id']->description->text = 'Allowable characters: %%_chars.';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['storage_id']->description->args['chars'] = '"a"-"z", "A"-"Z", "0"-"9", "-", "_"';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['storage_id']->children['element'] = new \effectivecore\markup_simple();
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['storage_id']->children['element']->tag_name = 'input';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['storage_id']->children['element']->attributes['type'] = 'text';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['storage_id']->children['element']->attributes['name'] = 'storage_id';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['storage_id']->children['element']->attributes['required'] = 'required';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['storage_id']->children['element']->attributes['value'] = 'main';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['storage_id']->children['element']->attributes['minlength'] = 1;
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['storage_id']->children['element']->attributes['maxlength'] = 128;
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['storage_id']->children['element']->attributes['pattern'] = '[a-zA-Z0-9-_]+';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['host_name'] = new \effectivecore\form_field();
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['host_name']->title = 'Host name';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['host_name']->description = new \effectivecore\text();
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['host_name']->description->text = 'Allowable characters: %%_chars. Examples: %%_examples.';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['host_name']->description->args['examples'] = '127.0.0.1, example.com';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['host_name']->description->args['chars'] = '"a"-"z", "A"-"Z", "0"-"9", "-", "_", "."';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['host_name']->children['element'] = new \effectivecore\markup_simple();
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['host_name']->children['element']->tag_name = 'input';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['host_name']->children['element']->attributes['type'] = 'text';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['host_name']->children['element']->attributes['name'] = 'host_name';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['host_name']->children['element']->attributes['required'] = 'required';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['host_name']->children['element']->attributes['value'] = '127.0.0.1';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['host_name']->children['element']->attributes['minlength'] = 1;
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['host_name']->children['element']->attributes['maxlength'] = 253;
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['host_name']->children['element']->attributes['pattern'] = '[a-zA-Z0-9-_.]+';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['port'] = new \effectivecore\form_field();
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['port']->title = 'Port';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['port']->children['element'] = new \effectivecore\markup_simple();
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['port']->children['element']->tag_name = 'input';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['port']->children['element']->attributes['type'] = 'number';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['port']->children['element']->attributes['name'] = 'port';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['port']->children['element']->attributes['required'] = 'required';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['port']->children['element']->attributes['value'] = 3306;
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['port']->children['element']->attributes['min'] = 1024;
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['port']->children['element']->attributes['max'] = 49150;
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['user_name'] = new \effectivecore\form_field();
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['user_name']->title = 'User name';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['user_name']->description = new \effectivecore\text();
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['user_name']->description->text = 'Allowable characters: %%_chars.';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['user_name']->description->args['chars'] = '"a"-"z", "A"-"Z", "0"-"9", "-", "_"';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['user_name']->children['element'] = new \effectivecore\markup_simple();
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['user_name']->children['element']->tag_name = 'input';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['user_name']->children['element']->attributes['type'] = 'text';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['user_name']->children['element']->attributes['name'] = 'user_name';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['user_name']->children['element']->attributes['required'] = 'required';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['user_name']->children['element']->attributes['value'] = 'root';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['user_name']->children['element']->attributes['minlength'] = 1;
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['user_name']->children['element']->attributes['maxlength'] = 64;
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['user_name']->children['element']->attributes['pattern'] = '[a-zA-Z0-9-_]+';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['password'] = new \effectivecore\form_field();
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['password']->title = 'Password';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['password']->children['element'] = new \effectivecore\markup_simple();
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['password']->children['element']->tag_name = 'input';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['password']->children['element']->attributes['type'] = 'password';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['password']->children['element']->attributes['name'] = 'password';
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['password']->children['element']->attributes['maxlength'] = 255;
  cache::$data['data--forms-core-install']->children['storage']->children['mysql']->children['password']->children['element']->attributes['autocomplete'] = 'off';
  cache::$data['data--forms-core-install']->children['storage']->children['is_sqlite'] = new \effectivecore\form_field();
  cache::$data['data--forms-core-install']->children['storage']->children['is_sqlite']->title = 'SQLite';
  cache::$data['data--forms-core-install']->children['storage']->children['is_sqlite']->title_position = 'bottom';
  cache::$data['data--forms-core-install']->children['storage']->children['is_sqlite']->children['element'] = new \effectivecore\markup_simple();
  cache::$data['data--forms-core-install']->children['storage']->children['is_sqlite']->children['element']->tag_name = 'input';
  cache::$data['data--forms-core-install']->children['storage']->children['is_sqlite']->children['element']->attributes['type'] = 'radio';
  cache::$data['data--forms-core-install']->children['storage']->children['is_sqlite']->children['element']->attributes['name'] = 'driver';
  cache::$data['data--forms-core-install']->children['storage']->children['is_sqlite']->children['element']->attributes['value'] = 'sqlite';
  cache::$data['data--forms-core-install']->children['storage']->children['is_sqlite']->attributes['class']['boxes'] = 'boxes';
  cache::$data['data--forms-core-install']->children['storage']->children['is_sqlite']->attributes['class']['radioboxes'] = 'radioboxes';
  cache::$data['data--forms-core-install']->children['storage']->children['is_sqlite']->attributes['class']['before-container'] = 'before-container';
  cache::$data['data--forms-core-install']->children['storage']->children['sqlite'] = new \effectivecore\form_container();
  cache::$data['data--forms-core-install']->children['storage']->children['sqlite']->tag_name = 'fieldset';
  cache::$data['data--forms-core-install']->children['storage']->children['sqlite']->children['file_name'] = new \effectivecore\form_field();
  cache::$data['data--forms-core-install']->children['storage']->children['sqlite']->children['file_name']->title = 'Path to file';
  cache::$data['data--forms-core-install']->children['storage']->children['sqlite']->children['file_name']->description = new \effectivecore\text();
  cache::$data['data--forms-core-install']->children['storage']->children['sqlite']->children['file_name']->description->text = 'Allowable characters: %%_chars.';
  cache::$data['data--forms-core-install']->children['storage']->children['sqlite']->children['file_name']->description->args['chars'] = '"a"-"z", "A"-"Z", "0"-"9", "-", "_", ".", "/"';
  cache::$data['data--forms-core-install']->children['storage']->children['sqlite']->children['file_name']->children['element'] = new \effectivecore\markup_simple();
  cache::$data['data--forms-core-install']->children['storage']->children['sqlite']->children['file_name']->children['element']->tag_name = 'input';
  cache::$data['data--forms-core-install']->children['storage']->children['sqlite']->children['file_name']->children['element']->attributes['type'] = 'text';
  cache::$data['data--forms-core-install']->children['storage']->children['sqlite']->children['file_name']->children['element']->attributes['name'] = 'file_name';
  cache::$data['data--forms-core-install']->children['storage']->children['sqlite']->children['file_name']->children['element']->attributes['required'] = 'required';
  cache::$data['data--forms-core-install']->children['storage']->children['sqlite']->children['file_name']->children['element']->attributes['value'] = 'data.sqlite';
  cache::$data['data--forms-core-install']->children['storage']->children['sqlite']->children['file_name']->children['element']->attributes['minlength'] = 1;
  cache::$data['data--forms-core-install']->children['storage']->children['sqlite']->children['file_name']->children['element']->attributes['maxlength'] = 255;
  cache::$data['data--forms-core-install']->children['storage']->children['sqlite']->children['file_name']->children['element']->attributes['pattern'] = '[a-zA-Z0-9-_./]+';
  cache::$data['data--forms-core-install']->children['storage']->children['sqlite']->children['file_name']->children['element']->attributes['readonly'] = 'readonly';
  cache::$data['data--forms-core-install']->children['storage']->children['params'] = new \effectivecore\form_container();
  cache::$data['data--forms-core-install']->children['storage']->children['params']->children['table_prefix'] = new \effectivecore\form_field();
  cache::$data['data--forms-core-install']->children['storage']->children['params']->children['table_prefix']->title = 'Table prefix';
  cache::$data['data--forms-core-install']->children['storage']->children['params']->children['table_prefix']->description = new \effectivecore\text();
  cache::$data['data--forms-core-install']->children['storage']->children['params']->children['table_prefix']->description->text = 'Allowable characters: %%_chars.';
  cache::$data['data--forms-core-install']->children['storage']->children['params']->children['table_prefix']->description->args['chars'] = '"a"-"z", "A"-"Z", "0"-"9", "-", "_"';
  cache::$data['data--forms-core-install']->children['storage']->children['params']->children['table_prefix']->children['element'] = new \effectivecore\markup_simple();
  cache::$data['data--forms-core-install']->children['storage']->children['params']->children['table_prefix']->children['element']->tag_name = 'input';
  cache::$data['data--forms-core-install']->children['storage']->children['params']->children['table_prefix']->children['element']->attributes['type'] = 'text';
  cache::$data['data--forms-core-install']->children['storage']->children['params']->children['table_prefix']->children['element']->attributes['name'] = 'table_prefix';
  cache::$data['data--forms-core-install']->children['storage']->children['params']->children['table_prefix']->children['element']->attributes['maxlength'] = 10;
  cache::$data['data--forms-core-install']->children['storage']->children['params']->children['table_prefix']->children['element']->attributes['pattern'] = '[a-zA-Z0-9-_]+';
  cache::$data['data--forms-core-install']->children['license_agreement'] = new \effectivecore\form_container_license_agreement();
  cache::$data['data--forms-core-install']->children['button_install'] = new \effectivecore\markup();
  cache::$data['data--forms-core-install']->children['button_install']->tag_name = 'button';
  cache::$data['data--forms-core-install']->children['button_install']->children['label'] = new \effectivecore\text();
  cache::$data['data--forms-core-install']->children['button_install']->children['label']->text = 'install';
  cache::$data['data--forms-core-install']->children['button_install']->attributes['type'] = 'submit';
  cache::$data['data--forms-core-install']->children['button_install']->attributes['name'] = 'button';
  cache::$data['data--forms-core-install']->children['button_install']->attributes['value'] = 'install';
  cache::$data['data--forms-core-install']->children['button_to_front'] = new \effectivecore\markup();
  cache::$data['data--forms-core-install']->children['button_to_front']->tag_name = 'button';
  cache::$data['data--forms-core-install']->children['button_to_front']->children['label'] = new \effectivecore\text();
  cache::$data['data--forms-core-install']->children['button_to_front']->children['label']->text = 'to front page';
  cache::$data['data--forms-core-install']->children['button_to_front']->attributes['type'] = 'submit';
  cache::$data['data--forms-core-install']->children['button_to_front']->attributes['name'] = 'button';
  cache::$data['data--forms-core-install']->children['button_to_front']->attributes['value'] = 'to_front';
  cache::$data['data--forms-core-install']->children['button_to_front']->novalidate = true;
  cache::$data['data--forms-core-install']->attributes['id'] = 'install';
  cache::$data['data--forms-core-install']->attributes['novalidate'] = 'novalidate';
  cache::$data['data--forms-core-install']->attributes['method'] = 'post';

}
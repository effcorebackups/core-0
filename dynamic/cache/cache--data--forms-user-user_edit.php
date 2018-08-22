<?php

namespace effcore { # cache for data--forms-user-user_edit

  cache::$data['data--forms-user-user_edit'] = new \effcore\form();
  cache::$data['data--forms-user-user_edit']->children['credentials'] = new \effcore\fieldset();
  cache::$data['data--forms-user-user_edit']->children['credentials']->title = 'Credentials';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['email'] = new \effcore\field_email();
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['nick'] = new \effcore\field_text();
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['nick']->title = 'Nick';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['nick']->element_attributes['name'] = 'nick';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['nick']->element_attributes['minlength'] = 4;
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['nick']->element_attributes['maxlength'] = 32;
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar'] = new \effcore\field_file();
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar']->title = 'Avatar';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar']->allowed_types['gif'] = 'gif';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar']->allowed_types['jpeg'] = 'jpeg';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar']->allowed_types['jpg'] = 'jpg';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar']->allowed_types['png'] = 'png';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar']->upload_dir = 'avatar/';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar']->fixed_name = 'avatar-%%_id_user';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar']->element_attributes['name'] = 'avatar';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password_new'] = new \effcore\field_password();
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password_new']->title = 'New password';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password_new']->element_attributes['name'] = 'password_new';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password_new']->element_attributes['required'] = null;
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password_new']->description = 'Leave the field blank if you do not want to change its value.';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password'] = new \effcore\field_password();
  cache::$data['data--forms-user-user_edit']->children['button_save'] = new \effcore\button();
  cache::$data['data--forms-user-user_edit']->children['button_save']->attributes['type'] = 'submit';
  cache::$data['data--forms-user-user_edit']->children['button_save']->attributes['name'] = 'button';
  cache::$data['data--forms-user-user_edit']->children['button_save']->attributes['value'] = 'save';
  cache::$data['data--forms-user-user_edit']->children['button_save']->title = 'save';
  cache::$data['data--forms-user-user_edit']->children['button_cancel_new'] = new \effcore\button();
  cache::$data['data--forms-user-user_edit']->children['button_cancel_new']->attributes['type'] = 'submit';
  cache::$data['data--forms-user-user_edit']->children['button_cancel_new']->attributes['name'] = 'button';
  cache::$data['data--forms-user-user_edit']->children['button_cancel_new']->attributes['value'] = 'cancel';
  cache::$data['data--forms-user-user_edit']->children['button_cancel_new']->title = 'cancel';
  cache::$data['data--forms-user-user_edit']->children['button_cancel_new']->novalidate = true;
  cache::$data['data--forms-user-user_edit']->attributes['id'] = 'user_edit';
  cache::$data['data--forms-user-user_edit']->attributes['enctype'] = 'multipart/form-data';
  cache::$data['data--forms-user-user_edit']->attributes['method'] = 'post';
  cache::$data['data--forms-user-user_edit']->attributes['novalidate'] = 'novalidate';

}
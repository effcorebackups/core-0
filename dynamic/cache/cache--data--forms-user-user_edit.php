<?php

namespace effcore { # cache for data--forms-user-user_edit

  cache::$data['data--forms-user-user_edit'] = new \effcore\form();
  cache::$data['data--forms-user-user_edit']->children['credentials'] = new \effcore\container();
  cache::$data['data--forms-user-user_edit']->children['credentials']->tag_name = 'fieldset';
  cache::$data['data--forms-user-user_edit']->children['credentials']->title = 'Credentials';
  cache::$data['data--forms-user-user_edit']->children['credentials']->title_tag_name = 'legend';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['email'] = new \effcore\form_field_email();
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['nick'] = new \effcore\form_field();
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['nick']->title = 'Nick';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['nick']->children['element'] = new \effcore\markup_simple();
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['nick']->children['element']->attributes['type'] = 'text';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['nick']->children['element']->attributes['name'] = 'nick';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['nick']->children['element']->attributes['required'] = 'required';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['nick']->children['element']->attributes['minlength'] = 4;
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['nick']->children['element']->attributes['maxlength'] = 32;
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar'] = new \effcore\form_field_file();
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar']->max_file_size = '10K';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar']->upload_subdir = 'avatar/';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar']->fixed_name = '%%_id_user';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar']->fixed_type = 'image';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar']->title = 'Avatar';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar']->children['element'] = new \effcore\markup_simple();
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar']->children['element']->attributes['type'] = 'file';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar']->children['element']->attributes['name'] = 'avatar';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['avatar']->children['element']->attributes['accept'] = 'image/*';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password_new'] = new \effcore\form_field();
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password_new']->title = 'New password';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password_new']->description = 'Leave the field blank if you do not want to change its value.';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password_new']->children['element'] = new \effcore\markup_simple();
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password_new']->children['element']->attributes['type'] = 'password';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password_new']->children['element']->attributes['name'] = 'password_new';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password_new']->children['element']->attributes['minlength'] = 5;
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password_new']->children['element']->attributes['maxlength'] = 255;
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password_new']->children['element']->attributes['autocomplete'] = 'off';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password'] = new \effcore\form_field();
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password']->title = 'Password';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password']->children['element'] = new \effcore\markup_simple();
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password']->children['element']->attributes['type'] = 'password';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password']->children['element']->attributes['name'] = 'password';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password']->children['element']->attributes['required'] = 'required';
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password']->children['element']->attributes['minlength'] = 5;
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password']->children['element']->attributes['maxlength'] = 255;
  cache::$data['data--forms-user-user_edit']->children['credentials']->children['password']->children['element']->attributes['autocomplete'] = 'off';
  cache::$data['data--forms-user-user_edit']->children['button_save'] = new \effcore\markup();
  cache::$data['data--forms-user-user_edit']->children['button_save']->tag_name = 'button';
  cache::$data['data--forms-user-user_edit']->children['button_save']->children['label'] = new \effcore\text();
  cache::$data['data--forms-user-user_edit']->children['button_save']->children['label']->text = 'save';
  cache::$data['data--forms-user-user_edit']->children['button_save']->attributes['type'] = 'submit';
  cache::$data['data--forms-user-user_edit']->children['button_save']->attributes['name'] = 'button';
  cache::$data['data--forms-user-user_edit']->children['button_save']->attributes['value'] = 'save';
  cache::$data['data--forms-user-user_edit']->children['button_cancel'] = new \effcore\markup();
  cache::$data['data--forms-user-user_edit']->children['button_cancel']->tag_name = 'button';
  cache::$data['data--forms-user-user_edit']->children['button_cancel']->children['label'] = new \effcore\text();
  cache::$data['data--forms-user-user_edit']->children['button_cancel']->children['label']->text = 'cancel';
  cache::$data['data--forms-user-user_edit']->children['button_cancel']->attributes['type'] = 'submit';
  cache::$data['data--forms-user-user_edit']->children['button_cancel']->attributes['name'] = 'button';
  cache::$data['data--forms-user-user_edit']->children['button_cancel']->attributes['value'] = 'cancel';
  cache::$data['data--forms-user-user_edit']->children['button_cancel']->novalidate = true;
  cache::$data['data--forms-user-user_edit']->attributes['id'] = 'user_edit';
  cache::$data['data--forms-user-user_edit']->attributes['novalidate'] = 'novalidate';
  cache::$data['data--forms-user-user_edit']->attributes['enctype'] = 'multipart/form-data';
  cache::$data['data--forms-user-user_edit']->attributes['method'] = 'post';

}
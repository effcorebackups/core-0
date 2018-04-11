<?php

namespace effcore { # cache for data--forms-user-registration

  cache::$data['data--forms-user-registration'] = new \effcore\form();
  cache::$data['data--forms-user-registration']->children['credentials'] = new \effcore\container();
  cache::$data['data--forms-user-registration']->children['credentials']->tag_name = 'fieldset';
  cache::$data['data--forms-user-registration']->children['credentials']->title = 'Credentials';
  cache::$data['data--forms-user-registration']->children['credentials']->title_tag_name = 'legend';
  cache::$data['data--forms-user-registration']->children['credentials']->children['email'] = new \effcore\form_field_email();
  cache::$data['data--forms-user-registration']->children['credentials']->children['nick'] = new \effcore\form_field();
  cache::$data['data--forms-user-registration']->children['credentials']->children['nick']->title = 'Nick';
  cache::$data['data--forms-user-registration']->children['credentials']->children['nick']->children['element'] = new \effcore\markup_simple();
  cache::$data['data--forms-user-registration']->children['credentials']->children['nick']->children['element']->attributes['type'] = 'text';
  cache::$data['data--forms-user-registration']->children['credentials']->children['nick']->children['element']->attributes['name'] = 'nick';
  cache::$data['data--forms-user-registration']->children['credentials']->children['nick']->children['element']->attributes['required'] = 'required';
  cache::$data['data--forms-user-registration']->children['credentials']->children['nick']->children['element']->attributes['minlength'] = 4;
  cache::$data['data--forms-user-registration']->children['credentials']->children['nick']->children['element']->attributes['maxlength'] = 32;
  cache::$data['data--forms-user-registration']->children['credentials']->children['password'] = new \effcore\form_field_password();
  cache::$data['data--forms-user-registration']->children['credentials']->children['session_params'] = new \effcore\form_checkboxes();
  cache::$data['data--forms-user-registration']->children['credentials']->children['session_params']->input_attributes['name'] = 'session_params[]';
  cache::$data['data--forms-user-registration']->children['credentials']->children['session_params']->values['remember'] = 'remember me';
  cache::$data['data--forms-user-registration']->children['credentials']->children['session_params']->values['fixed_ip'] = 'on this ip';
  cache::$data['data--forms-user-registration']->children['credentials']->children['session_params']->checked['remember'] = 'remember';
  cache::$data['data--forms-user-registration']->children['credentials']->children['session_params']->checked['fixed_ip'] = 'fixed_ip';
  cache::$data['data--forms-user-registration']->children['credentials']->children['captcha'] = new \effcore\form_field_captcha();
  cache::$data['data--forms-user-registration']->children['button_register'] = new \effcore\markup();
  cache::$data['data--forms-user-registration']->children['button_register']->tag_name = 'button';
  cache::$data['data--forms-user-registration']->children['button_register']->children['label'] = new \effcore\text();
  cache::$data['data--forms-user-registration']->children['button_register']->children['label']->text = 'register';
  cache::$data['data--forms-user-registration']->children['button_register']->attributes['type'] = 'submit';
  cache::$data['data--forms-user-registration']->children['button_register']->attributes['name'] = 'button';
  cache::$data['data--forms-user-registration']->children['button_register']->attributes['value'] = 'register';
  cache::$data['data--forms-user-registration']->attributes['id'] = 'registration';
  cache::$data['data--forms-user-registration']->attributes['novalidate'] = 'novalidate';
  cache::$data['data--forms-user-registration']->attributes['method'] = 'post';

}
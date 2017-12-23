<?php

namespace effectivecore { # cache for data--forms--user--login

  cache::$data['data--forms--user--login'] = new \effectivecore\form();
  cache::$data['data--forms--user--login']->children['credentials'] = new \effectivecore\form_container();
  cache::$data['data--forms--user--login']->children['credentials']->tag_name = 'fieldset';
  cache::$data['data--forms--user--login']->children['credentials']->title = 'Credentials';
  cache::$data['data--forms--user--login']->children['credentials']->title_tag_name = 'legend';
  cache::$data['data--forms--user--login']->children['credentials']->children['email'] = new \effectivecore\form_field();
  cache::$data['data--forms--user--login']->children['credentials']->children['email']->title = 'EMail';
  cache::$data['data--forms--user--login']->children['credentials']->children['email']->children['element'] = new \effectivecore\markup_simple();
  cache::$data['data--forms--user--login']->children['credentials']->children['email']->children['element']->tag_name = 'input';
  cache::$data['data--forms--user--login']->children['credentials']->children['email']->children['element']->attributes['type'] = 'email';
  cache::$data['data--forms--user--login']->children['credentials']->children['email']->children['element']->attributes['name'] = 'email';
  cache::$data['data--forms--user--login']->children['credentials']->children['email']->children['element']->attributes['required'] = 'required';
  cache::$data['data--forms--user--login']->children['credentials']->children['email']->children['element']->attributes['minlength'] = 5;
  cache::$data['data--forms--user--login']->children['credentials']->children['email']->children['element']->attributes['maxlength'] = 64;
  cache::$data['data--forms--user--login']->children['credentials']->children['password'] = new \effectivecore\form_field();
  cache::$data['data--forms--user--login']->children['credentials']->children['password']->title = 'Password';
  cache::$data['data--forms--user--login']->children['credentials']->children['password']->children['element'] = new \effectivecore\markup_simple();
  cache::$data['data--forms--user--login']->children['credentials']->children['password']->children['element']->tag_name = 'input';
  cache::$data['data--forms--user--login']->children['credentials']->children['password']->children['element']->attributes['type'] = 'password';
  cache::$data['data--forms--user--login']->children['credentials']->children['password']->children['element']->attributes['name'] = 'password';
  cache::$data['data--forms--user--login']->children['credentials']->children['password']->children['element']->attributes['required'] = 'required';
  cache::$data['data--forms--user--login']->children['credentials']->children['password']->children['element']->attributes['minlength'] = 5;
  cache::$data['data--forms--user--login']->children['credentials']->children['password']->children['element']->attributes['maxlength'] = 255;
  cache::$data['data--forms--user--login']->children['credentials']->children['password']->children['element']->attributes['autocomplete'] = 'off';
  cache::$data['data--forms--user--login']->children['credentials']->children['session_params'] = new \effectivecore\form_container_checkboxes();
  cache::$data['data--forms--user--login']->children['credentials']->children['session_params']->input_attributes['name'] = 'session_params[]';
  cache::$data['data--forms--user--login']->children['credentials']->children['session_params']->values['remember'] = 'remember me';
  cache::$data['data--forms--user--login']->children['credentials']->children['session_params']->values['fixed_ip'] = 'on this ip';
  cache::$data['data--forms--user--login']->children['credentials']->children['session_params']->checked['remember'] = 'remember';
  cache::$data['data--forms--user--login']->children['credentials']->children['session_params']->checked['fixed_ip'] = 'fixed_ip';
  cache::$data['data--forms--user--login']->children['credentials']->children['captcha'] = new \effectivecore\form_field_captcha();
  cache::$data['data--forms--user--login']->children['button_login'] = new \effectivecore\markup();
  cache::$data['data--forms--user--login']->children['button_login']->tag_name = 'button';
  cache::$data['data--forms--user--login']->children['button_login']->children['label'] = new \effectivecore\text();
  cache::$data['data--forms--user--login']->children['button_login']->children['label']->text = 'login';
  cache::$data['data--forms--user--login']->children['button_login']->attributes['type'] = 'submit';
  cache::$data['data--forms--user--login']->children['button_login']->attributes['name'] = 'button';
  cache::$data['data--forms--user--login']->children['button_login']->attributes['value'] = 'login';
  cache::$data['data--forms--user--login']->attributes['id'] = 'login';
  cache::$data['data--forms--user--login']->attributes['novalidate'] = 'novalidate';
  cache::$data['data--forms--user--login']->attributes['method'] = 'post';

}
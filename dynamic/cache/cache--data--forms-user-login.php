<?php

namespace effcore { # cache for data--forms-user-login

  cache::$data['data--forms-user-login'] = new \effcore\form();
  cache::$data['data--forms-user-login']->children['credentials'] = new \effcore\container();
  cache::$data['data--forms-user-login']->children['credentials']->tag_name = 'fieldset';
  cache::$data['data--forms-user-login']->children['credentials']->title = 'Credentials';
  cache::$data['data--forms-user-login']->children['credentials']->title_tag_name = 'legend';
  cache::$data['data--forms-user-login']->children['credentials']->children['email'] = new \effcore\field_email();
  cache::$data['data--forms-user-login']->children['credentials']->children['password'] = new \effcore\field_password();
  cache::$data['data--forms-user-login']->children['credentials']->children['session_params'] = new \effcore\form_checkboxes();
  cache::$data['data--forms-user-login']->children['credentials']->children['session_params']->element_attributes['name'] = 'session_params[]';
  cache::$data['data--forms-user-login']->children['credentials']->children['session_params']->values['remember'] = 'remember me';
  cache::$data['data--forms-user-login']->children['credentials']->children['session_params']->values['fixed_ip'] = 'on this ip';
  cache::$data['data--forms-user-login']->children['credentials']->children['session_params']->checked['remember'] = 'remember';
  cache::$data['data--forms-user-login']->children['credentials']->children['session_params']->checked['fixed_ip'] = 'fixed_ip';
  cache::$data['data--forms-user-login']->children['credentials']->children['captcha'] = new \effcore\field_captcha();
  cache::$data['data--forms-user-login']->children['button_login'] = new \effcore\markup();
  cache::$data['data--forms-user-login']->children['button_login']->tag_name = 'button';
  cache::$data['data--forms-user-login']->children['button_login']->children['label'] = new \effcore\text();
  cache::$data['data--forms-user-login']->children['button_login']->children['label']->text = 'login';
  cache::$data['data--forms-user-login']->children['button_login']->attributes['type'] = 'submit';
  cache::$data['data--forms-user-login']->children['button_login']->attributes['name'] = 'button';
  cache::$data['data--forms-user-login']->children['button_login']->attributes['value'] = 'login';
  cache::$data['data--forms-user-login']->attributes['id'] = 'login';
  cache::$data['data--forms-user-login']->attributes['novalidate'] = 'novalidate';
  cache::$data['data--forms-user-login']->attributes['method'] = 'post';

}
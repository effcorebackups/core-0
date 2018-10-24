<?php

namespace effcore { # cache for data--forms-user-registration

  cache::$data['data--forms-user-registration'] = new \effcore\form();
  cache::$data['data--forms-user-registration']->children['credentials'] = new \effcore\fieldset();
  cache::$data['data--forms-user-registration']->children['credentials']->title = 'Credentials';
  cache::$data['data--forms-user-registration']->children['credentials']->children['email'] = new \effcore\field_email();
  cache::$data['data--forms-user-registration']->children['credentials']->children['nick'] = new \effcore\field_nick();
  cache::$data['data--forms-user-registration']->children['credentials']->children['password'] = new \effcore\field_password();
  cache::$data['data--forms-user-registration']->children['credentials']->children['session_params'] = new \effcore\group_switchers();
  cache::$data['data--forms-user-registration']->children['credentials']->children['session_params']->element_attributes['data-type'] = 'switcher';
  cache::$data['data--forms-user-registration']->children['credentials']->children['session_params']->element_attributes['name'] = 'session_params[]';
  cache::$data['data--forms-user-registration']->children['credentials']->children['session_params']->values['is_remember'] = 'remember me';
  cache::$data['data--forms-user-registration']->children['credentials']->children['session_params']->values['is_fixed_ip'] = 'on this ip';
  cache::$data['data--forms-user-registration']->children['credentials']->children['session_params']->checked['is_remember'] = 'is_remember';
  cache::$data['data--forms-user-registration']->children['credentials']->children['session_params']->checked['is_fixed_ip'] = 'is_fixed_ip';
  cache::$data['data--forms-user-registration']->children['credentials']->children['captcha'] = new \effcore\field_captcha();
  cache::$data['data--forms-user-registration']->children['button_register'] = new \effcore\button();
  cache::$data['data--forms-user-registration']->children['button_register']->attributes['type'] = 'submit';
  cache::$data['data--forms-user-registration']->children['button_register']->attributes['name'] = 'button';
  cache::$data['data--forms-user-registration']->children['button_register']->attributes['value'] = 'register';
  cache::$data['data--forms-user-registration']->children['button_register']->title = 'register';
  cache::$data['data--forms-user-registration']->attributes['id'] = 'registration';
  cache::$data['data--forms-user-registration']->attributes['method'] = 'post';
  cache::$data['data--forms-user-registration']->attributes['novalidate'] = 'novalidate';

}
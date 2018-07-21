<?php

namespace effcore { # cache for data--tests-test-register_user

  cache::$data['data--tests-test-register_user'] = new \effcore\test();
  cache::$data['data--tests-test-register_user']->id = 'register_user';
  cache::$data['data--tests-test-register_user']->scenario['form_id_set'] = new \effcore\step();
  cache::$data['data--tests-test-register_user']->scenario['form_id_set']->type = 'set';
  cache::$data['data--tests-test-register_user']->scenario['form_id_set']->name = 'form_id';
  cache::$data['data--tests-test-register_user']->scenario['form_id_set']->value = 'registration';
  cache::$data['data--tests-test-register_user']->scenario['validation_id_set'] = new \effcore\step();
  cache::$data['data--tests-test-register_user']->scenario['validation_id_set']->type = 'set';
  cache::$data['data--tests-test-register_user']->scenario['validation_id_set']->name = 'validation_id';
  cache::$data['data--tests-test-register_user']->scenario['validation_id_set']->value = '%%_validation_id';
  cache::$data['data--tests-test-register_user']->scenario['email_set'] = new \effcore\step();
  cache::$data['data--tests-test-register_user']->scenario['email_set']->type = 'set';
  cache::$data['data--tests-test-register_user']->scenario['email_set']->name = 'email';
  cache::$data['data--tests-test-register_user']->scenario['email_set']->value = 'test@example.com';
  cache::$data['data--tests-test-register_user']->scenario['nick_set'] = new \effcore\step();
  cache::$data['data--tests-test-register_user']->scenario['nick_set']->type = 'set';
  cache::$data['data--tests-test-register_user']->scenario['nick_set']->name = 'nick';
  cache::$data['data--tests-test-register_user']->scenario['nick_set']->value = 'test';
  cache::$data['data--tests-test-register_user']->scenario['password_set'] = new \effcore\step();
  cache::$data['data--tests-test-register_user']->scenario['password_set']->type = 'set';
  cache::$data['data--tests-test-register_user']->scenario['password_set']->name = 'password';
  cache::$data['data--tests-test-register_user']->scenario['password_set']->value = 12345;
  cache::$data['data--tests-test-register_user']->scenario['session_params_remember_set'] = new \effcore\step();
  cache::$data['data--tests-test-register_user']->scenario['session_params_remember_set']->type = 'set';
  cache::$data['data--tests-test-register_user']->scenario['session_params_remember_set']->name = 'session_params[]';
  cache::$data['data--tests-test-register_user']->scenario['session_params_remember_set']->value = 'remember';
  cache::$data['data--tests-test-register_user']->scenario['session_params_fixed_ip_set'] = new \effcore\step();
  cache::$data['data--tests-test-register_user']->scenario['session_params_fixed_ip_set']->type = 'set';
  cache::$data['data--tests-test-register_user']->scenario['session_params_fixed_ip_set']->name = 'session_params[]';
  cache::$data['data--tests-test-register_user']->scenario['session_params_fixed_ip_set']->value = 'fixed_ip';
  cache::$data['data--tests-test-register_user']->scenario['captcha_set'] = new \effcore\step();
  cache::$data['data--tests-test-register_user']->scenario['captcha_set']->type = 'set';
  cache::$data['data--tests-test-register_user']->scenario['captcha_set']->name = 'captcha';
  cache::$data['data--tests-test-register_user']->scenario['captcha_set']->value = '%%_captcha';
  cache::$data['data--tests-test-register_user']->scenario['button_set'] = new \effcore\step();
  cache::$data['data--tests-test-register_user']->scenario['button_set']->type = 'set';
  cache::$data['data--tests-test-register_user']->scenario['button_set']->name = 'button';
  cache::$data['data--tests-test-register_user']->scenario['button_set']->value = 'register';
  cache::$data['data--tests-test-register_user']->scenario['form_submit'] = new \effcore\step();
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->type = 'request';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->url = '/user/registration';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->https = false;
  cache::$data['data--tests-test-register_user']->scenario['response_check'] = new \effcore\step();
  cache::$data['data--tests-test-register_user']->scenario['response_check']->type = 'check';
  cache::$data['data--tests-test-register_user']->scenario['response_check']->where = 'response';
  cache::$data['data--tests-test-register_user']->scenario['response_check']->match = 200;
  cache::$data['data--tests-test-register_user']->scenario['response_check']->on_success['return_result'] = new \effcore\step();
  cache::$data['data--tests-test-register_user']->scenario['response_check']->on_success['return_result']->type = 'return';
  cache::$data['data--tests-test-register_user']->scenario['response_check']->on_success['return_result']->value = true;

}
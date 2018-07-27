<?php

namespace effcore { # cache for data--tests-test-register_user

  cache::$data['data--tests-test-register_user'] = new \effcore\test();
  cache::$data['data--tests-test-register_user']->id = 'register_user';
  cache::$data['data--tests-test-register_user']->scenario['init_captcha'] = new \effcore\step();
  cache::$data['data--tests-test-register_user']->scenario['init_captcha']->type = 'request';
  cache::$data['data--tests-test-register_user']->scenario['init_captcha']->url = '/user/resister';
  cache::$data['data--tests-test-register_user']->scenario['init_captcha']->https = false;
  cache::$data['data--tests-test-register_user']->scenario['values_set'] = new \effcore\step();
  cache::$data['data--tests-test-register_user']->scenario['values_set']->type = 'set';
  cache::$data['data--tests-test-register_user']->scenario['values_set']->values['form_id'] = 'registration';
  cache::$data['data--tests-test-register_user']->scenario['values_set']->values['validation_id'] = '%%_validation_id';
  cache::$data['data--tests-test-register_user']->scenario['values_set']->values['email'] = 'test@example.com';
  cache::$data['data--tests-test-register_user']->scenario['values_set']->values['nick'] = 'test';
  cache::$data['data--tests-test-register_user']->scenario['values_set']->values['password'] = 12345;
  cache::$data['data--tests-test-register_user']->scenario['values_set']->values['session_params[0]'] = 'remember';
  cache::$data['data--tests-test-register_user']->scenario['values_set']->values['session_params[1]'] = 'fixed_ip';
  cache::$data['data--tests-test-register_user']->scenario['values_set']->values['captcha'] = 'xxxxxx';
  cache::$data['data--tests-test-register_user']->scenario['values_set']->values['button'] = 'register';
  cache::$data['data--tests-test-register_user']->scenario['form_submit'] = new \effcore\step();
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->type = 'request';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->url = '/user/registration';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->https = false;
  cache::$data['data--tests-test-register_user']->scenario['response_check'] = new \effcore\step();
  cache::$data['data--tests-test-register_user']->scenario['response_check']->type = 'check';
  cache::$data['data--tests-test-register_user']->scenario['response_check']->where = 'http_code';
  cache::$data['data--tests-test-register_user']->scenario['response_check']->match = 302;
  cache::$data['data--tests-test-register_user']->scenario['response_check']->on_success['return_result'] = new \effcore\step();
  cache::$data['data--tests-test-register_user']->scenario['response_check']->on_success['return_result']->type = 'return';
  cache::$data['data--tests-test-register_user']->scenario['response_check']->on_success['return_result']->value = true;

}
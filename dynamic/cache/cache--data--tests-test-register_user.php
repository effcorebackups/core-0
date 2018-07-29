<?php

namespace effcore { # cache for data--tests-test-register_user

  cache::$data['data--tests-test-register_user'] = new \effcore\test();
  cache::$data['data--tests-test-register_user']->id = 'register_user';
  cache::$data['data--tests-test-register_user']->title = 'Register user';
  cache::$data['data--tests-test-register_user']->scenario['init_captcha'] = new \effcore\step_request();
  cache::$data['data--tests-test-register_user']->scenario['init_captcha']->url = '/user/registration';
  cache::$data['data--tests-test-register_user']->scenario['form_submit'] = new \effcore\step_request();
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->url = '/user/registration';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['form_id'] = 'registration';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['validation_id'] = '%%_validation_id';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['email'] = 'test@example.com';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['nick'] = 'test';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['password'] = 12345;
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['session_params[0]'] = 'remember';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['session_params[1]'] = 'fixed_ip';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['captcha'] = '%%_captcha';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['button'] = 'register';
  cache::$data['data--tests-test-register_user']->scenario['response_check'] = new \effcore\step_check();
  cache::$data['data--tests-test-register_user']->scenario['response_check']->where = 'http_code';
  cache::$data['data--tests-test-register_user']->scenario['response_check']->match = 302;
  cache::$data['data--tests-test-register_user']->scenario['response_check']->on_success['return_result'] = new \effcore\step_return();
  cache::$data['data--tests-test-register_user']->scenario['response_check']->on_success['return_result']->value = true;

}
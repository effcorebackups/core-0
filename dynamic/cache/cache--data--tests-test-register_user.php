<?php

namespace effcore { # cache for data--tests-test-register_user

  cache::$data['data--tests-test-register_user'] = new \effcore\test();
  cache::$data['data--tests-test-register_user']->id = 'register_user';
  cache::$data['data--tests-test-register_user']->title = 'Register user';
  cache::$data['data--tests-test-register_user']->description = 'After each 3 insertions you will get the message "The test was failed!" because after every 3-rd chalenge the CAPTCHA will change.';
  cache::$data['data--tests-test-register_user']->scenario['init_captcha'] = new \effcore\step_request();
  cache::$data['data--tests-test-register_user']->scenario['init_captcha']->url = '/registration';
  cache::$data['data--tests-test-register_user']->scenario['form_submit'] = new \effcore\step_request();
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->url = '/registration';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['form_id'] = 'registration';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['validation_id'] = '%%_validation_id';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['email'] = '%%_email_random';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['nick'] = '%%_nick_random';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['password'] = '%%_password_random';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['session_params[0]'] = 'is_remember';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['session_params[1]'] = 'is_fixed_ip';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['captcha'] = '%%_captcha';
  cache::$data['data--tests-test-register_user']->scenario['form_submit']->post['button'] = 'register';
  cache::$data['data--tests-test-register_user']->scenario['response_check'] = new \effcore\step_check();
  cache::$data['data--tests-test-register_user']->scenario['response_check']->where = 'subm_errs';
  cache::$data['data--tests-test-register_user']->scenario['response_check']->match = 0;
  cache::$data['data--tests-test-register_user']->scenario['response_check']->on_success['return_result'] = new \effcore\step_return();
  cache::$data['data--tests-test-register_user']->scenario['response_check']->on_success['return_result']->value = 1;
  cache::$data['data--tests-test-register_user']->scenario['response_check']->on_failure['return_result'] = new \effcore\step_return();
  cache::$data['data--tests-test-register_user']->scenario['response_check']->on_failure['return_result']->value = 0;

}
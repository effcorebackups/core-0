<?php

namespace effectivecore { # cache for data--tests

  cache::$data['data--tests']['develop']['register_user'] = new \effectivecore\test();
  cache::$data['data--tests']['develop']['register_user']->id = 'register_user';
  cache::$data['data--tests']['develop']['register_user']->https = true;
  cache::$data['data--tests']['develop']['register_user']->url = 'user/registration';
  cache::$data['data--tests']['develop']['register_user']->scenario['fill_email'] = new \stdClass();
  cache::$data['data--tests']['develop']['register_user']->scenario['fill_email']->action_type = 'fill';
  cache::$data['data--tests']['develop']['register_user']->scenario['fill_email']->field = 'email';
  cache::$data['data--tests']['develop']['register_user']->scenario['fill_email']->value = 'test@example.com';
  cache::$data['data--tests']['develop']['register_user']->scenario['fill_nick'] = new \stdClass();
  cache::$data['data--tests']['develop']['register_user']->scenario['fill_nick']->action_type = 'fill';
  cache::$data['data--tests']['develop']['register_user']->scenario['fill_nick']->field = 'nick';
  cache::$data['data--tests']['develop']['register_user']->scenario['fill_nick']->value = 'test';
  cache::$data['data--tests']['develop']['register_user']->scenario['fill_password'] = new \stdClass();
  cache::$data['data--tests']['develop']['register_user']->scenario['fill_password']->action_type = 'fill';
  cache::$data['data--tests']['develop']['register_user']->scenario['fill_password']->field = 'password';
  cache::$data['data--tests']['develop']['register_user']->scenario['fill_password']->value = 12345;
  cache::$data['data--tests']['develop']['register_user']->scenario['fill_captcha'] = new \stdClass();
  cache::$data['data--tests']['develop']['register_user']->scenario['fill_captcha']->action_type = 'fill';
  cache::$data['data--tests']['develop']['register_user']->scenario['fill_captcha']->field = 'captcha';
  cache::$data['data--tests']['develop']['register_user']->scenario['fill_captcha']->value = 123456;
  cache::$data['data--tests']['develop']['register_user']->scenario['click_register'] = new \stdClass();
  cache::$data['data--tests']['develop']['register_user']->scenario['click_register']->action_type = 'click';
  cache::$data['data--tests']['develop']['register_user']->scenario['click_register']->field = 'button';
  cache::$data['data--tests']['develop']['register_user']->scenario['click_register']->value = 'register';
  cache::$data['data--tests']['develop']['register_user']->scenario['check_result'] = new \stdClass();
  cache::$data['data--tests']['develop']['register_user']->scenario['check_result']->action_type = 'check';
  cache::$data['data--tests']['develop']['register_user']->scenario['check_result']->when_error = new \stdClass();
  cache::$data['data--tests']['develop']['register_user']->scenario['check_result']->when_error->action = new \stdClass();
  cache::$data['data--tests']['develop']['register_user']->scenario['check_result']->when_error->action->return = false;
  cache::$data['data--tests']['develop']['register_user']->scenario['check_result']->when_success = new \stdClass();
  cache::$data['data--tests']['develop']['register_user']->scenario['check_result']->when_success->action = new \stdClass();
  cache::$data['data--tests']['develop']['register_user']->scenario['check_result']->when_success->action->return = true;

}
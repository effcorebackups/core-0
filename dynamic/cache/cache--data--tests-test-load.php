<?php

namespace effcore { # cache for data--tests-test-load

  cache::$data['data--tests-test-load'] = new \effcore\test();
  cache::$data['data--tests-test-load']->id = 'load';
  cache::$data['data--tests-test-load']->title = 'Load';
  cache::$data['data--tests-test-load']->scenario['request_page_login'] = new \effcore\step_request();
  cache::$data['data--tests-test-load']->scenario['request_page_login']->url = '/user/login';
  cache::$data['data--tests-test-load']->scenario['response_check'] = new \effcore\step_check();
  cache::$data['data--tests-test-load']->scenario['response_check']->where = 'http_code';
  cache::$data['data--tests-test-load']->scenario['response_check']->match = 200;
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['request_page_registration'] = new \effcore\step_request();
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['request_page_registration']->url = '/user/registration';
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['response_check'] = new \effcore\step_check();
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['response_check']->where = 'http_code';
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['response_check']->match = 200;
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['response_check']->on_success['return_result'] = new \effcore\step_return();
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['response_check']->on_success['return_result']->value = 1;

}
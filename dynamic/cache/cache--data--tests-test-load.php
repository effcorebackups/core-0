<?php

namespace effcore { # cache for data--tests-test-load

  cache::$data['data--tests-test-load'] = new \effcore\test();
  cache::$data['data--tests-test-load']->id = 'load';
  cache::$data['data--tests-test-load']->title = 'Load';
  cache::$data['data--tests-test-load']->scenario['request_page_login'] = new \effcore\step();
  cache::$data['data--tests-test-load']->scenario['request_page_login']->type = 'request';
  cache::$data['data--tests-test-load']->scenario['request_page_login']->url = '/user/login';
  cache::$data['data--tests-test-load']->scenario['request_page_login']->https = false;
  cache::$data['data--tests-test-load']->scenario['response_check'] = new \effcore\step();
  cache::$data['data--tests-test-load']->scenario['response_check']->type = 'check';
  cache::$data['data--tests-test-load']->scenario['response_check']->where = 'http_code';
  cache::$data['data--tests-test-load']->scenario['response_check']->match = 200;
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['request_page_registration'] = new \effcore\step();
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['request_page_registration']->type = 'request';
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['request_page_registration']->url = '/user/registration';
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['request_page_registration']->https = false;
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['response_check'] = new \effcore\step();
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['response_check']->type = 'check';
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['response_check']->where = 'http_code';
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['response_check']->match = 200;
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['response_check']->on_success['return_result'] = new \effcore\step();
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['response_check']->on_success['return_result']->type = 'return';
  cache::$data['data--tests-test-load']->scenario['response_check']->on_success['response_check']->on_success['return_result']->value = true;

}
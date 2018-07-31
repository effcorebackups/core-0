<?php

namespace effcore { # cache for data--tests-test-load

  cache::$data['data--tests-test-load'] = new \effcore\test();
  cache::$data['data--tests-test-load']->id = 'load';
  cache::$data['data--tests-test-load']->title = 'Load';
  cache::$data['data--tests-test-load']->scenario['repeat'] = new \effcore\step_repeat();
  cache::$data['data--tests-test-load']->scenario['repeat']->quantity = 10;
  cache::$data['data--tests-test-load']->scenario['repeat']->actions['request_page_login'] = new \effcore\step_request();
  cache::$data['data--tests-test-load']->scenario['repeat']->actions['request_page_login']->url = '/user/login';
  cache::$data['data--tests-test-load']->scenario['repeat']->actions['response_check'] = new \effcore\step_check();
  cache::$data['data--tests-test-load']->scenario['repeat']->actions['response_check']->where = 'http_code';
  cache::$data['data--tests-test-load']->scenario['repeat']->actions['response_check']->match = 200;
  cache::$data['data--tests-test-load']->scenario['repeat']->actions['response_check']->on_failure['return_result'] = new \effcore\step_return();
  cache::$data['data--tests-test-load']->scenario['repeat']->actions['response_check']->on_failure['return_result']->value = 0;
  cache::$data['data--tests-test-load']->scenario['return_result'] = new \effcore\step_return();
  cache::$data['data--tests-test-load']->scenario['return_result']->value = 1;

}
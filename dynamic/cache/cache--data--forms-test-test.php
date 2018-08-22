<?php

namespace effcore { # cache for data--forms-test-test

  cache::$data['data--forms-test-test'] = new \effcore\form();
  cache::$data['data--forms-test-test']->children['test'] = new \effcore\fieldset();
  cache::$data['data--forms-test-test']->children['test']->children['select_test'] = new \effcore\field_select();
  cache::$data['data--forms-test-test']->children['test']->children['select_test']->element_attributes['name'] = 'select_test';
  cache::$data['data--forms-test-test']->children['test']->children['select_test']->title = 'Select the test';
  cache::$data['data--forms-test-test']->children['button_run'] = new \effcore\button();
  cache::$data['data--forms-test-test']->children['button_run']->attributes['type'] = 'submit';
  cache::$data['data--forms-test-test']->children['button_run']->attributes['name'] = 'button';
  cache::$data['data--forms-test-test']->children['button_run']->attributes['value'] = 'run';
  cache::$data['data--forms-test-test']->children['button_run']->title = 'run';
  cache::$data['data--forms-test-test']->attributes['id'] = 'test';
  cache::$data['data--forms-test-test']->attributes['method'] = 'post';
  cache::$data['data--forms-test-test']->attributes['novalidate'] = 'novalidate';

}
<?php

namespace effcore { # cache for data--forms-test-test

  cache::$data['data--forms-test-test'] = new \effcore\form();
  cache::$data['data--forms-test-test']->children['colors'] = new \effcore\container();
  cache::$data['data--forms-test-test']->children['colors']->tag_name = 'fieldset';
  cache::$data['data--forms-test-test']->children['colors']->title_tag_name = 'legend';
  cache::$data['data--forms-test-test']->children['colors']->children['select_test'] = new \effcore\field_select();
  cache::$data['data--forms-test-test']->children['colors']->children['select_test']->element_attributes['name'] = 'select_test';
  cache::$data['data--forms-test-test']->children['colors']->children['select_test']->title = 'Select the test';
  cache::$data['data--forms-test-test']->children['button_run'] = new \effcore\markup();
  cache::$data['data--forms-test-test']->children['button_run']->tag_name = 'button';
  cache::$data['data--forms-test-test']->children['button_run']->children['label'] = new \effcore\text();
  cache::$data['data--forms-test-test']->children['button_run']->children['label']->text = 'run';
  cache::$data['data--forms-test-test']->children['button_run']->attributes['type'] = 'submit';
  cache::$data['data--forms-test-test']->children['button_run']->attributes['name'] = 'button';
  cache::$data['data--forms-test-test']->children['button_run']->attributes['value'] = 'run';
  cache::$data['data--forms-test-test']->attributes['id'] = 'test';
  cache::$data['data--forms-test-test']->attributes['method'] = 'post';
  cache::$data['data--forms-test-test']->attributes['novalidate'] = 'novalidate';

}
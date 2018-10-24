<?php

namespace effcore { # cache for data--forms-core-modules

  cache::$data['data--forms-core-modules'] = new \effcore\form();
  cache::$data['data--forms-core-modules']->children['info'] = new \effcore\markup();
  cache::$data['data--forms-core-modules']->children['info']->tag_name = 'x-modules-info';
  cache::$data['data--forms-core-modules']->children['button_save'] = new \effcore\button();
  cache::$data['data--forms-core-modules']->children['button_save']->attributes['type'] = 'submit';
  cache::$data['data--forms-core-modules']->children['button_save']->attributes['name'] = 'button';
  cache::$data['data--forms-core-modules']->children['button_save']->attributes['value'] = 'save';
  cache::$data['data--forms-core-modules']->children['button_save']->attributes['disabled'] = 'disabled';
  cache::$data['data--forms-core-modules']->children['button_save']->title = 'save';
  cache::$data['data--forms-core-modules']->attributes['id'] = 'modules';
  cache::$data['data--forms-core-modules']->attributes['method'] = 'post';
  cache::$data['data--forms-core-modules']->attributes['novalidate'] = 'novalidate';

}
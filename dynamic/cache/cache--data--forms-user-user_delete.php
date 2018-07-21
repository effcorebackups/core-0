<?php

namespace effcore { # cache for data--forms-user-user_delete

  cache::$data['data--forms-user-user_delete'] = new \effcore\form();
  cache::$data['data--forms-user-user_delete']->children['button_delete'] = new \effcore\markup();
  cache::$data['data--forms-user-user_delete']->children['button_delete']->tag_name = 'button';
  cache::$data['data--forms-user-user_delete']->children['button_delete']->children['label'] = new \effcore\text();
  cache::$data['data--forms-user-user_delete']->children['button_delete']->children['label']->text = 'delete';
  cache::$data['data--forms-user-user_delete']->children['button_delete']->attributes['type'] = 'submit';
  cache::$data['data--forms-user-user_delete']->children['button_delete']->attributes['name'] = 'button';
  cache::$data['data--forms-user-user_delete']->children['button_delete']->attributes['value'] = 'delete';
  cache::$data['data--forms-user-user_delete']->children['button_cancel'] = new \effcore\markup();
  cache::$data['data--forms-user-user_delete']->children['button_cancel']->tag_name = 'button';
  cache::$data['data--forms-user-user_delete']->children['button_cancel']->children['label'] = new \effcore\text();
  cache::$data['data--forms-user-user_delete']->children['button_cancel']->children['label']->text = 'cancel';
  cache::$data['data--forms-user-user_delete']->children['button_cancel']->attributes['type'] = 'submit';
  cache::$data['data--forms-user-user_delete']->children['button_cancel']->attributes['name'] = 'button';
  cache::$data['data--forms-user-user_delete']->children['button_cancel']->attributes['value'] = 'cancel';
  cache::$data['data--forms-user-user_delete']->children['button_cancel']->novalidate = true;
  cache::$data['data--forms-user-user_delete']->attributes['id'] = 'user_delete';
  cache::$data['data--forms-user-user_delete']->attributes['method'] = 'post';
  cache::$data['data--forms-user-user_delete']->attributes['novalidate'] = 'novalidate';

}
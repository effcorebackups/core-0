<?php

namespace effectivecore { # cache for data--forms-user-user_delete

  cache::$data['data--forms-user-user_delete'] = new \effectivecore\form();
  cache::$data['data--forms-user-user_delete']->children['button_delete'] = new \effectivecore\markup();
  cache::$data['data--forms-user-user_delete']->children['button_delete']->tag_name = 'button';
  cache::$data['data--forms-user-user_delete']->children['button_delete']->children['label'] = new \effectivecore\text();
  cache::$data['data--forms-user-user_delete']->children['button_delete']->children['label']->text = 'delete';
  cache::$data['data--forms-user-user_delete']->children['button_delete']->attributes['type'] = 'submit';
  cache::$data['data--forms-user-user_delete']->children['button_delete']->attributes['name'] = 'button';
  cache::$data['data--forms-user-user_delete']->children['button_delete']->attributes['value'] = 'delete';
  cache::$data['data--forms-user-user_delete']->children['button_cancel'] = new \effectivecore\markup();
  cache::$data['data--forms-user-user_delete']->children['button_cancel']->tag_name = 'button';
  cache::$data['data--forms-user-user_delete']->children['button_cancel']->children['label'] = new \effectivecore\text();
  cache::$data['data--forms-user-user_delete']->children['button_cancel']->children['label']->text = 'cancel';
  cache::$data['data--forms-user-user_delete']->children['button_cancel']->attributes['type'] = 'submit';
  cache::$data['data--forms-user-user_delete']->children['button_cancel']->attributes['name'] = 'button';
  cache::$data['data--forms-user-user_delete']->children['button_cancel']->attributes['value'] = 'cancel';
  cache::$data['data--forms-user-user_delete']->children['button_cancel']->novalidate = true;
  cache::$data['data--forms-user-user_delete']->attributes['id'] = 'user_delete';
  cache::$data['data--forms-user-user_delete']->attributes['novalidate'] = 'novalidate';
  cache::$data['data--forms-user-user_delete']->attributes['method'] = 'post';

}
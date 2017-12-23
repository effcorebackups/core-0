<?php

namespace effectivecore { # cache for data--forms--user--logout

  cache::$data['data--forms--user--logout'] = new \effectivecore\form();
  cache::$data['data--forms--user--logout']->children['button_logout'] = new \effectivecore\markup();
  cache::$data['data--forms--user--logout']->children['button_logout']->tag_name = 'button';
  cache::$data['data--forms--user--logout']->children['button_logout']->children['label'] = new \effectivecore\text();
  cache::$data['data--forms--user--logout']->children['button_logout']->children['label']->text = 'logout';
  cache::$data['data--forms--user--logout']->children['button_logout']->attributes['type'] = 'submit';
  cache::$data['data--forms--user--logout']->children['button_logout']->attributes['name'] = 'button';
  cache::$data['data--forms--user--logout']->children['button_logout']->attributes['value'] = 'logout';
  cache::$data['data--forms--user--logout']->children['button_cancel'] = new \effectivecore\markup();
  cache::$data['data--forms--user--logout']->children['button_cancel']->tag_name = 'button';
  cache::$data['data--forms--user--logout']->children['button_cancel']->children['label'] = new \effectivecore\text();
  cache::$data['data--forms--user--logout']->children['button_cancel']->children['label']->text = 'cancel';
  cache::$data['data--forms--user--logout']->children['button_cancel']->attributes['type'] = 'submit';
  cache::$data['data--forms--user--logout']->children['button_cancel']->attributes['name'] = 'button';
  cache::$data['data--forms--user--logout']->children['button_cancel']->attributes['value'] = 'cancel';
  cache::$data['data--forms--user--logout']->children['button_cancel']->novalidate = true;
  cache::$data['data--forms--user--logout']->attributes['id'] = 'logout';
  cache::$data['data--forms--user--logout']->attributes['novalidate'] = 'novalidate';
  cache::$data['data--forms--user--logout']->attributes['method'] = 'post';

}
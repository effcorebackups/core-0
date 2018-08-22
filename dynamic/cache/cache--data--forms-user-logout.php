<?php

namespace effcore { # cache for data--forms-user-logout

  cache::$data['data--forms-user-logout'] = new \effcore\form();
  cache::$data['data--forms-user-logout']->children['button_logout'] = new \effcore\button();
  cache::$data['data--forms-user-logout']->children['button_logout']->attributes['type'] = 'submit';
  cache::$data['data--forms-user-logout']->children['button_logout']->attributes['name'] = 'button';
  cache::$data['data--forms-user-logout']->children['button_logout']->attributes['value'] = 'logout';
  cache::$data['data--forms-user-logout']->children['button_logout']->title = 'logout';
  cache::$data['data--forms-user-logout']->children['button_cancel'] = new \effcore\button();
  cache::$data['data--forms-user-logout']->children['button_cancel']->attributes['type'] = 'submit';
  cache::$data['data--forms-user-logout']->children['button_cancel']->attributes['name'] = 'button';
  cache::$data['data--forms-user-logout']->children['button_cancel']->attributes['value'] = 'cancel';
  cache::$data['data--forms-user-logout']->children['button_cancel']->title = 'cancel';
  cache::$data['data--forms-user-logout']->children['button_cancel']->novalidate = true;
  cache::$data['data--forms-user-logout']->attributes['id'] = 'logout';
  cache::$data['data--forms-user-logout']->attributes['method'] = 'post';
  cache::$data['data--forms-user-logout']->attributes['novalidate'] = 'novalidate';

}
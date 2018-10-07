<?php

namespace effcore { # cache for data--forms-user-access

  cache::$data['data--forms-user-access'] = new \effcore\form();
  cache::$data['data--forms-user-access']->children['settings'] = new \effcore\fieldset();
  cache::$data['data--forms-user-access']->children['settings']->title = 'Access settings';
  cache::$data['data--forms-user-access']->children['settings']->description = 'Access settings not applicable if no one role is not actived!';
  cache::$data['data--forms-user-access']->children['settings']->attributes['data-type'] = 'roles';
  cache::$data['data--forms-user-access']->children['button_save'] = new \effcore\button();
  cache::$data['data--forms-user-access']->children['button_save']->attributes['type'] = 'submit';
  cache::$data['data--forms-user-access']->children['button_save']->attributes['name'] = 'button';
  cache::$data['data--forms-user-access']->children['button_save']->attributes['value'] = 'save';
  cache::$data['data--forms-user-access']->children['button_save']->attributes['disabled'] = 'disabled';
  cache::$data['data--forms-user-access']->children['button_save']->title = 'save';
  cache::$data['data--forms-user-access']->attributes['id'] = 'access';
  cache::$data['data--forms-user-access']->attributes['method'] = 'post';
  cache::$data['data--forms-user-access']->attributes['novalidate'] = 'novalidate';

}
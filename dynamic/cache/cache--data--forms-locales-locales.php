<?php

namespace effcore { # cache for data--forms-locales-locales

  cache::$data['data--forms-locales-locales'] = new \effcore\form();
  cache::$data['data--forms-locales-locales']->children['settings'] = new \effcore\fieldset();
  cache::$data['data--forms-locales-locales']->children['settings']->title = 'Settings';
  cache::$data['data--forms-locales-locales']->children['settings']->children['language'] = new \effcore\field_select();
  cache::$data['data--forms-locales-locales']->children['settings']->children['language']->element_attributes['name'] = 'language';
  cache::$data['data--forms-locales-locales']->children['settings']->children['language']->title = 'Current language';
  cache::$data['data--forms-locales-locales']->children['button_save'] = new \effcore\button();
  cache::$data['data--forms-locales-locales']->children['button_save']->attributes['type'] = 'submit';
  cache::$data['data--forms-locales-locales']->children['button_save']->attributes['name'] = 'button';
  cache::$data['data--forms-locales-locales']->children['button_save']->attributes['value'] = 'save';
  cache::$data['data--forms-locales-locales']->children['button_save']->title = 'save';
  cache::$data['data--forms-locales-locales']->children['button_restore'] = new \effcore\button();
  cache::$data['data--forms-locales-locales']->children['button_restore']->attributes['type'] = 'submit';
  cache::$data['data--forms-locales-locales']->children['button_restore']->attributes['name'] = 'button';
  cache::$data['data--forms-locales-locales']->children['button_restore']->attributes['value'] = 'restore';
  cache::$data['data--forms-locales-locales']->children['button_restore']->attributes['disabled'] = 'disabled';
  cache::$data['data--forms-locales-locales']->children['button_restore']->title = 'restore';
  cache::$data['data--forms-locales-locales']->attributes['id'] = 'locales';
  cache::$data['data--forms-locales-locales']->attributes['method'] = 'post';
  cache::$data['data--forms-locales-locales']->attributes['novalidate'] = 'novalidate';

}
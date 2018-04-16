<?php

namespace effcore { # cache for data--forms-page-decoration

  cache::$data['data--forms-page-decoration'] = new \effcore\form();
  cache::$data['data--forms-page-decoration']->children['colors'] = new \effcore\container();
  cache::$data['data--forms-page-decoration']->children['colors']->tag_name = 'fieldset';
  cache::$data['data--forms-page-decoration']->children['colors']->title = 'Colors';
  cache::$data['data--forms-page-decoration']->children['colors']->title_tag_name = 'legend';
  cache::$data['data--forms-page-decoration']->children['colors']->children['color_id'] = new \effcore\form_palette();
  cache::$data['data--forms-page-decoration']->children['colors']->children['color_id']->element_attributes['name'] = 'color_id';
  cache::$data['data--forms-page-decoration']->children['colors']->children['color_id']->title = 'Color';
  cache::$data['data--forms-page-decoration']->children['colors']->children['color_id']->attributes['required'] = 'required';
  cache::$data['data--forms-page-decoration']->children['colors']->children['color_bg_id'] = new \effcore\form_palette();
  cache::$data['data--forms-page-decoration']->children['colors']->children['color_bg_id']->element_attributes['name'] = 'color_bg_id';
  cache::$data['data--forms-page-decoration']->children['colors']->children['color_bg_id']->title = 'Background color';
  cache::$data['data--forms-page-decoration']->children['colors']->children['color_bg_id']->attributes['required'] = 'required';
  cache::$data['data--forms-page-decoration']->children['button_save'] = new \effcore\markup();
  cache::$data['data--forms-page-decoration']->children['button_save']->tag_name = 'button';
  cache::$data['data--forms-page-decoration']->children['button_save']->children['label'] = new \effcore\text();
  cache::$data['data--forms-page-decoration']->children['button_save']->children['label']->text = 'save';
  cache::$data['data--forms-page-decoration']->children['button_save']->attributes['type'] = 'submit';
  cache::$data['data--forms-page-decoration']->children['button_save']->attributes['name'] = 'button';
  cache::$data['data--forms-page-decoration']->children['button_save']->attributes['value'] = 'save';
  cache::$data['data--forms-page-decoration']->children['button_restore'] = new \effcore\markup();
  cache::$data['data--forms-page-decoration']->children['button_restore']->tag_name = 'button';
  cache::$data['data--forms-page-decoration']->children['button_restore']->children['label'] = new \effcore\text();
  cache::$data['data--forms-page-decoration']->children['button_restore']->children['label']->text = 'restore';
  cache::$data['data--forms-page-decoration']->children['button_restore']->attributes['type'] = 'submit';
  cache::$data['data--forms-page-decoration']->children['button_restore']->attributes['name'] = 'button';
  cache::$data['data--forms-page-decoration']->children['button_restore']->attributes['value'] = 'restore';
  cache::$data['data--forms-page-decoration']->children['button_restore']->attributes['disabled'] = 'disabled';
  cache::$data['data--forms-page-decoration']->attributes['id'] = 'decoration';
  cache::$data['data--forms-page-decoration']->attributes['novalidate'] = 'novalidate';
  cache::$data['data--forms-page-decoration']->attributes['method'] = 'post';

}
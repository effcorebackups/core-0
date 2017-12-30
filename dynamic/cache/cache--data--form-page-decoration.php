<?php

namespace effectivecore { # cache for data--form-page-decoration

  cache::$data['data--form-page-decoration'] = new \effectivecore\form();
  cache::$data['data--form-page-decoration']->children['colors'] = new \effectivecore\form_container();
  cache::$data['data--form-page-decoration']->children['colors']->tag_name = 'fieldset';
  cache::$data['data--form-page-decoration']->children['colors']->title = 'Colors';
  cache::$data['data--form-page-decoration']->children['colors']->title_tag_name = 'legend';
  cache::$data['data--form-page-decoration']->children['colors']->children['color_id'] = new \effectivecore\form_container_palette();
  cache::$data['data--form-page-decoration']->children['colors']->children['color_id']->input_attributes['name'] = 'color_id';
  cache::$data['data--form-page-decoration']->children['colors']->children['color_id']->title = 'Color';
  cache::$data['data--form-page-decoration']->children['colors']->children['color_id']->attributes['required'] = 'required';
  cache::$data['data--form-page-decoration']->children['colors']->children['color_bg_id'] = new \effectivecore\form_container_palette();
  cache::$data['data--form-page-decoration']->children['colors']->children['color_bg_id']->input_attributes['name'] = 'color_bg_id';
  cache::$data['data--form-page-decoration']->children['colors']->children['color_bg_id']->title = 'Background color';
  cache::$data['data--form-page-decoration']->children['colors']->children['color_bg_id']->attributes['required'] = 'required';
  cache::$data['data--form-page-decoration']->children['button_save'] = new \effectivecore\markup();
  cache::$data['data--form-page-decoration']->children['button_save']->tag_name = 'button';
  cache::$data['data--form-page-decoration']->children['button_save']->children['label'] = new \effectivecore\text();
  cache::$data['data--form-page-decoration']->children['button_save']->children['label']->text = 'save';
  cache::$data['data--form-page-decoration']->children['button_save']->attributes['type'] = 'submit';
  cache::$data['data--form-page-decoration']->children['button_save']->attributes['name'] = 'button';
  cache::$data['data--form-page-decoration']->children['button_save']->attributes['value'] = 'save';
  cache::$data['data--form-page-decoration']->children['button_restore'] = new \effectivecore\markup();
  cache::$data['data--form-page-decoration']->children['button_restore']->tag_name = 'button';
  cache::$data['data--form-page-decoration']->children['button_restore']->children['label'] = new \effectivecore\text();
  cache::$data['data--form-page-decoration']->children['button_restore']->children['label']->text = 'restore';
  cache::$data['data--form-page-decoration']->children['button_restore']->attributes['type'] = 'submit';
  cache::$data['data--form-page-decoration']->children['button_restore']->attributes['name'] = 'button';
  cache::$data['data--form-page-decoration']->children['button_restore']->attributes['value'] = 'restore';
  cache::$data['data--form-page-decoration']->children['button_restore']->attributes['disabled'] = 'disabled';
  cache::$data['data--form-page-decoration']->attributes['id'] = 'decoration';
  cache::$data['data--form-page-decoration']->attributes['novalidate'] = 'novalidate';
  cache::$data['data--form-page-decoration']->attributes['method'] = 'post';

}
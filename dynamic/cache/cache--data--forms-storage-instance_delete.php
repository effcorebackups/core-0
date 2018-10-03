<?php

namespace effcore { # cache for data--forms-storage-instance_delete

  cache::$data['data--forms-storage-instance_delete'] = new \effcore\form();
  cache::$data['data--forms-storage-instance_delete']->children['button_delete'] = new \effcore\button();
  cache::$data['data--forms-storage-instance_delete']->children['button_delete']->attributes['type'] = 'submit';
  cache::$data['data--forms-storage-instance_delete']->children['button_delete']->attributes['name'] = 'button';
  cache::$data['data--forms-storage-instance_delete']->children['button_delete']->attributes['value'] = 'delete';
  cache::$data['data--forms-storage-instance_delete']->children['button_delete']->title = 'delete';
  cache::$data['data--forms-storage-instance_delete']->children['button_cancel'] = new \effcore\button();
  cache::$data['data--forms-storage-instance_delete']->children['button_cancel']->attributes['type'] = 'submit';
  cache::$data['data--forms-storage-instance_delete']->children['button_cancel']->attributes['name'] = 'button';
  cache::$data['data--forms-storage-instance_delete']->children['button_cancel']->attributes['value'] = 'cancel';
  cache::$data['data--forms-storage-instance_delete']->children['button_cancel']->title = 'cancel';
  cache::$data['data--forms-storage-instance_delete']->children['button_cancel']->novalidate = true;
  cache::$data['data--forms-storage-instance_delete']->attributes['id'] = 'instance_delete';
  cache::$data['data--forms-storage-instance_delete']->attributes['method'] = 'post';
  cache::$data['data--forms-storage-instance_delete']->attributes['novalidate'] = 'novalidate';

}
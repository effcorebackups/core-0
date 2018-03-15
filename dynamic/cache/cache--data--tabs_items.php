<?php

namespace effcore { # cache for data--tabs_items

  cache::$data['data--tabs_items']['core']['select'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['core']['select']->id = 'select';
  cache::$data['data--tabs_items']['core']['select']->id_parent = 'instance_manage';
  cache::$data['data--tabs_items']['core']['select']->parent_is_tab = true;
  cache::$data['data--tabs_items']['core']['select']->title = 'Select';
  cache::$data['data--tabs_items']['core']['select']->attributes['href'] = 'select';
  cache::$data['data--tabs_items']['core']['select']->attributes['class']['select'] = 'select';
  cache::$data['data--tabs_items']['core']['insert'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['core']['insert']->id = 'insert';
  cache::$data['data--tabs_items']['core']['insert']->id_parent = 'instance_manage';
  cache::$data['data--tabs_items']['core']['insert']->parent_is_tab = true;
  cache::$data['data--tabs_items']['core']['insert']->title = 'Insert';
  cache::$data['data--tabs_items']['core']['insert']->attributes['href'] = 'insert';
  cache::$data['data--tabs_items']['core']['insert']->attributes['class']['insert'] = 'insert';
  cache::$data['data--tabs_items']['core']['update'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['core']['update']->id = 'update';
  cache::$data['data--tabs_items']['core']['update']->id_parent = 'instance_manage';
  cache::$data['data--tabs_items']['core']['update']->parent_is_tab = true;
  cache::$data['data--tabs_items']['core']['update']->title = 'Update';
  cache::$data['data--tabs_items']['core']['update']->attributes['href'] = 'update';
  cache::$data['data--tabs_items']['core']['update']->attributes['class']['update'] = 'update';
  cache::$data['data--tabs_items']['core']['delete'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['core']['delete']->id = 'delete';
  cache::$data['data--tabs_items']['core']['delete']->id_parent = 'instance_manage';
  cache::$data['data--tabs_items']['core']['delete']->parent_is_tab = true;
  cache::$data['data--tabs_items']['core']['delete']->title = 'Delete';
  cache::$data['data--tabs_items']['core']['delete']->attributes['href'] = 'delete';
  cache::$data['data--tabs_items']['core']['delete']->attributes['class']['delete'] = 'delete';

}
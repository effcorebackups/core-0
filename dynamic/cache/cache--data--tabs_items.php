<?php

namespace effcore { # cache for data--tabs_items

  cache::$data['data--tabs_items']['develop']['class'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['develop']['class']->id = 'class';
  cache::$data['data--tabs_items']['develop']['class']->id_parent = 'structures';
  cache::$data['data--tabs_items']['develop']['class']->parent_is_tab = true;
  cache::$data['data--tabs_items']['develop']['class']->action_name = 'class/list';
  cache::$data['data--tabs_items']['develop']['class']->title = 'Classes';
  cache::$data['data--tabs_items']['develop']['class']->attributes['class']['class'] = 'class';
  cache::$data['data--tabs_items']['develop']['interface'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['develop']['interface']->id = 'interface';
  cache::$data['data--tabs_items']['develop']['interface']->id_parent = 'structures';
  cache::$data['data--tabs_items']['develop']['interface']->parent_is_tab = true;
  cache::$data['data--tabs_items']['develop']['interface']->action_name = 'interface/list';
  cache::$data['data--tabs_items']['develop']['interface']->title = 'Interfaces';
  cache::$data['data--tabs_items']['develop']['interface']->attributes['class']['interface'] = 'interface';
  cache::$data['data--tabs_items']['develop']['trait'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['develop']['trait']->id = 'trait';
  cache::$data['data--tabs_items']['develop']['trait']->id_parent = 'structures';
  cache::$data['data--tabs_items']['develop']['trait']->parent_is_tab = true;
  cache::$data['data--tabs_items']['develop']['trait']->action_name = 'trait/list';
  cache::$data['data--tabs_items']['develop']['trait']->title = 'Traits';
  cache::$data['data--tabs_items']['develop']['trait']->attributes['class']['trait'] = 'trait';
  cache::$data['data--tabs_items']['storage']['insert'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['storage']['insert']->id = 'insert';
  cache::$data['data--tabs_items']['storage']['insert']->id_parent = 'instance_manage';
  cache::$data['data--tabs_items']['storage']['insert']->parent_is_tab = true;
  cache::$data['data--tabs_items']['storage']['insert']->action_name = 'insert';
  cache::$data['data--tabs_items']['storage']['insert']->title = 'Insert';
  cache::$data['data--tabs_items']['storage']['insert']->attributes['class']['insert'] = 'insert';
  cache::$data['data--tabs_items']['storage']['select'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['storage']['select']->id = 'select';
  cache::$data['data--tabs_items']['storage']['select']->id_parent = 'instance_manage';
  cache::$data['data--tabs_items']['storage']['select']->parent_is_tab = true;
  cache::$data['data--tabs_items']['storage']['select']->action_name = 'select';
  cache::$data['data--tabs_items']['storage']['select']->title = 'Select';
  cache::$data['data--tabs_items']['storage']['select']->attributes['class']['select'] = 'select';
  cache::$data['data--tabs_items']['storage']['select']->weight = -10;
  cache::$data['data--tabs_items']['storage']['update'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['storage']['update']->id = 'update';
  cache::$data['data--tabs_items']['storage']['update']->id_parent = 'instance_manage';
  cache::$data['data--tabs_items']['storage']['update']->parent_is_tab = true;
  cache::$data['data--tabs_items']['storage']['update']->action_name = 'update';
  cache::$data['data--tabs_items']['storage']['update']->title = 'Update';
  cache::$data['data--tabs_items']['storage']['update']->attributes['class']['update'] = 'update';
  cache::$data['data--tabs_items']['storage']['delete'] = new \effcore\tabs_item();
  cache::$data['data--tabs_items']['storage']['delete']->id = 'delete';
  cache::$data['data--tabs_items']['storage']['delete']->id_parent = 'instance_manage';
  cache::$data['data--tabs_items']['storage']['delete']->parent_is_tab = true;
  cache::$data['data--tabs_items']['storage']['delete']->action_name = 'delete';
  cache::$data['data--tabs_items']['storage']['delete']->title = 'Delete';
  cache::$data['data--tabs_items']['storage']['delete']->attributes['class']['delete'] = 'delete';

}
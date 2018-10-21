<?php

namespace effcore { # cache for data--tabs

  cache::$data['data--tabs']['storage']['manage_instances'] = new \effcore\tabs();
  cache::$data['data--tabs']['storage']['manage_instances']->id = 'manage_instances';
  cache::$data['data--tabs']['storage']['manage_instances']->attributes['class']['manage-instances'] = 'manage-instances';
  cache::$data['data--tabs']['menu']['manage_trees'] = new \effcore\tabs();
  cache::$data['data--tabs']['menu']['manage_trees']->id = 'manage_trees';
  cache::$data['data--tabs']['menu']['manage_trees']->attributes['class']['manage-trees'] = 'manage-trees';
  cache::$data['data--tabs']['locales']['languages'] = new \effcore\tabs();
  cache::$data['data--tabs']['locales']['languages']->id = 'languages';
  cache::$data['data--tabs']['locales']['languages']->attributes['class']['languages'] = 'languages';
  cache::$data['data--tabs']['demo']['demo'] = new \effcore\tabs();
  cache::$data['data--tabs']['demo']['demo']->id = 'demo';
  cache::$data['data--tabs']['demo']['demo']->attributes['class']['demo'] = 'demo';
  cache::$data['data--tabs']['develop']['structures'] = new \effcore\tabs();
  cache::$data['data--tabs']['develop']['structures']->id = 'structures';
  cache::$data['data--tabs']['develop']['structures']->attributes['class']['structures'] = 'structures';

}
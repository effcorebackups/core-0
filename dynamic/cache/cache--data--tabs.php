<?php

namespace effcore { # cache for data--tabs

  cache::$data['data--tabs']['develop']['structures'] = new \effcore\tabs();
  cache::$data['data--tabs']['develop']['structures']->id = 'structures';
  cache::$data['data--tabs']['develop']['structures']->attributes['class']['structures'] = 'structures';
  cache::$data['data--tabs']['storage']['instance_manage'] = new \effcore\tabs();
  cache::$data['data--tabs']['storage']['instance_manage']->id = 'instance_manage';
  cache::$data['data--tabs']['storage']['instance_manage']->attributes['class']['instance-manage'] = 'instance-manage';

}
<?php

namespace effcore { # cache for data--tabs

  cache::$data['data--tabs']['core']['instance_manage'] = new \effcore\tabs();
  cache::$data['data--tabs']['core']['instance_manage']->id = 'instance_manage';
  cache::$data['data--tabs']['core']['instance_manage']->attributes['class']['instance-manage'] = 'instance-manage';

}
<?php

namespace effectivecore { # ARRAY[type][scope]...

  use \effectivecore\storage_instance_settings as settings;

  settings::$changes_dynamic['changes']['page'] = new \stdClass();
  settings::$changes_dynamic['changes']['page']->update['decoration/page/color_id'] = 'color_black';
  settings::$changes_dynamic['changes']['page']->update['decoration/page/color_bg_id'] = 'color_original_blue';

}
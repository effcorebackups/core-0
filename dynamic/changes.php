<?php 

namespace effectivecore { # ARRAY[type][scope]...

  use \effectivecore\storage_instance_s as settings;

  settings::$changes_dynamic['changes']['page']['update_decoration_page_color_bg'] = new \stdClass();
  settings::$changes_dynamic['changes']['page']['update_decoration_page_color_bg']->action = 'update';
  settings::$changes_dynamic['changes']['page']['update_decoration_page_color_bg']->npath = 'decoration/page/color_bg';
  settings::$changes_dynamic['changes']['page']['update_decoration_page_color_bg']->value = 'color_original_blue';

}
<?php 

namespace effectivecore { # ARRAY[type][scope]...

  use \effectivecore\storage_instance_s as settings;

  settings::$changes_dynamic['changes']['page']['update_decoration_page_background_color'] = new \stdClass();
  settings::$changes_dynamic['changes']['page']['update_decoration_page_background_color']->action = 'update';
  settings::$changes_dynamic['changes']['page']['update_decoration_page_background_color']->npath = 'decoration/page/background_color';
  settings::$changes_dynamic['changes']['page']['update_decoration_page_background_color']->value = 'color_orange';

}
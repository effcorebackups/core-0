<?php

namespace effectivecore { # cache for settings--module

  cache::$data['settings--module']['core'] = new \stdClass();
  cache::$data['settings--module']['core']->id = 'core';
  cache::$data['settings--module']['core']->title = 'Core';
  cache::$data['settings--module']['core']->description = 'Main system module.';
  cache::$data['settings--module']['core']->version = 1;
  cache::$data['settings--module']['core']->state = 'always_on';
  cache::$data['settings--module']['core']->path = 'modules/core/';
  cache::$data['settings--module']['develop'] = new \stdClass();
  cache::$data['settings--module']['develop']->id = 'develop';
  cache::$data['settings--module']['develop']->title = 'Develop';
  cache::$data['settings--module']['develop']->description = 'Module for development.';
  cache::$data['settings--module']['develop']->version = 1;
  cache::$data['settings--module']['develop']->state = 'on';
  cache::$data['settings--module']['develop']->path = 'modules/develop/';
  cache::$data['settings--module']['locales'] = new \stdClass();
  cache::$data['settings--module']['locales']->id = 'locales';
  cache::$data['settings--module']['locales']->title = 'Locales';
  cache::$data['settings--module']['locales']->description = 'Module for internationalization.';
  cache::$data['settings--module']['locales']->version = 1;
  cache::$data['settings--module']['locales']->state = 'on';
  cache::$data['settings--module']['locales']->path = 'modules/locales/';
  cache::$data['settings--module']['page'] = new \stdClass();
  cache::$data['settings--module']['page']->id = 'page';
  cache::$data['settings--module']['page']->title = 'Page';
  cache::$data['settings--module']['page']->description = 'Module for working with pages.';
  cache::$data['settings--module']['page']->version = 1;
  cache::$data['settings--module']['page']->state = 'always_on';
  cache::$data['settings--module']['page']->path = 'modules/page/';
  cache::$data['settings--module']['storage'] = new \stdClass();
  cache::$data['settings--module']['storage']->id = 'storage';
  cache::$data['settings--module']['storage']->title = 'Storage';
  cache::$data['settings--module']['storage']->description = 'Module for storages support.';
  cache::$data['settings--module']['storage']->version = 1;
  cache::$data['settings--module']['storage']->state = 'always_on';
  cache::$data['settings--module']['storage']->path = 'modules/storage/';
  cache::$data['settings--module']['tree'] = new \stdClass();
  cache::$data['settings--module']['tree']->id = 'tree';
  cache::$data['settings--module']['tree']->title = 'Tree';
  cache::$data['settings--module']['tree']->description = 'Module for working with trees (hierarchical structures).';
  cache::$data['settings--module']['tree']->version = 1;
  cache::$data['settings--module']['tree']->state = 'always_on';
  cache::$data['settings--module']['tree']->path = 'modules/tree/';
  cache::$data['settings--module']['user'] = new \stdClass();
  cache::$data['settings--module']['user']->id = 'user';
  cache::$data['settings--module']['user']->title = 'User';
  cache::$data['settings--module']['user']->description = 'Module for working with user accounts and permissions.';
  cache::$data['settings--module']['user']->version = 1;
  cache::$data['settings--module']['user']->state = 'always_on';
  cache::$data['settings--module']['user']->path = 'modules/user/';

}
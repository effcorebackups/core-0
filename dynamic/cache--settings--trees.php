<?php

namespace effectivecore { # cache for settings--trees

  caches_factory::$info['settings--trees']['created'] = '2017-09-30 18:41:57';
  caches_factory::$data['settings--trees']['core']['main'] = new \effectivecore\tree();
  caches_factory::$data['settings--trees']['core']['main']->title = 'Main menu';
  caches_factory::$data['settings--trees']['core']['main']->attributes['class']['main'] = 'main';
  caches_factory::$data['settings--trees']['core']['main']->weight = 2;
  caches_factory::$data['settings--trees']['user']['user'] = new \effectivecore\tree();
  caches_factory::$data['settings--trees']['user']['user']->title = 'User menu';
  caches_factory::$data['settings--trees']['user']['user']->attributes['class']['user'] = 'user';
  caches_factory::$data['settings--trees']['user']['user']->weight = 1;

}
<?php

namespace effectivecore { # cache for settings--trees

  cache::$data['settings--trees']['core']['main'] = new \effectivecore\tree();
  cache::$data['settings--trees']['core']['main']->id = 'main';
  cache::$data['settings--trees']['core']['main']->title = 'Main menu';
  cache::$data['settings--trees']['core']['main']->attributes['class']['main'] = 'main';
  cache::$data['settings--trees']['core']['main']->weight = 2;
  cache::$data['settings--trees']['user']['user'] = new \effectivecore\tree();
  cache::$data['settings--trees']['user']['user']->id = 'user';
  cache::$data['settings--trees']['user']['user']->title = 'User menu';
  cache::$data['settings--trees']['user']['user']->attributes['class']['user'] = 'user';
  cache::$data['settings--trees']['user']['user']->weight = 1;

}
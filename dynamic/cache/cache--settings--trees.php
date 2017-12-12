<?php

namespace effectivecore { # cache for settings--trees

  cache::$data['settings--trees']['core']['main'] = new \effectivecore\tree();
  cache::$data['settings--trees']['core']['main']->id = 'main';
  cache::$data['settings--trees']['core']['main']->title = 'Main menu';
  cache::$data['settings--trees']['core']['main']->attributes['class']['main'] = 'main';
  cache::$data['settings--trees']['core']['main']->weight = 2;
  cache::$data['settings--trees']['user']['user_anonymous'] = new \effectivecore\tree();
  cache::$data['settings--trees']['user']['user_anonymous']->id = 'user_anonymous';
  cache::$data['settings--trees']['user']['user_anonymous']->title = 'User anonymous menu';
  cache::$data['settings--trees']['user']['user_anonymous']->attributes['class']['user'] = 'user';
  cache::$data['settings--trees']['user']['user_anonymous']->attributes['class']['user-anonymous'] = 'user-anonymous';
  cache::$data['settings--trees']['user']['user_logged_in'] = new \effectivecore\tree();
  cache::$data['settings--trees']['user']['user_logged_in']->id = 'user_logged_in';
  cache::$data['settings--trees']['user']['user_logged_in']->title = 'User authenticated menu';
  cache::$data['settings--trees']['user']['user_logged_in']->attributes['class']['user'] = 'user';
  cache::$data['settings--trees']['user']['user_logged_in']->attributes['class']['user-logged_in'] = 'user-logged_in';

}
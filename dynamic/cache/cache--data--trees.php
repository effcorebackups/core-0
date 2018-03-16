<?php

namespace effcore { # cache for data--trees

  cache::$data['data--trees']['core']['main'] = new \effcore\tree();
  cache::$data['data--trees']['core']['main']->id = 'main';
  cache::$data['data--trees']['core']['main']->title = 'Main menu';
  cache::$data['data--trees']['core']['main']->attributes['class']['main'] = 'main';
  cache::$data['data--trees']['user']['user_anonymous'] = new \effcore\tree();
  cache::$data['data--trees']['user']['user_anonymous']->id = 'user_anonymous';
  cache::$data['data--trees']['user']['user_anonymous']->title = 'User anonymous menu';
  cache::$data['data--trees']['user']['user_anonymous']->attributes['class']['user'] = 'user';
  cache::$data['data--trees']['user']['user_anonymous']->attributes['class']['user-anonymous'] = 'user-anonymous';
  cache::$data['data--trees']['user']['user_logged_in'] = new \effcore\tree();
  cache::$data['data--trees']['user']['user_logged_in']->id = 'user_logged_in';
  cache::$data['data--trees']['user']['user_logged_in']->title = 'User authenticated menu';
  cache::$data['data--trees']['user']['user_logged_in']->attributes['class']['user'] = 'user';
  cache::$data['data--trees']['user']['user_logged_in']->attributes['class']['user-logged_in'] = 'user-logged_in';

}
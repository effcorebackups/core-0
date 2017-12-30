<?php

namespace effectivecore { # cache for data--tree

  cache::$data['data--tree']['core']['main'] = new \effectivecore\tree();
  cache::$data['data--tree']['core']['main']->id = 'main';
  cache::$data['data--tree']['core']['main']->title = 'Main menu';
  cache::$data['data--tree']['core']['main']->attributes['class']['main'] = 'main';
  cache::$data['data--tree']['core']['main']->weight = 2;
  cache::$data['data--tree']['user']['user_anonymous'] = new \effectivecore\tree();
  cache::$data['data--tree']['user']['user_anonymous']->id = 'user_anonymous';
  cache::$data['data--tree']['user']['user_anonymous']->title = 'User anonymous menu';
  cache::$data['data--tree']['user']['user_anonymous']->attributes['class']['user'] = 'user';
  cache::$data['data--tree']['user']['user_anonymous']->attributes['class']['user-anonymous'] = 'user-anonymous';
  cache::$data['data--tree']['user']['user_logged_in'] = new \effectivecore\tree();
  cache::$data['data--tree']['user']['user_logged_in']->id = 'user_logged_in';
  cache::$data['data--tree']['user']['user_logged_in']->title = 'User authenticated menu';
  cache::$data['data--tree']['user']['user_logged_in']->attributes['class']['user'] = 'user';
  cache::$data['data--tree']['user']['user_logged_in']->attributes['class']['user-logged_in'] = 'user-logged_in';

}
<?php

namespace effcore { # cache for data--trees

  cache::$data['data--trees']['user']['user_anonymous'] = new \effcore\tree();
  cache::$data['data--trees']['user']['user_anonymous']->id = 'user_anonymous';
  cache::$data['data--trees']['user']['user_anonymous']->title = 'Menu for anonymous user';
  cache::$data['data--trees']['user']['user_anonymous']->title_state = 'hidden';
  cache::$data['data--trees']['user']['user_anonymous']->attributes['class']['user'] = 'user';
  cache::$data['data--trees']['user']['user_anonymous']->attributes['class']['user-anonymous'] = 'user-anonymous';
  cache::$data['data--trees']['user']['user_logged_in'] = new \effcore\tree();
  cache::$data['data--trees']['user']['user_logged_in']->id = 'user_logged_in';
  cache::$data['data--trees']['user']['user_logged_in']->title = 'Menu for authenticated user';
  cache::$data['data--trees']['user']['user_logged_in']->title_state = 'hidden';
  cache::$data['data--trees']['user']['user_logged_in']->attributes['class']['user'] = 'user';
  cache::$data['data--trees']['user']['user_logged_in']->attributes['class']['user-logged_in'] = 'user-logged_in';
  cache::$data['data--trees']['demo']['demo'] = new \effcore\tree();
  cache::$data['data--trees']['demo']['demo']->id = 'demo';
  cache::$data['data--trees']['demo']['demo']->title = 'Menu for demonstration';
  cache::$data['data--trees']['demo']['demo']->attributes['class']['demo'] = 'demo';
  cache::$data['data--trees']['core']['main'] = new \effcore\tree();
  cache::$data['data--trees']['core']['main']->id = 'main';
  cache::$data['data--trees']['core']['main']->title = 'Menu main';
  cache::$data['data--trees']['core']['main']->title_state = 'hidden';
  cache::$data['data--trees']['core']['main']->attributes['class']['main'] = 'main';

}
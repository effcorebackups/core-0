<?php

namespace effectivecore { # cache for settings--file_types

  cache_factory::$data['settings--file_types']['core']['php'] = new \stdClass();
  cache_factory::$data['settings--file_types']['core']['php']->protected = 1;
  cache_factory::$data['settings--file_types']['core']['php']->headers['Content-type'] = 'text/html';
  cache_factory::$data['settings--file_types']['core']['sqlite'] = new \stdClass();
  cache_factory::$data['settings--file_types']['core']['sqlite']->protected = 1;
  cache_factory::$data['settings--file_types']['core']['css'] = new \stdClass();
  cache_factory::$data['settings--file_types']['core']['css']->use_tokens = 1;
  cache_factory::$data['settings--file_types']['core']['css']->headers['Content-type'] = 'text/css';
  cache_factory::$data['settings--file_types']['core']['js'] = new \stdClass();
  cache_factory::$data['settings--file_types']['core']['js']->use_tokens = 1;
  cache_factory::$data['settings--file_types']['core']['js']->headers['Content-type'] = 'text/javascript';
  cache_factory::$data['settings--file_types']['core']['html'] = new \stdClass();
  cache_factory::$data['settings--file_types']['core']['html']->use_tokens = 1;
  cache_factory::$data['settings--file_types']['core']['html']->headers['Content-type'] = 'text/html';
  cache_factory::$data['settings--file_types']['core']['xml'] = new \stdClass();
  cache_factory::$data['settings--file_types']['core']['xml']->use_tokens = 1;
  cache_factory::$data['settings--file_types']['core']['xml']->headers['Content-type'] = 'text/xml';
  cache_factory::$data['settings--file_types']['core']['txt'] = new \stdClass();
  cache_factory::$data['settings--file_types']['core']['txt']->headers['Content-type'] = 'text/plain';
  cache_factory::$data['settings--file_types']['core']['svg'] = new \stdClass();
  cache_factory::$data['settings--file_types']['core']['svg']->use_tokens = 1;
  cache_factory::$data['settings--file_types']['core']['svg']->headers['Content-type'] = 'image/svg+xml';
  cache_factory::$data['settings--file_types']['core']['ico'] = new \stdClass();
  cache_factory::$data['settings--file_types']['core']['ico']->headers['Content-type'] = 'image/x-icon';
  cache_factory::$data['settings--file_types']['core']['gif'] = new \stdClass();
  cache_factory::$data['settings--file_types']['core']['gif']->headers['Content-type'] = 'image/gif';
  cache_factory::$data['settings--file_types']['core']['jpg'] = new \stdClass();
  cache_factory::$data['settings--file_types']['core']['jpg']->headers['Content-type'] = 'image/jpeg';
  cache_factory::$data['settings--file_types']['core']['png'] = new \stdClass();
  cache_factory::$data['settings--file_types']['core']['png']->headers['Content-type'] = 'image/png';
  cache_factory::$data['settings--file_types']['storage']['_s'] = new \stdClass();
  cache_factory::$data['settings--file_types']['storage']['_s']->protected = 1;
  cache_factory::$data['settings--file_types']['storage']['_s']->headers['Content-type'] = 'text/settings';

}
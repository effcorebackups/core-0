<?php

namespace effectivecore { # cache for settings--file_types

  caches_factory::$data['settings--file_types']['core']['php'] = new \stdClass();
  caches_factory::$data['settings--file_types']['core']['php']->protected = 1;
  caches_factory::$data['settings--file_types']['core']['php']->headers['Content-type'] = 'text/html';
  caches_factory::$data['settings--file_types']['core']['css'] = new \stdClass();
  caches_factory::$data['settings--file_types']['core']['css']->use_tokens = 1;
  caches_factory::$data['settings--file_types']['core']['css']->headers['Content-type'] = 'text/css';
  caches_factory::$data['settings--file_types']['core']['svg'] = new \stdClass();
  caches_factory::$data['settings--file_types']['core']['svg']->use_tokens = 1;
  caches_factory::$data['settings--file_types']['core']['svg']->headers['Content-type'] = 'image/svg+xml';
  caches_factory::$data['settings--file_types']['core']['js'] = new \stdClass();
  caches_factory::$data['settings--file_types']['core']['js']->use_tokens = 1;
  caches_factory::$data['settings--file_types']['core']['js']->headers['Content-type'] = 'application/javascript';
  caches_factory::$data['settings--file_types']['core']['ico'] = new \stdClass();
  caches_factory::$data['settings--file_types']['core']['ico']->headers['Content-type'] = 'image/x-icon';
  caches_factory::$data['settings--file_types']['core']['gif'] = new \stdClass();
  caches_factory::$data['settings--file_types']['core']['gif']->headers['Content-type'] = 'image/gif';
  caches_factory::$data['settings--file_types']['core']['jpg'] = new \stdClass();
  caches_factory::$data['settings--file_types']['core']['jpg']->headers['Content-type'] = 'image/jpeg';
  caches_factory::$data['settings--file_types']['core']['png'] = new \stdClass();
  caches_factory::$data['settings--file_types']['core']['png']->headers['Content-type'] = 'image/png';
  caches_factory::$data['settings--file_types']['storage']['_s'] = new \stdClass();
  caches_factory::$data['settings--file_types']['storage']['_s']->protected = 1;
  caches_factory::$data['settings--file_types']['storage']['_s']->headers['Content-type'] = 'text/settings';

}
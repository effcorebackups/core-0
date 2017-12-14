<?php

  ##################################################################
  ### Copyright © 2017—2018 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effectivecore {

  const dir_root        = __DIR__.'/';
  const dir_dynamic     = __DIR__.'/dynamic/';
  const dir_modules     = __DIR__.'/modules/';
  const nl              = "\n";
  const br              = "<br/>";

  require_once('modules/core/backend/class_ab--gl--factory.php');
  require_once('modules/core/backend/class_ab--gl--timer.php');
  require_once('modules/core/backend/class_ab--gl--console.php');
  require_once('modules/core/backend/class_ab--gl--dynamic.php');
  require_once('modules/core/backend/class_ab--gl--cache.php');
  require_once('modules/core/backend/class--gl--file.php');
  spl_autoload_register('\effectivecore\factory::autoload');

  use \effectivecore\url as url;
  use \effectivecore\timer as timer;
  use \effectivecore\event as event;
  use \effectivecore\token as token;
  timer::tap('total');

  # redirect from '/any_path/' to '/any_path'
  if (            url::get_current()->path != '/' &&
           substr(url::get_current()->path, -1) == '/') {
    url::go(rtrim(url::get_current()->path, '/'));
  }

  ##########################
  ### single entry point ###
  ##########################

  $file_types = file::get_file_types();
  $extension = url::get_current()->get_extension();
  if ($extension) {
  # case for protected files
    if (!empty($file_types[$extension]->protected)) {
      factory::send_header_and_exit('access_denided',
        'File with this extension is protected by settings in file_types!'
      );
    }
  # case for media files
    $path = dir_root.ltrim(url::get_current()->path, '/');
    if (is_file($path) && is_readable($path)) {
      $file = new file($path);
      $data = $file->load();
    # replace tokens
      if (isset($file_types[$extension]->use_tokens)) {
        $data = token::replace($data);
      }
    # if get header HTTP_IF_NONE_MATCH
      $etag = base64_encode(md5($data, true));
      if (isset($_SERVER['HTTP_IF_NONE_MATCH']) &&
                $_SERVER['HTTP_IF_NONE_MATCH'] === $etag) {
        header('HTTP/1.1 304 Not Modified');
        exit();
      }
    # send headers
      header('Cache-Control: must-revalidate, private', true);
      header('Etag: '.$etag, true);
      if (is_array($file_types[$extension]->headers)) {
        foreach ($file_types[$extension]->headers as $c_key => $c_value) {
          header($c_key.': '.$c_value, true);
        }
      }
      print $data;
      exit();
    }
  }

  # case for page (non file)
  ob_start();
  foreach (event::start('on_module_start') as $c_results) {
    foreach ($c_results as $c_result) {
      print str_replace(nl.nl, '', $c_result);
    }
  }

}
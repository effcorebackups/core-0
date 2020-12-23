<?php

  ##################################################################
  ### Copyright © 2017—2021 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class picture_stream {

  const type = 'picture';

  public $path_original;

  ###########################
  ### static declarations ###
  ###########################

  static function path_parse($path) {
    $file = new file($path);
    if ($file->is_path_absolute() === false) throw new \Exception('The path should be absolute.');
    if ($file->protocol === static::type) {
      $result = new \stdClass;
      $result->external = [];
      $result->internal = [];
      $is_container_found = false;
      foreach ($file->dirs_get_parts() + ['file' => $file->file_get()] as $c_part) {
        $c_info = file::path_parse($c_part, true);
        if (!$c_info) return; # return if any component of path is broken
        if ($is_container_found !== true) $result->external[] = $c_part;
        if ($is_container_found === true) $result->internal[] = $c_part;
        if ($is_container_found !== true && $c_info->type === static::type && strlen($c_info->name)) $is_container_found = true;
      }
      if ($is_container_found) {
        $result->path_phardata =          'phar:///'.implode('/', $result->external);
        $result->path_external = static::type.':///'.implode('/', $result->external);
        $result->path_internal =                     implode('/', $result->internal);
        return $result;
      }
    }
  }

  static function register() {
    stream_wrapper_register(static::type, __CLASS__);
  }

}}
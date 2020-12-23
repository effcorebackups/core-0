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
    if ($file->protocol === static::type) {
      $result = new \stdClass;
      $result->container = [];
      $result->enclosure = [];
      $is_container_found = false;
      foreach ($file->dirs_get_parts() + ['file' => $file->file_get()] as $c_part) {
        $c_info = file::path_parse($c_part, true);
        if (!$c_info) return; # return if any component of path is broken
        if ($is_container_found !== true) $result->container[] = $c_part;
        if ($is_container_found === true) $result->enclosure[] = $c_part;
        if ($is_container_found !== true && $c_info->type === static::type && strlen($c_info->name)) $is_container_found = true;
      }
      if ($is_container_found) {
        return $result;
      }
    }
  }

}}
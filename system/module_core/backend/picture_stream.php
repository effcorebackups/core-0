<?php

  ##################################################################
  ### Copyright © 2017—2021 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class picture_stream {

  const type = 'picture';

  public $path_original;
  public $path_info;
  public $fp;
  public $context;

  function build($path) {
    if ($this->path_original === null) {
      $this->path_original = $path;
      $this->path_info = static::path_parse($path);
      if ($this->path_info === null)                    throw new \Exception('The path is not valid and does not match the expression: protocol_name://path_absolute_to_container.protocol_name/internal_content');
      if ($this->path_info->is_path_absolute === false) throw new \Exception('The path should be absolute.');
      if ($this->path_info->path_internal === '')       throw new \Exception('Only the contents of the container can be processed.');
    }
  }

  function stream_open($path) {
    $this->build($path);
    $this->fp = fopen('phar:///'.$this->path_info->path_external.'/'.$this->path_info->path_internal, 'rb');
    return $this->fp;
  }

  function stream_read($count) {
    return fread($this->fp, $count);
  }

  function stream_write($data) {
    try {
      $this->stream_close();
      $container = new \PharData('phar:///'.$this->path_info->path_external, 0, null, \Phar::TAR);
      $container->addFromString($this->path_info->path_internal, $data);
      $this->stream_open($this->path_original);
      return strlen($data);
    } catch (Exception $e) {
      return 0;
    }
  }

  function stream_stat() {
    return fstat($this->fp);
  }

  function stream_eof() {
    return feof($this->fp);
  }

  function stream_flush() {
    return fflush($this->fp);
  }

  function stream_close() {
    fclose($this->fp);
  }

  function url_stat($path, $flags) {
    $fp = @fopen($path, 'rb');
    return $fp ? fstat($fp) : null;
  }

  ###########################
  ### static declarations ###
  ###########################

  static function path_parse($path) {
    $file = new file($path);
    if ($file->protocol === static::type) {
      $result = new \stdClass;
      $result->is_path_absolute = $file->is_path_absolute();
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
        $result->path_external = implode('/', $result->external);
        $result->path_internal = implode('/', $result->internal);
        return $result;
      }
    }
  }

  static function register() {
    stream_wrapper_register(static::type, __CLASS__);
  }

}}
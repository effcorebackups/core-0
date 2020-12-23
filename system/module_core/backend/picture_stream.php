<?php

  ##################################################################
  ### Copyright © 2017—2021 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class picture_stream {

  const type = 'picture';

  private $path_original;
  private $path_info;
  private $stream;
  private $resource;

  public function stream_open($path, $mode, $options, &$opened_path) {
    $this->path_original = $path;
    $this->path_info = static::path_parse($path);
    if ($this->path_info === null)                    throw new \Exception('The path is not valid and does not match the expression: protocol_name://path_absolute_to_container.protocol_name/internal_content');
    if ($this->path_info->is_path_absolute === false) throw new \Exception('The path should be absolute.');
    if ($this->path_info->path_internal === '')       throw new \Exception('Only the contents of the container can be processed.');
    $this->resource = fopen('phar:///'.$this->path_info->path_external.'/'.
                                       $this->path_info->path_internal, $mode);
    return $this->resource;
  }

  function stream_read($count) {
    return fread($this->resource, $count);
  }

  function stream_eof() {
    return feof($this->resource);
  }

  function stream_close() {
    fclose($this->resource);
  }

  function dir_closedir() {print 'dir_closedir'.nl;}
  function dir_opendir($path, $options) {print 'dir_opendir'.nl;}
  function dir_readdir() {print 'dir_readdir'.nl;}
  function dir_rewinddir() {print 'dir_rewinddir'.nl;}
  function mkdir($path, $mode, $options) {print 'mkdir'.nl;}
  function rename($path_from, $path_to) {print 'rename'.nl;}
  function rmdir($path, $options) {print 'rmdir'.nl;}
  function stream_cast($cast_as) {print 'stream_cast'.nl;}
  function stream_flush() {print 'stream_flush'.nl;}
  function stream_lock($operation) {print 'stream_lock'.nl;}
  function stream_metadata($path, $option, $value) {print 'stream_metadata'.nl;}
  function stream_seek($offset, $whence = SEEK_SET) {print 'stream_seek'.nl;}
  function stream_set_option($option, $arg1, $arg2) {print 'stream_set_option'.nl;}
  function stream_stat() {print 'stream_stat'.nl;}
  function stream_tell() {print 'stream_tell'.nl;}
  function stream_truncate($new_size) {print 'stream_truncate'.nl;}
  function stream_write($data) {print 'stream_write'.nl;}
  function unlink($path) {print 'unlink'.nl;}
  function url_stat($path, $flags) {print 'url_stat'.nl;}

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
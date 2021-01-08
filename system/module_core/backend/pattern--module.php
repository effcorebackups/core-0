<?php

  ##################################################################
  ### Copyright © 2017—2021 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class module extends module_embedded {

  public $group = 'Other';
  public $enabled = 'no';

  function disable() {
    core::boot_delete($this->id, 'enabled');
    message::insert(
      new text('Module "%%_title" (%%_id) was disabled.', ['title' => translation::apply($this->title), 'id' => $this->id])
    );
  }

  function uninstall() {
  # reverse the deployment process: delete files
    $copy = storage::get('files')->select('copy');
    if ( isset($copy[$this->id]) ) {
      foreach ($copy[$this->id] as $c_info) {
        $c_file = new file($c_info->to);
        if (@unlink($c_file->path_get()))
             message::insert(new text('File "%%_file" was deleted.',     ['file' => $c_file->path_get_relative()]));
        else message::insert(new text('File "%%_file" was not deleted!', ['file' => $c_file->path_get_relative()]), 'warning');
      }
    }
  # reverse the deployment process: delete instances
    foreach (instance::get_all_by_module($this->id) as $c_instance) {
      if ($c_instance->select())
          $c_instance->delete();
    }
  # reverse the deployment process: delete entities
    foreach (entity::get_all_by_module($this->id) as $c_entity) {
      if ($c_entity->uninstall())
           message::insert(new text('Entity "%%_entity" was uninstalled.',     ['entity' => $c_entity->name])         );
      else message::insert(new text('Entity "%%_entity" was not uninstalled!', ['entity' => $c_entity->name]), 'error');
    }
  # delete changes
    storage::get('files')->changes_delete_all($this->id);
  # delete from boot
    core::boot_delete($this->id, 'installed');
    message::insert(
      new text('Module data "%%_title" (%%_id) was removed.', ['title' => translation::apply($this->title), 'id' => $this->id])
    );
  }

}}
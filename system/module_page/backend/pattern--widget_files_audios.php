<?php

  ##################################################################
  ### Copyright © 2017—2021 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class widget_files_audios extends widget_files {

  public $title = 'Audios';
  public $item_title = 'Audio';
  public $attributes = ['data-type' => 'items-files-audios'];
  public $name_complex = 'widget_files_audios';
# ─────────────────────────────────────────────────────────────────────
  public $upload_dir = 'audios/';
  public $fixed_name = 'audio-multiple-%%_item_id_context';
  public $max_file_size = '10M';
  public $types_allowed = [
    'mp3' => 'mp3'];
  public $player_is_visible = true;
  public $player_controls = true;
  public $player_preload = 'metadata';
  public $player_name = 'default';
  public $player_timeline_is_visible = 'false';

  function widget_manage_get($item, $c_row_id) {
    $widget = parent::widget_manage_get($item, $c_row_id);
    $widget->attribute_insert('data-is-new', $item->object->get_current_state() === 'pre' ? 'true' : 'false');
    if ($this->player_is_visible) {
    # info markup
      $file = new file($item->object->get_current_path());
      $player_markup = new markup('audio', ['data-id' => $c_row_id, 'src' => '/'.$file->path_get_relative(),
        'controls'                        => $this->player_controls,
        'preload'                         => $this->player_preload,
        'data-player-name'                => $this->player_name,
        'data-player-timeline-is-visible' => $this->player_timeline_is_visible], [], +450);
      $id_markup = $item->object->get_current_state() === 'pre' ?
        new text_multiline(['new item', '…'], [], '') :
        new text($file->file_get());
      $info_markup = new markup('x-info',  [], [
          'title' => new markup('x-title', [], $item->object->file),
          'id'    => new markup('x-id',    [], $id_markup )]);
    # grouping of previous elements in widget 'manage'
      $widget->child_insert($player_markup, 'player');
      $widget->child_insert($info_markup, 'info');
    }
    return $widget;
  }

  function widget_insert_get() {
    $widget = new markup('x-widget', [
      'data-type' => 'insert']);
  # control for upload new file
    $field_file_audio = new field_file_audio;
    $field_file_audio->title = 'File';
    $field_file_audio->max_file_size    = $this->max_file_size;
    $field_file_audio->types_allowed    = $this->types_allowed;
    $field_file_audio->cform            = $this->cform;
    $field_file_audio->min_files_number = null;
    $field_file_audio->max_files_number = null;
    $field_file_audio->has_on_validate  = false;
    $field_file_audio->build();
    $field_file_audio->multiple_set();
    $field_file_audio->name_set($this->name_get_complex().'__file[]');
    $this->controls['#file'] = $field_file_audio;
  # button for insertion of the new item
    $button = new button(null, ['data-style' => 'narrow-insert', 'title' => new text('insert')]);
    $button->break_on_validate = true;
    $button->build();
    $button->value_set($this->name_get_complex().'__insert');
    $button->_type = 'insert';
    $this->controls['~insert'] = $button;
  # grouping of previous elements in widget 'insert'
    $widget->child_insert($field_file_audio, 'file');
    $widget->child_insert($button, 'button');
    return $widget;
  }

  ###########################
  ### static declarations ###
  ###########################

  static function complex_value_to_markup($complex) {  
    $decorator = new decorator;
    $decorator->id = 'widget_files-audios-items';
    $decorator->view_type = 'template';
    $decorator->template = 'content';
    $decorator->template_row = 'gallery_row';
    $decorator->template_row_mapping = core::array_kmap(['num', 'type', 'children']);
    if ($complex) {
      core::array_sort_by_weight($complex);
      foreach ($complex as $c_row_id => $c_item) {
        $c_file = new file($c_item->object->get_current_path());
        $c_item_type = 'audio';
        $c_item_markup = new markup('audio', ['data-id' => $c_row_id, 'src' => '/'.$c_file->path_get_relative(),
          'controls'                        => true,
          'preload'                         => 'metadata',
          'data-player-name'                => 'default',
          'data-player-timeline-is-visible' => 'true']);
        $decorator->data[$c_row_id] = [
          'type'     => ['value' => $c_item_type  ],
          'num'      => ['value' => $c_row_id     ],
          'children' => ['value' => $c_item_markup]
        ];
      }
    }
    return $decorator;
  }

}}
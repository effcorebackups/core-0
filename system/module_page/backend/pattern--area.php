<?php

  ##################################################################
  ### Copyright © 2017—2020 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore {
          class area extends markup {

  public $id;
  public $title;
  public $type; # null | table | row | column
  public $managing_is_on = false;

  function build() {
    if (!$this->is_builded) {
      if ($this->type) $this->attribute_insert('data-area-type', $this->type);
      if ($this->id  ) $this->attribute_insert('data-area-id',   $this->id  );
      if ($this->managing_is_on && $this->id)
        $this->child_insert(new markup('x-area-id', [], ['simple' => new text_simple($this->id)]), 'id');
      $this->is_builded = true;
    }
  }

  function render() {
    $this->build();
    return parent::render();
  }

}}
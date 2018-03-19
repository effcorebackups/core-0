<?php

  ##################################################################
  ### Copyright © 2017—2018 Maxim Rysevets. All rights reserved. ###
  ##################################################################

namespace effcore\modules\demo {
          use \effcore\markup;
          use \effcore\message;
          use \effcore\table;
          use \effcore\table_body_row;
          use \effcore\table_body_row_cell;
          abstract class events_page extends \effcore\events_page {

  static function on_show_block_demo_dynamic($page) {
    message::insert('Notice (default type) message #1.');
    message::insert('Notice message #2.');
    message::insert('Notice message #3.');
    message::insert('Ok message #1.', 'ok');
    message::insert('Ok message #2.', 'ok');
    message::insert('Ok message #3.', 'ok');
    message::insert('Warning message #1.', 'warning');
    message::insert('Warning message #2.', 'warning');
    message::insert('Warning message #3.', 'warning');
    message::insert('Error message #1.', 'error');
    message::insert('Error message #2.', 'error');
    message::insert('Error message #3.', 'error');
    $thead = [['th 1', 'th 2', 'th 3']];
    $tbody = [
      ['td 1.1', 'td 1.2',                                                    'td 1.3'],
      ['td 2.1', 'td 2.2',                        new table_body_row_cell([], 'td 2.3')],
      new table_body_row([], ['td 3.1', 'td 3.2', new table_body_row_cell([], 'td 3.3')])
    ];
    return new markup('x-block', ['id' => 'demo_dynamic'], [
      new markup('h2', [], 'Dynamic block'),
      new table(['class' => ['table' => 'table']], $tbody, $thead)
    ]);
  }

}}
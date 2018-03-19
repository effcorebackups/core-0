<?php

namespace effcore { # cache for data--blocks

  cache::$data['data--blocks']['demo']['demo'] = new \effcore\markup();
  cache::$data['data--blocks']['demo']['demo']->tag_name = 'x-block';
  cache::$data['data--blocks']['demo']['demo']->children['block_title'] = new \effcore\markup();
  cache::$data['data--blocks']['demo']['demo']->children['block_title']->tag_name = 'h2';
  cache::$data['data--blocks']['demo']['demo']->children['block_title']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['block_title']->children['content']->text = 'Static block';
  cache::$data['data--blocks']['demo']['demo']->children['demo_paragraph_title'] = new \effcore\markup();
  cache::$data['data--blocks']['demo']['demo']->children['demo_paragraph_title']->tag_name = 'h3';
  cache::$data['data--blocks']['demo']['demo']->children['demo_paragraph_title']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['demo_paragraph_title']->children['content']->text = 'Paragraph [h3]';
  cache::$data['data--blocks']['demo']['demo']->children['demo_paragraph'] = new \effcore\markup();
  cache::$data['data--blocks']['demo']['demo']->children['demo_paragraph']->tag_name = 'p';
  cache::$data['data--blocks']['demo']['demo']->children['demo_paragraph']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['demo_paragraph']->children['content']->text = 'Paragraph content. Paragraph content. Paragraph content. Paragraph content.                 Paragraph content. Paragraph content. Paragraph content. Paragraph content.                 Paragraph content. Paragraph content. Paragraph content. Paragraph content.                 Paragraph content. Paragraph content. Paragraph content. Paragraph content.';
  cache::$data['data--blocks']['demo']['demo']->children['demo_table_title'] = new \effcore\markup();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table_title']->tag_name = 'h3';
  cache::$data['data--blocks']['demo']['demo']->children['demo_table_title']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table_title']->children['content']->text = 'Table';
  cache::$data['data--blocks']['demo']['demo']->children['demo_table'] = new \effcore\table();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['head'] = new \effcore\table_head();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['head']->children['tr'] = new \effcore\table_head_row();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['head']->children['tr']->children['th_1'] = new \effcore\table_head_row_cell();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['head']->children['tr']->children['th_1']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['head']->children['tr']->children['th_1']->children['content']->text = 'head cell 1';
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['head']->children['tr']->children['th_2'] = new \effcore\table_head_row_cell();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['head']->children['tr']->children['th_2']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['head']->children['tr']->children['th_2']->children['content']->text = 'head cell 2';
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['head']->children['tr']->children['th_3'] = new \effcore\table_head_row_cell();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['head']->children['tr']->children['th_3']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['head']->children['tr']->children['th_3']->children['content']->text = 'head cell 3';
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body'] = new \effcore\table_body();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_1'] = new \effcore\table_body_row();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_1']->children['td_1'] = new \effcore\table_body_row_cell();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_1']->children['td_1']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_1']->children['td_1']->children['content']->text = 'cell 1.1';
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_1']->children['td_2'] = new \effcore\table_body_row_cell();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_1']->children['td_2']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_1']->children['td_2']->children['content']->text = 'cell 1.2';
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_1']->children['td_3'] = new \effcore\table_body_row_cell();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_1']->children['td_3']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_1']->children['td_3']->children['content']->text = 'cell 1.3';
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_2'] = new \effcore\table_body_row();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_2']->children['td_1'] = new \effcore\table_body_row_cell();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_2']->children['td_1']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_2']->children['td_1']->children['content']->text = 'cell 2.1';
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_2']->children['td_2'] = new \effcore\table_body_row_cell();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_2']->children['td_2']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_2']->children['td_2']->children['content']->text = 'cell 2.2';
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_2']->children['td_3'] = new \effcore\table_body_row_cell();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_2']->children['td_3']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_2']->children['td_3']->children['content']->text = 'cell 2.3';
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_3'] = new \effcore\table_body_row();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_3']->children['td_1'] = new \effcore\table_body_row_cell();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_3']->children['td_1']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_3']->children['td_1']->children['content']->text = 'cell 3.1';
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_3']->children['td_2'] = new \effcore\table_body_row_cell();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_3']->children['td_2']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_3']->children['td_2']->children['content']->text = 'cell 3.2';
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_3']->children['td_3'] = new \effcore\table_body_row_cell();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_3']->children['td_3']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_3']->children['td_3']->children['content']->text = 'cell 3.3';
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_4'] = new \effcore\table_body_row();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_4']->children['td_1'] = new \effcore\table_body_row_cell();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_4']->children['td_1']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['demo_table']->children['body']->children['tr_4']->children['td_1']->attributes['colspan'] = 3;
  cache::$data['data--blocks']['demo']['demo']->children['demo_pager_1'] = new \effcore\pager();
  cache::$data['data--blocks']['demo']['demo']->children['demo_pager_1']->id = 1;
  cache::$data['data--blocks']['demo']['demo']->children['controls_title'] = new \effcore\markup();
  cache::$data['data--blocks']['demo']['demo']->children['controls_title']->tag_name = 'h2';
  cache::$data['data--blocks']['demo']['demo']->children['controls_title']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['controls_title']->children['content']->text = 'Control elements';
  cache::$data['data--blocks']['demo']['demo']->children['table_for_controls'] = new \effcore\table();
  cache::$data['data--blocks']['demo']['demo']->children['table_for_controls']->children['head'] = new \effcore\table_head();
  cache::$data['data--blocks']['demo']['demo']->children['table_for_controls']->children['head']->children['tr'] = new \effcore\table_head_row();
  cache::$data['data--blocks']['demo']['demo']->children['table_for_controls']->children['head']->children['tr']->children['th_1'] = new \effcore\table_head_row_cell();
  cache::$data['data--blocks']['demo']['demo']->children['table_for_controls']->children['head']->children['tr']->children['th_1']->children['content'] = new \effcore\text();
  cache::$data['data--blocks']['demo']['demo']->children['table_for_controls']->children['head']->children['tr']->children['th_1']->children['content']->text = 'Elements';
  cache::$data['data--blocks']['demo']['demo']->children['table_for_controls']->children['body'] = new \effcore\table_body();
  cache::$data['data--blocks']['demo']['demo']->children['table_for_controls']->children['body']->children['tr_1'] = new \effcore\table_body_row();
  cache::$data['data--blocks']['demo']['demo']->children['table_for_controls']->children['body']->children['tr_1']->children['td_1'] = new \effcore\table_body_row_cell();
  cache::$data['data--blocks']['demo']['demo']->children['table_for_controls']->children['body']->children['tr_1']->children['td_1']->children['demo_actions_list_wrapper'] = new \effcore\markup();
  cache::$data['data--blocks']['demo']['demo']->children['table_for_controls']->children['body']->children['tr_1']->children['td_1']->children['demo_actions_list_wrapper']->children['demo_actions_list'] = new \effcore\control_actions_list();
  cache::$data['data--blocks']['demo']['demo']->children['table_for_controls']->children['body']->children['tr_1']->children['td_1']->children['demo_actions_list_wrapper']->children['demo_actions_list']->title = 'actions';
  cache::$data['data--blocks']['demo']['demo']->children['table_for_controls']->children['body']->children['tr_1']->children['td_1']->children['demo_actions_list_wrapper']->children['demo_actions_list']->actions['edit'] = 'edit';
  cache::$data['data--blocks']['demo']['demo']->children['table_for_controls']->children['body']->children['tr_1']->children['td_1']->children['demo_actions_list_wrapper']->children['demo_actions_list']->actions['delete'] = 'delete';
  cache::$data['data--blocks']['demo']['demo']->children['table_for_controls']->children['body']->children['tr_1']->children['td_1']->children['demo_actions_list_wrapper']->children['demo_actions_list']->active['edit'] = 'edit';
  cache::$data['data--blocks']['demo']['demo']->children['table_for_controls']->children['body']->children['tr_1']->children['td_1']->children['demo_actions_list_wrapper']->children['demo_actions_list']->attributes['class']['demo-actions-list'] = 'demo-actions-list';
  cache::$data['data--blocks']['demo']['demo']->attributes['id'] = 'demo';
  cache::$data['data--blocks']['page']['logo'] = new \effcore\markup();
  cache::$data['data--blocks']['page']['logo']->tag_name = 'x-block';
  cache::$data['data--blocks']['page']['logo']->children['link'] = new \effcore\markup();
  cache::$data['data--blocks']['page']['logo']->children['link']->tag_name = 'a';
  cache::$data['data--blocks']['page']['logo']->children['link']->attributes['id'] = 'to_front';
  cache::$data['data--blocks']['page']['logo']->children['link']->attributes['href'] = '/';
  cache::$data['data--blocks']['page']['logo']->children['link']->attributes['title'] = new \effcore\text();
  cache::$data['data--blocks']['page']['logo']->children['link']->attributes['title']->text = 'to front page';
  cache::$data['data--blocks']['page']['logo']->attributes['id'] = 'logo';

}
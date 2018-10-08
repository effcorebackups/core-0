<?php

namespace effcore { # cache for data--tokens

  cache::$data['data--tokens']['user']['email'] = new \stdClass();
  cache::$data['data--tokens']['user']['email']->match = '%%_email';
  cache::$data['data--tokens']['user']['email']->type = 'code';
  cache::$data['data--tokens']['user']['email']->handler = '\\effcore\\modules\\user\\events_token::on_replace';
  cache::$data['data--tokens']['user']['nick'] = new \stdClass();
  cache::$data['data--tokens']['user']['nick']->match = '%%_nick';
  cache::$data['data--tokens']['user']['nick']->type = 'code';
  cache::$data['data--tokens']['user']['nick']->handler = '\\effcore\\modules\\user\\events_token::on_replace';
  cache::$data['data--tokens']['user']['email_context'] = new \stdClass();
  cache::$data['data--tokens']['user']['email_context']->match = '%%_email_context';
  cache::$data['data--tokens']['user']['email_context']->type = 'code';
  cache::$data['data--tokens']['user']['email_context']->handler = '\\effcore\\modules\\user\\events_token::on_replace';
  cache::$data['data--tokens']['user']['nick_context'] = new \stdClass();
  cache::$data['data--tokens']['user']['nick_context']->match = '%%_nick_context';
  cache::$data['data--tokens']['user']['nick_context']->type = 'code';
  cache::$data['data--tokens']['user']['nick_context']->handler = '\\effcore\\modules\\user\\events_token::on_replace';
  cache::$data['data--tokens']['page']['color'] = new \stdClass();
  cache::$data['data--tokens']['page']['color']->match = '%%_color';
  cache::$data['data--tokens']['page']['color']->type = 'code';
  cache::$data['data--tokens']['page']['color']->handler = '\\effcore\\modules\\page\\events_token::on_color_get';
  cache::$data['data--tokens']['page']['color_bg'] = new \stdClass();
  cache::$data['data--tokens']['page']['color_bg']->match = '%%_color_bg';
  cache::$data['data--tokens']['page']['color_bg']->type = 'code';
  cache::$data['data--tokens']['page']['color_bg']->handler = '\\effcore\\modules\\page\\events_token::on_color_get';
  cache::$data['data--tokens']['page']['color_hover'] = new \stdClass();
  cache::$data['data--tokens']['page']['color_hover']->match = '%%_color_hover';
  cache::$data['data--tokens']['page']['color_hover']->type = 'text';
  cache::$data['data--tokens']['page']['color_hover']->value = '#81a5eb';
  cache::$data['data--tokens']['page']['color_hover_bg'] = new \stdClass();
  cache::$data['data--tokens']['page']['color_hover_bg']->match = '%%_color_hover_bg';
  cache::$data['data--tokens']['page']['color_hover_bg']->type = 'text';
  cache::$data['data--tokens']['page']['color_hover_bg']->value = '#28334a';
  cache::$data['data--tokens']['page']['color_border'] = new \stdClass();
  cache::$data['data--tokens']['page']['color_border']->match = '%%_color_border';
  cache::$data['data--tokens']['page']['color_border']->type = 'text';
  cache::$data['data--tokens']['page']['color_border']->value = 'gainsboro';
  cache::$data['data--tokens']['page']['color_table_noitems'] = new \stdClass();
  cache::$data['data--tokens']['page']['color_table_noitems']->match = '%%_color_table_noitems';
  cache::$data['data--tokens']['page']['color_table_noitems']->type = 'text';
  cache::$data['data--tokens']['page']['color_table_noitems']->value = 'gainsboro';
  cache::$data['data--tokens']['page']['color_table_even_bg'] = new \stdClass();
  cache::$data['data--tokens']['page']['color_table_even_bg']->match = '%%_color_table_even_bg';
  cache::$data['data--tokens']['page']['color_table_even_bg']->type = 'text';
  cache::$data['data--tokens']['page']['color_table_even_bg']->value = 'whitesmoke';
  cache::$data['data--tokens']['page']['color_ok'] = new \stdClass();
  cache::$data['data--tokens']['page']['color_ok']->match = '%%_color_ok';
  cache::$data['data--tokens']['page']['color_ok']->type = 'text';
  cache::$data['data--tokens']['page']['color_ok']->value = '#30c432';
  cache::$data['data--tokens']['page']['color_error'] = new \stdClass();
  cache::$data['data--tokens']['page']['color_error']->match = '%%_color_error';
  cache::$data['data--tokens']['page']['color_error']->type = 'text';
  cache::$data['data--tokens']['page']['color_error']->value = '#fc5740';
  cache::$data['data--tokens']['page']['color_warning'] = new \stdClass();
  cache::$data['data--tokens']['page']['color_warning']->match = '%%_color_warning';
  cache::$data['data--tokens']['page']['color_warning']->type = 'text';
  cache::$data['data--tokens']['page']['color_warning']->value = '#fd9a1e';
  cache::$data['data--tokens']['core']['text_no_items'] = new \stdClass();
  cache::$data['data--tokens']['core']['text_no_items']->match = '%%_text_no_items';
  cache::$data['data--tokens']['core']['text_no_items']->type = 'translated_text';
  cache::$data['data--tokens']['core']['text_no_items']->value = 'no items';

}
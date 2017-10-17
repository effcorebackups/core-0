<?php

namespace effectivecore { # cache for settings--tokens

  cache_factory::$data['settings--tokens']['core']['text_no_items'] = new \stdClass();
  cache_factory::$data['settings--tokens']['core']['text_no_items']->match = '%%_text_no_items';
  cache_factory::$data['settings--tokens']['core']['text_no_items']->type = 'translated_text';
  cache_factory::$data['settings--tokens']['core']['text_no_items']->value = 'no items';
  cache_factory::$data['settings--tokens']['page']['color'] = new \stdClass();
  cache_factory::$data['settings--tokens']['page']['color']->match = '%%_color';
  cache_factory::$data['settings--tokens']['page']['color']->type = 'code';
  cache_factory::$data['settings--tokens']['page']['color']->handler = '\\effectivecore\\modules\\page\\events_token::on_color_get';
  cache_factory::$data['settings--tokens']['page']['color_bg'] = new \stdClass();
  cache_factory::$data['settings--tokens']['page']['color_bg']->match = '%%_color_bg';
  cache_factory::$data['settings--tokens']['page']['color_bg']->type = 'code';
  cache_factory::$data['settings--tokens']['page']['color_bg']->handler = '\\effectivecore\\modules\\page\\events_token::on_color_get';
  cache_factory::$data['settings--tokens']['page']['color_hover'] = new \stdClass();
  cache_factory::$data['settings--tokens']['page']['color_hover']->match = '%%_color_hover';
  cache_factory::$data['settings--tokens']['page']['color_hover']->type = 'text';
  cache_factory::$data['settings--tokens']['page']['color_hover']->value = '#81a5eb';
  cache_factory::$data['settings--tokens']['page']['color_hover_bg'] = new \stdClass();
  cache_factory::$data['settings--tokens']['page']['color_hover_bg']->match = '%%_color_hover_bg';
  cache_factory::$data['settings--tokens']['page']['color_hover_bg']->type = 'text';
  cache_factory::$data['settings--tokens']['page']['color_hover_bg']->value = '#28334a';
  cache_factory::$data['settings--tokens']['page']['color_border'] = new \stdClass();
  cache_factory::$data['settings--tokens']['page']['color_border']->match = '%%_color_border';
  cache_factory::$data['settings--tokens']['page']['color_border']->type = 'text';
  cache_factory::$data['settings--tokens']['page']['color_border']->value = 'gainsboro';
  cache_factory::$data['settings--tokens']['page']['color_table_noitems'] = new \stdClass();
  cache_factory::$data['settings--tokens']['page']['color_table_noitems']->match = '%%_color_table_noitems';
  cache_factory::$data['settings--tokens']['page']['color_table_noitems']->type = 'text';
  cache_factory::$data['settings--tokens']['page']['color_table_noitems']->value = 'gainsboro';
  cache_factory::$data['settings--tokens']['page']['color_table_even_bg'] = new \stdClass();
  cache_factory::$data['settings--tokens']['page']['color_table_even_bg']->match = '%%_color_table_even_bg';
  cache_factory::$data['settings--tokens']['page']['color_table_even_bg']->type = 'text';
  cache_factory::$data['settings--tokens']['page']['color_table_even_bg']->value = 'whitesmoke';
  cache_factory::$data['settings--tokens']['page']['color_ok'] = new \stdClass();
  cache_factory::$data['settings--tokens']['page']['color_ok']->match = '%%_color_ok';
  cache_factory::$data['settings--tokens']['page']['color_ok']->type = 'text';
  cache_factory::$data['settings--tokens']['page']['color_ok']->value = 'limegreen';
  cache_factory::$data['settings--tokens']['page']['color_error'] = new \stdClass();
  cache_factory::$data['settings--tokens']['page']['color_error']->match = '%%_color_error';
  cache_factory::$data['settings--tokens']['page']['color_error']->type = 'text';
  cache_factory::$data['settings--tokens']['page']['color_error']->value = 'tomato';
  cache_factory::$data['settings--tokens']['page']['color_warning'] = new \stdClass();
  cache_factory::$data['settings--tokens']['page']['color_warning']->match = '%%_color_warning';
  cache_factory::$data['settings--tokens']['page']['color_warning']->type = 'text';
  cache_factory::$data['settings--tokens']['page']['color_warning']->value = 'orange';
  cache_factory::$data['settings--tokens']['user']['user_id'] = new \stdClass();
  cache_factory::$data['settings--tokens']['user']['user_id']->match = '%%_user_id';
  cache_factory::$data['settings--tokens']['user']['user_id']->type = 'code';
  cache_factory::$data['settings--tokens']['user']['user_id']->handler = '\\effectivecore\\modules\\user\\events_token::on_replace';
  cache_factory::$data['settings--tokens']['user']['user_email'] = new \stdClass();
  cache_factory::$data['settings--tokens']['user']['user_email']->match = '%%_user_email';
  cache_factory::$data['settings--tokens']['user']['user_email']->type = 'code';
  cache_factory::$data['settings--tokens']['user']['user_email']->handler = '\\effectivecore\\modules\\user\\events_token::on_replace';
  cache_factory::$data['settings--tokens']['user']['nick'] = new \stdClass();
  cache_factory::$data['settings--tokens']['user']['nick']->match = '%%_nick';
  cache_factory::$data['settings--tokens']['user']['nick']->type = 'code';
  cache_factory::$data['settings--tokens']['user']['nick']->handler = '\\effectivecore\\modules\\user\\events_token::on_replace';
  cache_factory::$data['settings--tokens']['user']['user_id_context'] = new \stdClass();
  cache_factory::$data['settings--tokens']['user']['user_id_context']->match = '%%_user_id_context';
  cache_factory::$data['settings--tokens']['user']['user_id_context']->type = 'code';
  cache_factory::$data['settings--tokens']['user']['user_id_context']->handler = '\\effectivecore\\modules\\user\\events_token::on_replace';
  cache_factory::$data['settings--tokens']['user']['user_email_context'] = new \stdClass();
  cache_factory::$data['settings--tokens']['user']['user_email_context']->match = '%%_user_email_context';
  cache_factory::$data['settings--tokens']['user']['user_email_context']->type = 'code';
  cache_factory::$data['settings--tokens']['user']['user_email_context']->handler = '\\effectivecore\\modules\\user\\events_token::on_replace';
  cache_factory::$data['settings--tokens']['user']['nick_context'] = new \stdClass();
  cache_factory::$data['settings--tokens']['user']['nick_context']->match = '%%_nick_context';
  cache_factory::$data['settings--tokens']['user']['nick_context']->type = 'code';
  cache_factory::$data['settings--tokens']['user']['nick_context']->handler = '\\effectivecore\\modules\\user\\events_token::on_replace';

}
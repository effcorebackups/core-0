<?php

namespace effectivecore { # cache for settings--tokens

  caches_factory::$data['settings--tokens']['core']['text_no_items'] = new \stdClass();
  caches_factory::$data['settings--tokens']['core']['text_no_items']->match = '%%_text_no_items';
  caches_factory::$data['settings--tokens']['core']['text_no_items']->type = 'translated_text';
  caches_factory::$data['settings--tokens']['core']['text_no_items']->value = 'no items';
  caches_factory::$data['settings--tokens']['page']['color'] = new \stdClass();
  caches_factory::$data['settings--tokens']['page']['color']->match = '%%_color';
  caches_factory::$data['settings--tokens']['page']['color']->type = 'code';
  caches_factory::$data['settings--tokens']['page']['color']->handler = '\\effectivecore\\modules\\page\\events_token::on_color_get';
  caches_factory::$data['settings--tokens']['page']['color_bg'] = new \stdClass();
  caches_factory::$data['settings--tokens']['page']['color_bg']->match = '%%_color_bg';
  caches_factory::$data['settings--tokens']['page']['color_bg']->type = 'code';
  caches_factory::$data['settings--tokens']['page']['color_bg']->handler = '\\effectivecore\\modules\\page\\events_token::on_color_get';
  caches_factory::$data['settings--tokens']['page']['color_hover'] = new \stdClass();
  caches_factory::$data['settings--tokens']['page']['color_hover']->match = '%%_color_hover';
  caches_factory::$data['settings--tokens']['page']['color_hover']->type = 'text';
  caches_factory::$data['settings--tokens']['page']['color_hover']->value = '#81a5eb';
  caches_factory::$data['settings--tokens']['page']['color_hover_bg'] = new \stdClass();
  caches_factory::$data['settings--tokens']['page']['color_hover_bg']->match = '%%_color_hover_bg';
  caches_factory::$data['settings--tokens']['page']['color_hover_bg']->type = 'text';
  caches_factory::$data['settings--tokens']['page']['color_hover_bg']->value = '#28334a';
  caches_factory::$data['settings--tokens']['page']['color_border'] = new \stdClass();
  caches_factory::$data['settings--tokens']['page']['color_border']->match = '%%_color_border';
  caches_factory::$data['settings--tokens']['page']['color_border']->type = 'text';
  caches_factory::$data['settings--tokens']['page']['color_border']->value = 'gainsboro';
  caches_factory::$data['settings--tokens']['page']['color_table_noitems'] = new \stdClass();
  caches_factory::$data['settings--tokens']['page']['color_table_noitems']->match = '%%_color_table_noitems';
  caches_factory::$data['settings--tokens']['page']['color_table_noitems']->type = 'text';
  caches_factory::$data['settings--tokens']['page']['color_table_noitems']->value = 'gainsboro';
  caches_factory::$data['settings--tokens']['page']['color_table_even_bg'] = new \stdClass();
  caches_factory::$data['settings--tokens']['page']['color_table_even_bg']->match = '%%_color_table_even_bg';
  caches_factory::$data['settings--tokens']['page']['color_table_even_bg']->type = 'text';
  caches_factory::$data['settings--tokens']['page']['color_table_even_bg']->value = 'whitesmoke';
  caches_factory::$data['settings--tokens']['page']['color_ok'] = new \stdClass();
  caches_factory::$data['settings--tokens']['page']['color_ok']->match = '%%_color_ok';
  caches_factory::$data['settings--tokens']['page']['color_ok']->type = 'text';
  caches_factory::$data['settings--tokens']['page']['color_ok']->value = 'limegreen';
  caches_factory::$data['settings--tokens']['page']['color_error'] = new \stdClass();
  caches_factory::$data['settings--tokens']['page']['color_error']->match = '%%_color_error';
  caches_factory::$data['settings--tokens']['page']['color_error']->type = 'text';
  caches_factory::$data['settings--tokens']['page']['color_error']->value = 'tomato';
  caches_factory::$data['settings--tokens']['page']['color_warning'] = new \stdClass();
  caches_factory::$data['settings--tokens']['page']['color_warning']->match = '%%_color_warning';
  caches_factory::$data['settings--tokens']['page']['color_warning']->type = 'text';
  caches_factory::$data['settings--tokens']['page']['color_warning']->value = 'orange';
  caches_factory::$data['settings--tokens']['user']['user_id'] = new \stdClass();
  caches_factory::$data['settings--tokens']['user']['user_id']->match = '%%_user_id';
  caches_factory::$data['settings--tokens']['user']['user_id']->type = 'code';
  caches_factory::$data['settings--tokens']['user']['user_id']->handler = '\\effectivecore\\modules\\user\\events_token::on_replace';
  caches_factory::$data['settings--tokens']['user']['user_email'] = new \stdClass();
  caches_factory::$data['settings--tokens']['user']['user_email']->match = '%%_user_email';
  caches_factory::$data['settings--tokens']['user']['user_email']->type = 'code';
  caches_factory::$data['settings--tokens']['user']['user_email']->handler = '\\effectivecore\\modules\\user\\events_token::on_replace';
  caches_factory::$data['settings--tokens']['user']['user_email_name'] = new \stdClass();
  caches_factory::$data['settings--tokens']['user']['user_email_name']->match = '%%_user_email_name';
  caches_factory::$data['settings--tokens']['user']['user_email_name']->type = 'code';
  caches_factory::$data['settings--tokens']['user']['user_email_name']->handler = '\\effectivecore\\modules\\user\\events_token::on_replace';
  caches_factory::$data['settings--tokens']['user']['user_id_context'] = new \stdClass();
  caches_factory::$data['settings--tokens']['user']['user_id_context']->match = '%%_user_id_context';
  caches_factory::$data['settings--tokens']['user']['user_id_context']->type = 'code';
  caches_factory::$data['settings--tokens']['user']['user_id_context']->handler = '\\effectivecore\\modules\\user\\events_token::on_replace';
  caches_factory::$data['settings--tokens']['user']['user_email_context'] = new \stdClass();
  caches_factory::$data['settings--tokens']['user']['user_email_context']->match = '%%_user_email_context';
  caches_factory::$data['settings--tokens']['user']['user_email_context']->type = 'code';
  caches_factory::$data['settings--tokens']['user']['user_email_context']->handler = '\\effectivecore\\modules\\user\\events_token::on_replace';
  caches_factory::$data['settings--tokens']['user']['user_email_name_context'] = new \stdClass();
  caches_factory::$data['settings--tokens']['user']['user_email_name_context']->match = '%%_user_email_name_context';
  caches_factory::$data['settings--tokens']['user']['user_email_name_context']->type = 'code';
  caches_factory::$data['settings--tokens']['user']['user_email_name_context']->handler = '\\effectivecore\\modules\\user\\events_token::on_replace';

}
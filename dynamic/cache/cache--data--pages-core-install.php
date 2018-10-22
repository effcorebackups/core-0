<?php

namespace effcore { # cache for data--pages-core-install

  cache::$data['data--pages-core-install'] = new \effcore\page();
  cache::$data['data--pages-core-install']->title = 'Installation';
  cache::$data['data--pages-core-install']->https = true;
  cache::$data['data--pages-core-install']->display = new \stdClass();
  cache::$data['data--pages-core-install']->display->check = 'url';
  cache::$data['data--pages-core-install']->display->where = 'path';
  cache::$data['data--pages-core-install']->display->match = '%^(?<base>/install)(/(?<lang_code>[a-z]{2,2})|)$%';
  cache::$data['data--pages-core-install']->access = new \stdClass();
  cache::$data['data--pages-core-install']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--pages-core-install']->children['language_switcher'] = new \effcore\page_part();
  cache::$data['data--pages-core-install']->children['language_switcher']->region = 'head';
  cache::$data['data--pages-core-install']->children['language_switcher']->type = 'code';
  cache::$data['data--pages-core-install']->children['language_switcher']->source = '\\effcore\\modules\\core\\events_page::on_switch_language';
  cache::$data['data--pages-core-install']->children['menu_languages'] = new \effcore\page_part();
  cache::$data['data--pages-core-install']->children['menu_languages']->region = 'head';
  cache::$data['data--pages-core-install']->children['menu_languages']->type = 'code';
  cache::$data['data--pages-core-install']->children['menu_languages']->source = '\\effcore\\modules\\locales\\events_page::on_show_block_menu_languages';
  cache::$data['data--pages-core-install']->children['title'] = new \effcore\page_part();
  cache::$data['data--pages-core-install']->children['title']->region = 'title';
  cache::$data['data--pages-core-install']->children['title']->type = 'code';
  cache::$data['data--pages-core-install']->children['title']->source = '\\effcore\\modules\\page\\events_page::on_show_title';
  cache::$data['data--pages-core-install']->children['form_install'] = new \effcore\page_part();
  cache::$data['data--pages-core-install']->children['form_install']->type = 'link';
  cache::$data['data--pages-core-install']->children['form_install']->source = 'forms/core/install';
  cache::$data['data--pages-core-install']->children['form_access'] = new \effcore\page_part();
  cache::$data['data--pages-core-install']->children['form_access']->display = new \stdClass();
  cache::$data['data--pages-core-install']->children['form_access']->display->check = 'user';
  cache::$data['data--pages-core-install']->children['form_access']->display->where = 'role';
  cache::$data['data--pages-core-install']->children['form_access']->display->match = '%^admins$%';
  cache::$data['data--pages-core-install']->children['form_access']->type = 'link';
  cache::$data['data--pages-core-install']->children['form_access']->source = 'forms/user/access';
  cache::$data['data--pages-core-install']->children['form_access']->source_args['entity_name'] = 'page';

}
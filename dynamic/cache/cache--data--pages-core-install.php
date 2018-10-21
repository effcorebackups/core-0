<?php

namespace effcore { # cache for data--pages-core-install

  cache::$data['data--pages-core-install'] = new \effcore\page();
  cache::$data['data--pages-core-install']->title = 'Installation';
  cache::$data['data--pages-core-install']->https = true;
  cache::$data['data--pages-core-install']->display = new \stdClass();
  cache::$data['data--pages-core-install']->display->check = 'url';
  cache::$data['data--pages-core-install']->display->where = 'path';
  cache::$data['data--pages-core-install']->display->match = '%^(?<base>/install)(/(?<code>[a-z]{2,2})|)$%';
  cache::$data['data--pages-core-install']->access = new \stdClass();
  cache::$data['data--pages-core-install']->access->roles['anonymous'] = 'anonymous';
  cache::$data['data--pages-core-install']->children['init_languages'] = new \effcore\page_part();
  cache::$data['data--pages-core-install']->children['init_languages']->type = 'code';
  cache::$data['data--pages-core-install']->children['init_languages']->source = '\\effcore\\modules\\core\\events_page_install::on_init_languages';
  cache::$data['data--pages-core-install']->children['tabs_languages'] = new \effcore\page_part();
  cache::$data['data--pages-core-install']->children['tabs_languages']->region = 'tabs';
  cache::$data['data--pages-core-install']->children['tabs_languages']->type = 'link';
  cache::$data['data--pages-core-install']->children['tabs_languages']->source = 'tabs/locales/languages';
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
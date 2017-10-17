<?php

namespace effectivecore { # cache for settings--pages

  cache_factory::$data['settings--pages']['core']['front'] = new \effectivecore\page();
  cache_factory::$data['settings--pages']['core']['front']->title = 'Front page';
  cache_factory::$data['settings--pages']['core']['front']->content['block_tree_main'] = new \stdClass();
  cache_factory::$data['settings--pages']['core']['front']->content['block_tree_main']->region = 'nav';
  cache_factory::$data['settings--pages']['core']['front']->content['block_tree_main']->type = 'link';
  cache_factory::$data['settings--pages']['core']['front']->content['block_tree_main']->npath = 'trees/core/main';
  cache_factory::$data['settings--pages']['core']['front']->content['block_tree_user'] = new \stdClass();
  cache_factory::$data['settings--pages']['core']['front']->content['block_tree_user']->region = 'nav';
  cache_factory::$data['settings--pages']['core']['front']->content['block_tree_user']->type = 'link';
  cache_factory::$data['settings--pages']['core']['front']->content['block_tree_user']->npath = 'trees/user/user';
  cache_factory::$data['settings--pages']['core']['front']->content['block_wellcome'] = new \stdClass();
  cache_factory::$data['settings--pages']['core']['front']->content['block_wellcome']->region = 'content_1_1';
  cache_factory::$data['settings--pages']['core']['front']->content['block_wellcome']->type = 'text';
  cache_factory::$data['settings--pages']['core']['front']->content['block_wellcome']->content = 'Wellcome to our site!';
  cache_factory::$data['settings--pages']['core']['front']->display = new \stdClass();
  cache_factory::$data['settings--pages']['core']['front']->display->url = new \stdClass();
  cache_factory::$data['settings--pages']['core']['front']->display->url->match = '%^/$%';
  cache_factory::$data['settings--pages']['core']['installation'] = new \effectivecore\page();
  cache_factory::$data['settings--pages']['core']['installation']->title = 'Installation';
  cache_factory::$data['settings--pages']['core']['installation']->access = new \stdClass();
  cache_factory::$data['settings--pages']['core']['installation']->access->roles['anonymous'] = 'anonymous';
  cache_factory::$data['settings--pages']['core']['installation']->content['block_tree_main'] = new \stdClass();
  cache_factory::$data['settings--pages']['core']['installation']->content['block_tree_main']->region = 'nav';
  cache_factory::$data['settings--pages']['core']['installation']->content['block_tree_main']->type = 'link';
  cache_factory::$data['settings--pages']['core']['installation']->content['block_tree_main']->npath = 'trees/core/main';
  cache_factory::$data['settings--pages']['core']['installation']->content['block_tree_user'] = new \stdClass();
  cache_factory::$data['settings--pages']['core']['installation']->content['block_tree_user']->region = 'nav';
  cache_factory::$data['settings--pages']['core']['installation']->content['block_tree_user']->type = 'link';
  cache_factory::$data['settings--pages']['core']['installation']->content['block_tree_user']->npath = 'trees/user/user';
  cache_factory::$data['settings--pages']['core']['installation']->content['form_installation'] = new \stdClass();
  cache_factory::$data['settings--pages']['core']['installation']->content['form_installation']->region = 'content_1_1';
  cache_factory::$data['settings--pages']['core']['installation']->content['form_installation']->type = 'link';
  cache_factory::$data['settings--pages']['core']['installation']->content['form_installation']->npath = 'forms/core/installation';
  cache_factory::$data['settings--pages']['core']['installation']->display = new \stdClass();
  cache_factory::$data['settings--pages']['core']['installation']->display->url = new \stdClass();
  cache_factory::$data['settings--pages']['core']['installation']->display->url->match = '%^/install$%';
  cache_factory::$data['settings--pages']['core']['modules'] = new \effectivecore\page();
  cache_factory::$data['settings--pages']['core']['modules']->title = 'Modules';
  cache_factory::$data['settings--pages']['core']['modules']->access = new \stdClass();
  cache_factory::$data['settings--pages']['core']['modules']->access->roles['admins'] = 'admins';
  cache_factory::$data['settings--pages']['core']['modules']->content['block_tree_main'] = new \stdClass();
  cache_factory::$data['settings--pages']['core']['modules']->content['block_tree_main']->region = 'nav';
  cache_factory::$data['settings--pages']['core']['modules']->content['block_tree_main']->type = 'link';
  cache_factory::$data['settings--pages']['core']['modules']->content['block_tree_main']->npath = 'trees/core/main';
  cache_factory::$data['settings--pages']['core']['modules']->content['block_tree_user'] = new \stdClass();
  cache_factory::$data['settings--pages']['core']['modules']->content['block_tree_user']->region = 'nav';
  cache_factory::$data['settings--pages']['core']['modules']->content['block_tree_user']->type = 'link';
  cache_factory::$data['settings--pages']['core']['modules']->content['block_tree_user']->npath = 'trees/user/user';
  cache_factory::$data['settings--pages']['core']['modules']->content['block_admin_modules'] = new \stdClass();
  cache_factory::$data['settings--pages']['core']['modules']->content['block_admin_modules']->region = 'content_1_1';
  cache_factory::$data['settings--pages']['core']['modules']->content['block_admin_modules']->type = 'code';
  cache_factory::$data['settings--pages']['core']['modules']->content['block_admin_modules']->handler = '\\effectivecore\\events_page::on_show_admin_modules';
  cache_factory::$data['settings--pages']['core']['modules']->display = new \stdClass();
  cache_factory::$data['settings--pages']['core']['modules']->display->url = new \stdClass();
  cache_factory::$data['settings--pages']['core']['modules']->display->url->match = '%^/admin/modules$%';
  cache_factory::$data['settings--pages']['develop']['demo'] = new \effectivecore\page();
  cache_factory::$data['settings--pages']['develop']['demo']->title = 'Demo';
  cache_factory::$data['settings--pages']['develop']['demo']->access = new \stdClass();
  cache_factory::$data['settings--pages']['develop']['demo']->access->roles['admins'] = 'admins';
  cache_factory::$data['settings--pages']['develop']['demo']->content['block_tree_main'] = new \stdClass();
  cache_factory::$data['settings--pages']['develop']['demo']->content['block_tree_main']->region = 'nav';
  cache_factory::$data['settings--pages']['develop']['demo']->content['block_tree_main']->type = 'link';
  cache_factory::$data['settings--pages']['develop']['demo']->content['block_tree_main']->npath = 'trees/core/main';
  cache_factory::$data['settings--pages']['develop']['demo']->content['block_tree_user'] = new \stdClass();
  cache_factory::$data['settings--pages']['develop']['demo']->content['block_tree_user']->region = 'nav';
  cache_factory::$data['settings--pages']['develop']['demo']->content['block_tree_user']->type = 'link';
  cache_factory::$data['settings--pages']['develop']['demo']->content['block_tree_user']->npath = 'trees/user/user';
  cache_factory::$data['settings--pages']['develop']['demo']->content['form_demo'] = new \stdClass();
  cache_factory::$data['settings--pages']['develop']['demo']->content['form_demo']->region = 'content_1_1';
  cache_factory::$data['settings--pages']['develop']['demo']->content['form_demo']->type = 'link';
  cache_factory::$data['settings--pages']['develop']['demo']->content['form_demo']->npath = 'forms/develop/demo';
  cache_factory::$data['settings--pages']['develop']['demo']->content['block_demo_static'] = new \stdClass();
  cache_factory::$data['settings--pages']['develop']['demo']->content['block_demo_static']->region = 'content_1_1';
  cache_factory::$data['settings--pages']['develop']['demo']->content['block_demo_static']->type = 'link';
  cache_factory::$data['settings--pages']['develop']['demo']->content['block_demo_static']->npath = 'blocks/develop/demo';
  cache_factory::$data['settings--pages']['develop']['demo']->content['block_demo_dynamic'] = new \stdClass();
  cache_factory::$data['settings--pages']['develop']['demo']->content['block_demo_dynamic']->region = 'content_1_1';
  cache_factory::$data['settings--pages']['develop']['demo']->content['block_demo_dynamic']->type = 'code';
  cache_factory::$data['settings--pages']['develop']['demo']->content['block_demo_dynamic']->handler = '\\effectivecore\\modules\\develop\\events_page::on_show_block_demo_dynamic';
  cache_factory::$data['settings--pages']['develop']['demo']->display = new \stdClass();
  cache_factory::$data['settings--pages']['develop']['demo']->display->url = new \stdClass();
  cache_factory::$data['settings--pages']['develop']['demo']->display->url->match = '%^/develop/demo$%';
  cache_factory::$data['settings--pages']['page']['decoration'] = new \effectivecore\page();
  cache_factory::$data['settings--pages']['page']['decoration']->title = 'Decoration';
  cache_factory::$data['settings--pages']['page']['decoration']->access = new \stdClass();
  cache_factory::$data['settings--pages']['page']['decoration']->access->roles['admins'] = 'admins';
  cache_factory::$data['settings--pages']['page']['decoration']->content['block_tree_main'] = new \stdClass();
  cache_factory::$data['settings--pages']['page']['decoration']->content['block_tree_main']->region = 'nav';
  cache_factory::$data['settings--pages']['page']['decoration']->content['block_tree_main']->type = 'link';
  cache_factory::$data['settings--pages']['page']['decoration']->content['block_tree_main']->npath = 'trees/core/main';
  cache_factory::$data['settings--pages']['page']['decoration']->content['block_tree_user'] = new \stdClass();
  cache_factory::$data['settings--pages']['page']['decoration']->content['block_tree_user']->region = 'nav';
  cache_factory::$data['settings--pages']['page']['decoration']->content['block_tree_user']->type = 'link';
  cache_factory::$data['settings--pages']['page']['decoration']->content['block_tree_user']->npath = 'trees/user/user';
  cache_factory::$data['settings--pages']['page']['decoration']->content['form_decoration'] = new \stdClass();
  cache_factory::$data['settings--pages']['page']['decoration']->content['form_decoration']->region = 'content_1_1';
  cache_factory::$data['settings--pages']['page']['decoration']->content['form_decoration']->type = 'link';
  cache_factory::$data['settings--pages']['page']['decoration']->content['form_decoration']->npath = 'forms/page/decoration';
  cache_factory::$data['settings--pages']['page']['decoration']->display = new \stdClass();
  cache_factory::$data['settings--pages']['page']['decoration']->display->url = new \stdClass();
  cache_factory::$data['settings--pages']['page']['decoration']->display->url->match = '%^/admin/decoration$%';
  cache_factory::$data['settings--pages']['user']['admin_roles'] = new \effectivecore\page();
  cache_factory::$data['settings--pages']['user']['admin_roles']->title = 'Roles';
  cache_factory::$data['settings--pages']['user']['admin_roles']->access = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_roles']->access->roles['admins'] = 'admins';
  cache_factory::$data['settings--pages']['user']['admin_roles']->constants['items_per_page'] = 50;
  cache_factory::$data['settings--pages']['user']['admin_roles']->content['block_tree_main'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_roles']->content['block_tree_main']->region = 'nav';
  cache_factory::$data['settings--pages']['user']['admin_roles']->content['block_tree_main']->type = 'link';
  cache_factory::$data['settings--pages']['user']['admin_roles']->content['block_tree_main']->npath = 'trees/core/main';
  cache_factory::$data['settings--pages']['user']['admin_roles']->content['block_tree_user'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_roles']->content['block_tree_user']->region = 'nav';
  cache_factory::$data['settings--pages']['user']['admin_roles']->content['block_tree_user']->type = 'link';
  cache_factory::$data['settings--pages']['user']['admin_roles']->content['block_tree_user']->npath = 'trees/user/user';
  cache_factory::$data['settings--pages']['user']['admin_roles']->content['block_admin_roles'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_roles']->content['block_admin_roles']->region = 'content_1_1';
  cache_factory::$data['settings--pages']['user']['admin_roles']->content['block_admin_roles']->type = 'code';
  cache_factory::$data['settings--pages']['user']['admin_roles']->content['block_admin_roles']->handler = '\\effectivecore\\modules\\user\\events_page::on_show_block_admin_roles';
  cache_factory::$data['settings--pages']['user']['admin_roles']->display = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_roles']->display->url = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_roles']->display->url->match = '%^/admin/roles$%';
  cache_factory::$data['settings--pages']['user']['admin_user_delete'] = new \effectivecore\page();
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->title = 'Delete user %%_user_nick_context{4}?';
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->access = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->access->roles['admins'] = 'admins';
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->content['check_access_user_delete'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->content['check_access_user_delete']->region = 'content_1_1';
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->content['check_access_user_delete']->type = 'code';
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->content['check_access_user_delete']->handler = '\\effectivecore\\modules\\user\\events_access::on_check_access_user_delete';
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->content['block_tree_main'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->content['block_tree_main']->region = 'nav';
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->content['block_tree_main']->type = 'link';
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->content['block_tree_main']->npath = 'trees/core/main';
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->content['block_tree_user'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->content['block_tree_user']->region = 'nav';
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->content['block_tree_user']->type = 'link';
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->content['block_tree_user']->npath = 'trees/user/user';
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->content['form_user_delete'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->content['form_user_delete']->region = 'content_1_1';
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->content['form_user_delete']->type = 'link';
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->content['form_user_delete']->npath = 'forms/user/user_delete';
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->display = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->display->url = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->display->url->match = '%^/admin/users/delete/[0-9]+$%';
  cache_factory::$data['settings--pages']['user']['admin_user_delete']->display->url->args['user_id'] = 4;
  cache_factory::$data['settings--pages']['user']['admin_users'] = new \effectivecore\page();
  cache_factory::$data['settings--pages']['user']['admin_users']->title = 'Users';
  cache_factory::$data['settings--pages']['user']['admin_users']->access = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_users']->access->roles['admins'] = 'admins';
  cache_factory::$data['settings--pages']['user']['admin_users']->constants['items_per_page'] = 50;
  cache_factory::$data['settings--pages']['user']['admin_users']->content['block_tree_main'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_users']->content['block_tree_main']->region = 'nav';
  cache_factory::$data['settings--pages']['user']['admin_users']->content['block_tree_main']->type = 'link';
  cache_factory::$data['settings--pages']['user']['admin_users']->content['block_tree_main']->npath = 'trees/core/main';
  cache_factory::$data['settings--pages']['user']['admin_users']->content['block_tree_user'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_users']->content['block_tree_user']->region = 'nav';
  cache_factory::$data['settings--pages']['user']['admin_users']->content['block_tree_user']->type = 'link';
  cache_factory::$data['settings--pages']['user']['admin_users']->content['block_tree_user']->npath = 'trees/user/user';
  cache_factory::$data['settings--pages']['user']['admin_users']->content['block_admin_users'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_users']->content['block_admin_users']->region = 'content_1_1';
  cache_factory::$data['settings--pages']['user']['admin_users']->content['block_admin_users']->type = 'code';
  cache_factory::$data['settings--pages']['user']['admin_users']->content['block_admin_users']->handler = '\\effectivecore\\modules\\user\\events_page::on_show_block_admin_users';
  cache_factory::$data['settings--pages']['user']['admin_users']->display = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_users']->display->url = new \stdClass();
  cache_factory::$data['settings--pages']['user']['admin_users']->display->url->match = '%^/admin/users$%';
  cache_factory::$data['settings--pages']['user']['login'] = new \effectivecore\page();
  cache_factory::$data['settings--pages']['user']['login']->title = 'Login';
  cache_factory::$data['settings--pages']['user']['login']->access = new \stdClass();
  cache_factory::$data['settings--pages']['user']['login']->access->roles['anonymous'] = 'anonymous';
  cache_factory::$data['settings--pages']['user']['login']->content['block_tree_main'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['login']->content['block_tree_main']->region = 'nav';
  cache_factory::$data['settings--pages']['user']['login']->content['block_tree_main']->type = 'link';
  cache_factory::$data['settings--pages']['user']['login']->content['block_tree_main']->npath = 'trees/core/main';
  cache_factory::$data['settings--pages']['user']['login']->content['block_tree_user'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['login']->content['block_tree_user']->region = 'nav';
  cache_factory::$data['settings--pages']['user']['login']->content['block_tree_user']->type = 'link';
  cache_factory::$data['settings--pages']['user']['login']->content['block_tree_user']->npath = 'trees/user/user';
  cache_factory::$data['settings--pages']['user']['login']->content['form_login'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['login']->content['form_login']->region = 'content_1_1';
  cache_factory::$data['settings--pages']['user']['login']->content['form_login']->type = 'link';
  cache_factory::$data['settings--pages']['user']['login']->content['form_login']->npath = 'forms/user/login';
  cache_factory::$data['settings--pages']['user']['login']->https = true;
  cache_factory::$data['settings--pages']['user']['login']->display = new \stdClass();
  cache_factory::$data['settings--pages']['user']['login']->display->url = new \stdClass();
  cache_factory::$data['settings--pages']['user']['login']->display->url->match = '%^/user/login$%';
  cache_factory::$data['settings--pages']['user']['logout'] = new \effectivecore\page();
  cache_factory::$data['settings--pages']['user']['logout']->title = 'Loggin out';
  cache_factory::$data['settings--pages']['user']['logout']->access = new \stdClass();
  cache_factory::$data['settings--pages']['user']['logout']->access->roles['registered'] = 'registered';
  cache_factory::$data['settings--pages']['user']['logout']->content['block_tree_main'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['logout']->content['block_tree_main']->region = 'nav';
  cache_factory::$data['settings--pages']['user']['logout']->content['block_tree_main']->type = 'link';
  cache_factory::$data['settings--pages']['user']['logout']->content['block_tree_main']->npath = 'trees/core/main';
  cache_factory::$data['settings--pages']['user']['logout']->content['block_tree_user'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['logout']->content['block_tree_user']->region = 'nav';
  cache_factory::$data['settings--pages']['user']['logout']->content['block_tree_user']->type = 'link';
  cache_factory::$data['settings--pages']['user']['logout']->content['block_tree_user']->npath = 'trees/user/user';
  cache_factory::$data['settings--pages']['user']['logout']->content['form_logout'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['logout']->content['form_logout']->region = 'content_1_1';
  cache_factory::$data['settings--pages']['user']['logout']->content['form_logout']->type = 'link';
  cache_factory::$data['settings--pages']['user']['logout']->content['form_logout']->npath = 'forms/user/logout';
  cache_factory::$data['settings--pages']['user']['logout']->display = new \stdClass();
  cache_factory::$data['settings--pages']['user']['logout']->display->url = new \stdClass();
  cache_factory::$data['settings--pages']['user']['logout']->display->url->match = '%^/user/logout$%';
  cache_factory::$data['settings--pages']['user']['page_user_n'] = new \effectivecore\page();
  cache_factory::$data['settings--pages']['user']['page_user_n']->title = 'User profile %%_user_nick_context{2}';
  cache_factory::$data['settings--pages']['user']['page_user_n']->access = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_n']->access->roles['admins'] = 'admins';
  cache_factory::$data['settings--pages']['user']['page_user_n']->access->roles['registered'] = 'registered';
  cache_factory::$data['settings--pages']['user']['page_user_n']->content['block_tree_main'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_n']->content['block_tree_main']->region = 'nav';
  cache_factory::$data['settings--pages']['user']['page_user_n']->content['block_tree_main']->type = 'link';
  cache_factory::$data['settings--pages']['user']['page_user_n']->content['block_tree_main']->npath = 'trees/core/main';
  cache_factory::$data['settings--pages']['user']['page_user_n']->content['block_tree_user'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_n']->content['block_tree_user']->region = 'nav';
  cache_factory::$data['settings--pages']['user']['page_user_n']->content['block_tree_user']->type = 'link';
  cache_factory::$data['settings--pages']['user']['page_user_n']->content['block_tree_user']->npath = 'trees/user/user';
  cache_factory::$data['settings--pages']['user']['page_user_n']->content['block_user_n'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_n']->content['block_user_n']->region = 'content_1_1';
  cache_factory::$data['settings--pages']['user']['page_user_n']->content['block_user_n']->type = 'code';
  cache_factory::$data['settings--pages']['user']['page_user_n']->content['block_user_n']->handler = '\\effectivecore\\modules\\user\\events_page::on_show_block_user_n';
  cache_factory::$data['settings--pages']['user']['page_user_n']->https = true;
  cache_factory::$data['settings--pages']['user']['page_user_n']->display = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_n']->display->url = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_n']->display->url->match = '%^/user/[0-9]+$%';
  cache_factory::$data['settings--pages']['user']['page_user_n']->display->url->args['user_id'] = 2;
  cache_factory::$data['settings--pages']['user']['page_user_n_edit'] = new \effectivecore\page();
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->title = 'Edit profile %%_user_nick_context{2}';
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->access = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->access->roles['admins'] = 'admins';
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->access->roles['registered'] = 'registered';
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->content['block_tree_main'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->content['block_tree_main']->region = 'nav';
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->content['block_tree_main']->type = 'link';
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->content['block_tree_main']->npath = 'trees/core/main';
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->content['block_tree_user'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->content['block_tree_user']->region = 'nav';
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->content['block_tree_user']->type = 'link';
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->content['block_tree_user']->npath = 'trees/user/user';
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->content['check_access_user_n_edit'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->content['check_access_user_n_edit']->region = 'content_1_1';
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->content['check_access_user_n_edit']->type = 'code';
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->content['check_access_user_n_edit']->handler = '\\effectivecore\\modules\\user\\events_access::on_check_access_user_n_edit';
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->content['form_user_n_edit'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->content['form_user_n_edit']->region = 'content_1_1';
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->content['form_user_n_edit']->type = 'link';
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->content['form_user_n_edit']->npath = 'forms/user/user_n_edit';
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->https = true;
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->display = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->display->url = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->display->url->match = '%^/user/[0-9]+/edit$%';
  cache_factory::$data['settings--pages']['user']['page_user_n_edit']->display->url->args['user_id'] = 2;
  cache_factory::$data['settings--pages']['user']['page_user_registration'] = new \effectivecore\page();
  cache_factory::$data['settings--pages']['user']['page_user_registration']->title = 'Registration';
  cache_factory::$data['settings--pages']['user']['page_user_registration']->access = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_registration']->access->roles['anonymous'] = 'anonymous';
  cache_factory::$data['settings--pages']['user']['page_user_registration']->content['block_tree_main'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_registration']->content['block_tree_main']->region = 'nav';
  cache_factory::$data['settings--pages']['user']['page_user_registration']->content['block_tree_main']->type = 'link';
  cache_factory::$data['settings--pages']['user']['page_user_registration']->content['block_tree_main']->npath = 'trees/core/main';
  cache_factory::$data['settings--pages']['user']['page_user_registration']->content['block_tree_user'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_registration']->content['block_tree_user']->region = 'nav';
  cache_factory::$data['settings--pages']['user']['page_user_registration']->content['block_tree_user']->type = 'link';
  cache_factory::$data['settings--pages']['user']['page_user_registration']->content['block_tree_user']->npath = 'trees/user/user';
  cache_factory::$data['settings--pages']['user']['page_user_registration']->content['form_user_registration'] = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_registration']->content['form_user_registration']->region = 'content_1_1';
  cache_factory::$data['settings--pages']['user']['page_user_registration']->content['form_user_registration']->type = 'link';
  cache_factory::$data['settings--pages']['user']['page_user_registration']->content['form_user_registration']->npath = 'forms/user/registration';
  cache_factory::$data['settings--pages']['user']['page_user_registration']->https = true;
  cache_factory::$data['settings--pages']['user']['page_user_registration']->display = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_registration']->display->url = new \stdClass();
  cache_factory::$data['settings--pages']['user']['page_user_registration']->display->url->match = '%^/user/registration$%';

}
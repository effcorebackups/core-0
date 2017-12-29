<?php

namespace effectivecore { # cache for data--entities-user-session

  cache::$data['data--entities-user-session'] = new \effectivecore\entity();
  cache::$data['data--entities-user-session']->name = 'session';
  cache::$data['data--entities-user-session']->storage_id = 'main';
  cache::$data['data--entities-user-session']->fields = new \stdClass();
  cache::$data['data--entities-user-session']->fields->id = new \stdClass();
  cache::$data['data--entities-user-session']->fields->id->type = 'varchar';
  cache::$data['data--entities-user-session']->fields->id->size = 255;
  cache::$data['data--entities-user-session']->fields->id->not_null = true;
  cache::$data['data--entities-user-session']->fields->id_user = new \stdClass();
  cache::$data['data--entities-user-session']->fields->id_user->type = 'integer';
  cache::$data['data--entities-user-session']->fields->id_user->not_null = true;
  cache::$data['data--entities-user-session']->fields->remember = new \stdClass();
  cache::$data['data--entities-user-session']->fields->remember->type = 'integer';
  cache::$data['data--entities-user-session']->fields->remember->not_null = true;
  cache::$data['data--entities-user-session']->fields->remember->default = 0;
  cache::$data['data--entities-user-session']->fields->fixed_ip = new \stdClass();
  cache::$data['data--entities-user-session']->fields->fixed_ip->type = 'integer';
  cache::$data['data--entities-user-session']->fields->fixed_ip->not_null = true;
  cache::$data['data--entities-user-session']->fields->fixed_ip->default = 0;
  cache::$data['data--entities-user-session']->fields->expire = new \stdClass();
  cache::$data['data--entities-user-session']->fields->expire->type = 'datetime';
  cache::$data['data--entities-user-session']->fields->data = new \stdClass();
  cache::$data['data--entities-user-session']->fields->data->type = 'blob';
  cache::$data['data--entities-user-session']->fields->data->null = true;
  cache::$data['data--entities-user-session']->constraints['key_id'] = new \stdClass();
  cache::$data['data--entities-user-session']->constraints['key_id']->type = 'primary key';
  cache::$data['data--entities-user-session']->constraints['key_id']->fields['id'] = 'id';

}
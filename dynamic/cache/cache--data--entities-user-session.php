<?php

namespace effcore { # cache for data--entities-user-session

  cache::$data['data--entities-user-session'] = new \effcore\entity();
  cache::$data['data--entities-user-session']->name = 'session';
  cache::$data['data--entities-user-session']->storage_id = 'main';
  cache::$data['data--entities-user-session']->catalog_id = 'sessions';
  cache::$data['data--entities-user-session']->title = 'Session';
  cache::$data['data--entities-user-session']->title_plural = 'Sessions';
  cache::$data['data--entities-user-session']->fields['id'] = new \stdClass();
  cache::$data['data--entities-user-session']->fields['id']->title = 'ID';
  cache::$data['data--entities-user-session']->fields['id']->type = 'varchar';
  cache::$data['data--entities-user-session']->fields['id']->size = 255;
  cache::$data['data--entities-user-session']->fields['id']->not_null = true;
  cache::$data['data--entities-user-session']->fields['id_user'] = new \stdClass();
  cache::$data['data--entities-user-session']->fields['id_user']->title = 'User ID';
  cache::$data['data--entities-user-session']->fields['id_user']->type = 'integer';
  cache::$data['data--entities-user-session']->fields['id_user']->not_null = true;
  cache::$data['data--entities-user-session']->fields['is_remember'] = new \stdClass();
  cache::$data['data--entities-user-session']->fields['is_remember']->title = 'Is remember';
  cache::$data['data--entities-user-session']->fields['is_remember']->type = 'integer';
  cache::$data['data--entities-user-session']->fields['is_remember']->not_null = true;
  cache::$data['data--entities-user-session']->fields['is_remember']->default = 0;
  cache::$data['data--entities-user-session']->fields['is_fixed_ip'] = new \stdClass();
  cache::$data['data--entities-user-session']->fields['is_fixed_ip']->title = 'Is fixed IP';
  cache::$data['data--entities-user-session']->fields['is_fixed_ip']->type = 'integer';
  cache::$data['data--entities-user-session']->fields['is_fixed_ip']->not_null = true;
  cache::$data['data--entities-user-session']->fields['is_fixed_ip']->default = 0;
  cache::$data['data--entities-user-session']->fields['expire'] = new \stdClass();
  cache::$data['data--entities-user-session']->fields['expire']->title = 'Expire date';
  cache::$data['data--entities-user-session']->fields['expire']->type = 'datetime';
  cache::$data['data--entities-user-session']->fields['data'] = new \stdClass();
  cache::$data['data--entities-user-session']->fields['data']->title = 'Data';
  cache::$data['data--entities-user-session']->fields['data']->hidden = true;
  cache::$data['data--entities-user-session']->fields['data']->type = 'blob';
  cache::$data['data--entities-user-session']->fields['data']->null = true;
  cache::$data['data--entities-user-session']->constraints['primary_id'] = new \stdClass();
  cache::$data['data--entities-user-session']->constraints['primary_id']->type = 'primary';
  cache::$data['data--entities-user-session']->constraints['primary_id']->fields['id'] = 'id';
  cache::$data['data--entities-user-session']->constraints['foreign_id_user'] = new \stdClass();
  cache::$data['data--entities-user-session']->constraints['foreign_id_user']->type = 'foreign';
  cache::$data['data--entities-user-session']->constraints['foreign_id_user']->fields['id_user'] = 'id_user';
  cache::$data['data--entities-user-session']->constraints['foreign_id_user']->references = 'users';
  cache::$data['data--entities-user-session']->constraints['foreign_id_user']->references_fields['id'] = 'id';

}
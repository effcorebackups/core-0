<?php

namespace effectivecore { # cache for data--entity-page-captcha

  cache::$data['data--entity-page-captcha'] = new \effectivecore\entity();
  cache::$data['data--entity-page-captcha']->name = 'captcha';
  cache::$data['data--entity-page-captcha']->storage_id = 'main';
  cache::$data['data--entity-page-captcha']->fields = new \stdClass();
  cache::$data['data--entity-page-captcha']->fields->ip_address = new \stdClass();
  cache::$data['data--entity-page-captcha']->fields->ip_address->type = 'varchar';
  cache::$data['data--entity-page-captcha']->fields->ip_address->size = 15;
  cache::$data['data--entity-page-captcha']->fields->ip_address->not_null = true;
  cache::$data['data--entity-page-captcha']->fields->characters = new \stdClass();
  cache::$data['data--entity-page-captcha']->fields->characters->type = 'varchar';
  cache::$data['data--entity-page-captcha']->fields->characters->size = 32;
  cache::$data['data--entity-page-captcha']->fields->characters->not_null = true;
  cache::$data['data--entity-page-captcha']->fields->created = new \stdClass();
  cache::$data['data--entity-page-captcha']->fields->created->type = 'datetime';
  cache::$data['data--entity-page-captcha']->fields->created->not_null = true;
  cache::$data['data--entity-page-captcha']->fields->attempts = new \stdClass();
  cache::$data['data--entity-page-captcha']->fields->attempts->type = 'integer';
  cache::$data['data--entity-page-captcha']->fields->attempts->not_null = true;
  cache::$data['data--entity-page-captcha']->fields->canvas_data = new \stdClass();
  cache::$data['data--entity-page-captcha']->fields->canvas_data->type = 'blob';
  cache::$data['data--entity-page-captcha']->fields->canvas_data->not_null = true;
  cache::$data['data--entity-page-captcha']->constraints['key_id'] = new \stdClass();
  cache::$data['data--entity-page-captcha']->constraints['key_id']->type = 'primary key';
  cache::$data['data--entity-page-captcha']->constraints['key_id']->fields['ip_address'] = 'ip_address';
  cache::$data['data--entity-page-captcha']->indexes['idx_created'] = new \stdClass();
  cache::$data['data--entity-page-captcha']->indexes['idx_created']->type = 'index';
  cache::$data['data--entity-page-captcha']->indexes['idx_created']->fields['created'] = 'created';

}
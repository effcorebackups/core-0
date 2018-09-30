<?php

namespace effcore { # cache for data--entities-page-captcha

  cache::$data['data--entities-page-captcha'] = new \effcore\entity();
  cache::$data['data--entities-page-captcha']->name = 'captcha';
  cache::$data['data--entities-page-captcha']->storage_id = 'main';
  cache::$data['data--entities-page-captcha']->catalog_id = 'captcha';
  cache::$data['data--entities-page-captcha']->ws_created = true;
  cache::$data['data--entities-page-captcha']->title = 'CAPTCHA';
  cache::$data['data--entities-page-captcha']->title_plural = 'CAPTCHAs';
  cache::$data['data--entities-page-captcha']->fields['ip_address'] = new \stdClass();
  cache::$data['data--entities-page-captcha']->fields['ip_address']->title = 'IP address';
  cache::$data['data--entities-page-captcha']->fields['ip_address']->type = 'varchar';
  cache::$data['data--entities-page-captcha']->fields['ip_address']->size = 15;
  cache::$data['data--entities-page-captcha']->fields['ip_address']->not_null = true;
  cache::$data['data--entities-page-captcha']->fields['characters'] = new \stdClass();
  cache::$data['data--entities-page-captcha']->fields['characters']->title = 'Characters';
  cache::$data['data--entities-page-captcha']->fields['characters']->type = 'varchar';
  cache::$data['data--entities-page-captcha']->fields['characters']->size = 32;
  cache::$data['data--entities-page-captcha']->fields['characters']->not_null = true;
  cache::$data['data--entities-page-captcha']->fields['attempts'] = new \stdClass();
  cache::$data['data--entities-page-captcha']->fields['attempts']->title = 'Attempts';
  cache::$data['data--entities-page-captcha']->fields['attempts']->type = 'integer';
  cache::$data['data--entities-page-captcha']->fields['attempts']->not_null = true;
  cache::$data['data--entities-page-captcha']->fields['canvas_data'] = new \stdClass();
  cache::$data['data--entities-page-captcha']->fields['canvas_data']->title = 'Canvas data';
  cache::$data['data--entities-page-captcha']->fields['canvas_data']->hidden = true;
  cache::$data['data--entities-page-captcha']->fields['canvas_data']->type = 'blob';
  cache::$data['data--entities-page-captcha']->fields['canvas_data']->not_null = true;
  cache::$data['data--entities-page-captcha']->fields['created'] = new \stdClass();
  cache::$data['data--entities-page-captcha']->fields['created']->title = 'Created';
  cache::$data['data--entities-page-captcha']->fields['created']->type = 'datetime';
  cache::$data['data--entities-page-captcha']->fields['created']->not_null = true;
  cache::$data['data--entities-page-captcha']->constraints['primary_ip_address'] = new \stdClass();
  cache::$data['data--entities-page-captcha']->constraints['primary_ip_address']->type = 'primary';
  cache::$data['data--entities-page-captcha']->constraints['primary_ip_address']->fields['ip_address'] = 'ip_address';
  cache::$data['data--entities-page-captcha']->indexes['index_created'] = new \stdClass();
  cache::$data['data--entities-page-captcha']->indexes['index_created']->type = 'index';
  cache::$data['data--entities-page-captcha']->indexes['index_created']->fields['created'] = 'created';

}
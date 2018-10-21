<?php

namespace effcore { # cache for data--entities-page-captcha

  cache::$data['data--entities-page-captcha'] = new \effcore\entity();
  cache::$data['data--entities-page-captcha']->name = 'captcha';
  cache::$data['data--entities-page-captcha']->storage_name = 'main';
  cache::$data['data--entities-page-captcha']->catalog_name = 'captcha';
  cache::$data['data--entities-page-captcha']->ws_created = true;
  cache::$data['data--entities-page-captcha']->title = 'CAPTCHA';
  cache::$data['data--entities-page-captcha']->title_plural = 'CAPTCHAs';
  cache::$data['data--entities-page-captcha']->fields['ip_hex'] = new \stdClass();
  cache::$data['data--entities-page-captcha']->fields['ip_hex']->title = 'IP address';
  cache::$data['data--entities-page-captcha']->fields['ip_hex']->type = 'varchar';
  cache::$data['data--entities-page-captcha']->fields['ip_hex']->size = 32;
  cache::$data['data--entities-page-captcha']->fields['ip_hex']->not_null = true;
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
  cache::$data['data--entities-page-captcha']->constraints['primary_ip_hex'] = new \stdClass();
  cache::$data['data--entities-page-captcha']->constraints['primary_ip_hex']->type = 'primary';
  cache::$data['data--entities-page-captcha']->constraints['primary_ip_hex']->fields['ip_hex'] = 'ip_hex';
  cache::$data['data--entities-page-captcha']->indexes['index_created'] = new \stdClass();
  cache::$data['data--entities-page-captcha']->indexes['index_created']->type = 'index';
  cache::$data['data--entities-page-captcha']->indexes['index_created']->fields['created'] = 'created';

}
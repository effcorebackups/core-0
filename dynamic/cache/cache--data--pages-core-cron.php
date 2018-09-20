<?php

namespace effcore { # cache for data--pages-core-cron

  cache::$data['data--pages-core-cron'] = new \effcore\page();
  cache::$data['data--pages-core-cron']->title = 'Cron';
  cache::$data['data--pages-core-cron']->display = new \stdClass();
  cache::$data['data--pages-core-cron']->display->check = 'url';
  cache::$data['data--pages-core-cron']->display->where = 'path';
  cache::$data['data--pages-core-cron']->display->match = '%^/cron/(?<key>[a-z0-9]{40})$%';
  cache::$data['data--pages-core-cron']->children['block_cron'] = new \effcore\page_part();
  cache::$data['data--pages-core-cron']->children['block_cron']->type = 'code';
  cache::$data['data--pages-core-cron']->children['block_cron']->source = '\\effcore\\modules\\core\\events_page::on_cron_run';

}
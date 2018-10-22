<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-22 15:21:45';
  data::$data['changes']['core'] = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql'] = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->driver = 'mysql';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->host_name = '[::1]';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->port = '3306';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->storage_name = 'main';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->user_name = 'root';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->password = '123';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->table_prefix = '';
  data::$data['changes']['core']->update['settings/locales/lang_code'] = 'en';
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '072c48974d623e3e29c1f49b093c7c0adc0ad41b';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = 'e77718e48561a4b5597241886140ed95902f55f3';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = '20a79e7ee1c94837cfbe3110c1772272482ea652';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '6161cfb36b7914b5b64dc83cef34625bbf2157f8';
  data::$data['changes']['locales'] = new \stdClass();
  data::$data['changes']['locales']->update['settings/locales/lang_code'] = 'ru';

}
<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-24 14:23:02';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = 'e0f5b6077be9835ccfdf7eecfe699832e1626808';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '67399b6110d99ad143165c9548fdbc1c2e699d60';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'aeef88eccb5af23044855e6bf7348e952af521da';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '7e46f58cadf18f40572b89b57118ecd5a6bafde7';

}
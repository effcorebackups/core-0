<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-25 11:13:00';
  data::$data['changes']['core'] = new \stdClass();
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = 'b67d4b1db4746588f5cb7ce3455c3c6fcb398e39';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '9ccf46dc3487085125b3eee0d950fffe3764a77c';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'cec95e57a9b6d025fd638b16b1c4d726d6c3882f';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '5a130f299f794f7ad06501e754e95d15a553df53';
  data::$data['changes']['core']->update['settings/locales/lang_code'] = 'en';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql'] = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->driver = 'mysql';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials = new \stdClass();
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->host_name = '[::1]';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->port = '3306';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->storage_name = 'main';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->user_name = 'root';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->credentials->password = '123';
  data::$data['changes']['core']->insert['storages/storage/storage_pdo_sql']->table_prefix = '';

}
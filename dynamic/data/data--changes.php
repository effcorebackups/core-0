<?php

namespace effcore { # data for changes

  data::$info['changes']['build'] = '2018-10-22 06:34:29';
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
  data::$data['changes']['core']->update['settings/core/keys']['cron'] = '69a085166111b3ab6106c27fb008a28b85981d5b';
  data::$data['changes']['core']->update['settings/core/keys']['form_validation'] = '9f76a4267fc4ad3cfe2af1e3773d191a041c7985';
  data::$data['changes']['core']->update['settings/core/keys']['session'] = 'bad42a236dbaf6e5c1e48e670b241eaf826ff558';
  data::$data['changes']['core']->update['settings/core/keys']['salt'] = '039129dea50744bf5b0528f33876db9acc1212ab';

}
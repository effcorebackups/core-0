<?php

namespace effectivecore\modules\user {
          use const \effectivecore\format_datetime;
          use \effectivecore\modules\user\user_factory as user;
          use \effectivecore\entity_instance as entity_instance;
          abstract class session_factory {

  static function init($user_id = 0) {
 /* renew session for user with selected id */
    if ($user_id != 0) {
      session_start();
      (new entity_instance('entities/user/session', [
        'id'      => session_id(),
        'user_id' => $user_id,
        'created' => date(format_datetime, time())
      ]))->insert();
    }
 /* restore session for authenticated user */
    if ($user_id == 0 && isset($_REQUEST[session_name()])) {
      $session = (new entity_instance('entities/user/session', [
        'id' => $_REQUEST[session_name()]
      ]))->select();
      if ($session) {
        $user_id = $session->user_id;
        session_start();
      } else {
      # remove lost or substituted sid in browser
        setcookie(session_name(), '', 0, '/');
      }
    }
 /* init user */
    user::init($user_id);
  }

  static function destroy($user_id) {
    (new entity_instance('entities/user/session', [
      'id'      => session_id(),
      'user_id' => $user_id
    ]))->delete();
    setcookie(session_name(), '', 0, '/');
    session_destroy();
  }

}}
<?php
  $valid_passwords = array("username" => "password");
  $valid_users = array_keys($valid_passwords);

  $user = $_SERVER['PHP_AUTH_USER'];
  $pass = $_SERVER['PHP_AUTH_PW'];

  $validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

  if (!$validated) {
    header('WWW-Authenticate: Basic realm="Verify your identity"');
    header('HTTP/1.0 401 Unauthorized');
    die("Not authorized");
  }
  ?>

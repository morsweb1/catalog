<?php
include_once 'config.php';

try {

  $dsn = DB_DRIVER.':host='.DB_HOST.';dbname='.DB_NAME;

  $db = new PDO ($dsn, DB_USER, DB_PASS);

  $res = $db->query("SELECT * FROM catalog");

  if ($db->errorCode() != 0000) {
    $error_array = $db->errorInfo();
    echo "SQL ошибка: ".$error_array[2].'<br>';
  }

  while ($row = $res->fetch()) {
    print_r($row);
  }

} catch (PDOException $e) {
    die('Error: '.$e->getMessage());
}

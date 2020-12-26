<?php
include_once 'config.php';

try {

  $dsn = DB_DRIVER.':host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME;

  $db = new PDO ($dsn, DB_USER, DB_PASS);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if (isset($_GET['limit'])) {
    $limit = $_GET['limit'];
  } else {
      $limit = 3;
  }

  $res = $db->query("SELECT * FROM `catalog` LIMIT $limit");

  while ($row = $res->fetchObject()) {
    $goods[] = $row;
  }

} catch (PDOException $e) {
    die('Error: '.$e->getMessage());
}

<?php
include_once '../config/server.php';
include_once '../config/loadTwig.php';

try {

  $src = [
    'title'=>'Каталог товаров',
    'goods'=>$goods,
    'count'=>count($goods)
  ];

  $template = $twig->render('index.tmpl', $src);
  echo $template;

} catch (Exception $e) {
    die('Error: '.$e);
}


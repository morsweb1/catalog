<?php
include_once "../vendor/autoload.php";

try {
  $loader = new Twig_Loader_Filesystem('../templates');
  $twig = new Twig_Environment($loader);
} catch (Exception $e) {
    die('Error: '. $e->getMessage());
}
<?php

require_once("config.php");

$root = new Usuario();

$root->loadbyId(9);

echo $root;

?>
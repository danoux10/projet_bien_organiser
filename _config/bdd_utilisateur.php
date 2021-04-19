<?php
include 'config_utilisateur.php';

$bdd_user = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charser=utf8',DATABASE_USER,DATABASE_PASSWORD);
?>
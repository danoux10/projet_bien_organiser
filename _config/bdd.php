<?php

$bdd_data = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME_RUCHE.';charser=utf8',DATABASE_USER,DATABASE_PASSWORD);
$bdd_user = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME_UTILISATEUR.';charser=utf8',DATABASE_USER,DATABASE_PASSWORD);

?>
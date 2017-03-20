<?php

// hash.php?password=monmotdepasse
$password = $_REQUEST["password"];

// CREE UN HASH POUR LE MOT DE PASSE RECU
// http://php.net/manual/fr/function.password-hash.php
echo password_hash($password, PASSWORD_BCRYPT);
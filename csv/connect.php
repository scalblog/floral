<?php

session_start();

/* Connexion à une base ODBC avec l'invocation de pilote */
$dsn = 'mysql:dbname=christran;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $user, $password);
} 

catch (PDOException $e) {
    echo 'La connexion à la base de données a échoué : ' . $e->getMessage();
}

?>
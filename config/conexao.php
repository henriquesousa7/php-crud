<?php

    define('HOST', '');
    define('USER', '');
    define('PASS', '');
    define('DBNAME', 'livraria');
    define('PORT', '');

    try {
      $conexao = new PDO('mysql:host=' . HOST . ';port=' . PORT . ';dbname=' . DBNAME, USER, PASS);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
?>
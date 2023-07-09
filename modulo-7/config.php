<?php

$pdo = new PDO('mysql:dbname=teste;host=127.0.0.1', 'root', '2000');

// $sql = $pdo->query('SELECT * FROM usuarios'); // query faz uma consulta no banco de dados

// //pegando a quantidade de registros
// echo 'TOTAL: ' .$sql->rowCount();

// echo '<br>';

// $dados = $sql->fetchAll( PDO::FETCH_ASSOC ); 

// echo '<pre>';
// var_dump($dados);
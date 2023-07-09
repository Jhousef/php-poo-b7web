<?php
require 'config.php';

// VALIDAÇÕES
$id                 = filter_input(INPUT_POST, 'id');
$name               = filter_input(INPUT_POST, 'name');
$data_nascimento    = filter_input(INPUT_POST, 'data_nascimento');
$descricao          = filter_input(INPUT_POST, 'descricao');
$senha              = filter_input(INPUT_POST, 'senha');


if($name && $data_nascimento && $descricao && $senha){

    $sql = $pdo->prepare("UPDATE usuarios SET nome=:name, data_nascimento=:data_nascimento, descricao=:descricao, senha=:senha WHERE id = :id ");
    $sql->bindValue(':name', $name);
    $sql->bindValue(':data_nascimento', $data_nascimento);
    $sql->bindValue(':descricao', $descricao);
    $sql->bindValue(':senha', $senha);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header('Location: index.php');
    exit;

} else {
    header("Location: editar.php");
    exit;
}
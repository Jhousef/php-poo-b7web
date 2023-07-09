<?php
require 'config.php';

// VALIDAÇÕES
$name               = filter_input(INPUT_POST, 'name');
$data_nascimento    = filter_input(INPUT_POST, 'data_nascimento');
$descricao          = filter_input(INPUT_POST, 'descricao');
$senha              = filter_input(INPUT_POST, 'senha');


if($name && $data_nascimento && $descricao && $senha){

    //VERIFICAÇÃO DE SER O MESMO EMAIL, SE ELE JÁ EXISTE. ********
    // $sql = $pdo->prepare('SELECT * FROM usuarios WHERE email = :email');
    // $sql->bindValue('email', :$email);
    // $sql->execute();

    /* SE NÃO TIVER NENHUM EMAIL COMO ESSE, ENTÃO ELE EXECUTA O INSERT.
    if($sql->rowCount() === 0){
        $sql = $pdo->prepare("INSERT INTO usuarios (nome, data_nascimento, descricao, senha) VALUES (:name, :data_nascimento, :descricao, :senha)");
        // Usando bindValue para transferir valores, resumindo: pegando o valo da variavél.
        $sql->bindValue(':name', $name);
        $sql->bindValue(':data_nascimento', $data_nascimento);
        $sql->bindValue(':descricao', $descricao);
        $sql->bindValue(':senha', $senha);
        $sql->execute();
    } else{
        CASO TENHA, VAI VOLTAR PARA O ÍNICIO.
        header('Location: index.php');
        exit;
    } 
    
    */

    //MONTANDO A QUERY *************
        $sql = $pdo->prepare("INSERT INTO usuarios (nome, data_nascimento, descricao, senha) VALUES (:name, :data_nascimento, :descricao, :senha)");
        // Usando bindValue para transferir valores, resumindo: pegando o valo da variavél.
        $sql->bindValue(':name', $name);
        $sql->bindValue(':data_nascimento', $data_nascimento);
        $sql->bindValue(':descricao', $descricao);
        $sql->bindValue(':senha', $senha);
    // -----------------------------
    //EXECUTANDO A QUERY
    $sql->execute();

    header('Location: index.php');
    exit;

    /* bindParam - vincula o parâmetro diretamente ao valor da variável. Isso significa que se o valor da variável mudar após a vinculação, a consulta preparada refletirá essa alteração. 
    bindParam também permite que você especifique o tipo de dados do parâmetro, o que pode ser útil em alguns casos. */
    //$sql->bindParam(':datanascimento', $data_nascimento);

    // Antiga maneira de fazer consulta no banco, esse método faz com que o sistema corra o risco de ataques.
    // $pdo->query("INSERT INTO usuarios (nome, data_nascimento, descricao, senha) VALUES('$name', '$data_nascimento', '$descricao', '$Senha')");
    
} else {
    header("Location: adicionar.php");
    exit;
}
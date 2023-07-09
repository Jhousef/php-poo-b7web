<?php
require 'config.php';

$info = [];

$id = filter_input(INPUT_GET, 'id');
if($id){
    $sql = $pdo->prepare('SELECT * FROM usuarios WHERE id = :id');
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){

        $info = $sql->fetch(PDO::FETCH_ASSOC);

        $info['id'];

    } else {
        header('Location: index.php');
        exit;
    }

} else {
    header('Location: index.php');
}
?>
<h1>Editar Usuário</h1>
<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?=$info['id'];?>">

    <label for="">
        Nome:<br/>
        <input type="text" name="name" value="<?=$info['nome'];?>">
    </label><br><br>
    <label for="">
        Data de Nascimento:<br/>
        <input type="date" name="data_nascimento" value="<?=$info['data_nascimento'];?>">
    </label><br><br>
    <label for="">
        Descrição:<br/>
        <input type="text" name='descricao' value="<?=$info['descricao'];?>">
    </label><br><br>
    <label for="">
        Senha:<br/>
        <input type="text" name="senha" value="<?=$info['senha'];?>">
    </label><br><br>

    <input type="submit" value="Salvar">

</form>
<?php
require 'config.php';

$lista = [];
$sql = $pdo->query('SELECT * FROM usuarios');
if($sql->rowCount() > 0){
    //  FETCH_ASSOC - Associa os valores com o índices dos Arrays.
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<a href="adicionar.php">ADICIONAR USUÁRIO</a>

<table border="1" width='100%'>
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>DATA_NASCIMENTO</th>
        <th>DESCRIÇÃO</th>
        <th>SENHA</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuario) { ?>
        <tr>
            <td><?= $usuario['nome'];           ?></td>
            <td><?= $usuario['id'];             ?></td>
            <td><?= $usuario['data_nascimento'];?></td>
            <td><?= $usuario['descricao'];      ?></td>
            <td><?= $usuario['senha'];          ?></td>
            <td>
                <a href="editar.php?id=<?=$usuario['id'];?>">[ Editar ]</a>
                <a href="excluir.php?id=<?=$usuario['id']?>" onclick="return confirm('certeza que deseja excluir?')">[ Excluir ]</a>
            </td>
        </tr>
    <?php } ?>
</table>
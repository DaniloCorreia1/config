<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuarios");
if($sql->rowCount() > 0 ) {
    $lista = $sql ->fetchAll(PDO::FETCH_ASSOC);
}
?>

<a href="adicionar.php">ADICIONAR USUÁRIO</a>

<table border="1" width= "100%"> 
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
<?php foreach ($lista AS $usuarios): ?>
    <tr>
        <td><?=$usuarios['id'];?></td>
        <td><?=$usuarios['nome'];?></td>
        <td><?=$usuarios['email'];?></td>
        <td>
            <a href="editar.php?id=<?=$usuarios['id'];?>">[ EDITAR ] </a>
            <a href="excluir.php?id=<?=$usuarios['id'];?>">[ EXCLUIR ] </a>


        </td>
    </tr>

    <?php endforeach; ?>


</table>
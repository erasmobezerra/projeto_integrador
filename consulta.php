<?php
require 'config.php';

if (!$pdo) {
    echo "Erro ao conectar ao Banco de Dados: " . mysqli_connect_errno(); 
}

$lista = [];
$sql = $pdo->query("SELECT * FROM avaliacao");
if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);    
}
?>

<h1 style="text-align: center;">Veja aqui as avaliações já realizadas!</h1>

<table border="1" width="100%">
    <tr>
        <th>ID</th>    
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AVALIACAO</th>
        <th>OPÇÕES</th>        
    </tr>

    <?php foreach($lista as $avaliacao): ?>
        <tr>
            <td><?=$avaliacao['id_avaliador'];?></td>
            <td><?=$avaliacao['nome_avaliador'];?></td>
            <td><?=$avaliacao['email_avaliador'];?></td>
            <td><?=$avaliacao['avaliacao'];?></td><td>

               <a href="alterar.php?id_avaliador=<?=$avaliacao['id_avaliador'];?>">[ Editar ]</a>
               <a href="excluir.php?id_avaliador=<?=$avaliacao['id_avaliador'];?>" onclick="return confirm('Tem certeza que deseja ecxluir?')">[ Excluir ]</a> 
            </td>
        </tr>
    <?php endforeach; ?>
    
</table>
<br>

<?php
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de avaliações</title>
    <link rel="stylesheet" href="./css/style_menu.css">
    <link rel="stylesheet" href="./css/style_alterar.css">    
</head>

<body>

<input type="checkbox" id="bt_menu">
<label for="bt_menu">&#9776;</label>

    <nav class="menu">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li>
                <a href="#">Aplicativos</a>
                    <ul>
                        <li><a href="app_desktop.php">App Desktop</a></li>
                        <li><a href="app_mobile.php">App Mobile</a></li>
                    </ul>
            </li>
            <li><a href="rede_local.php">Rede Local</a></li>
            <li><a href="requisitos.php">Requisitos</a></li>
            <li>
                <a href="#">Avaliação</a>
                    <ul>
                        <li><a href="avaliacao.php">Avalie</a></li>
                        <li><a href="consulta.php">Histórico</a></li>
                    </ul>            
            </li>
            <li><a href="contato.php">Contato</a></li>
            <li>
                <a href="#">Logout</a>
                    <ul>
                        <li><a href="logout.php">Clique aqui para sair</a></li>
                    </ul>         
            </li>
            <li class="menu_boasvindas">Olá, <?php echo $_SESSION['nome_usuario'];?></li>
        </ul>
    </nav>
</body>
</html>


<?php
require 'config.php';

if (!$pdo) {
    echo "Erro ao conectar ao Banco de Dados: ".mysqli_connect_errno(); 
}

$lista = [];
$sql = $pdo->query("SELECT * FROM avaliacao");
if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);    
}

?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style_tabela.css">    
</head>
</head>
<body>
    
</body>
</html>

<table>
    <caption>Veja aqui as avaliações já realizadas!</caption>
    <thead>
        <tr>
            <th>ID</th>    
            <th>NOME</th>
            <th>EMAIL</th>
            <th>AVALIACAO</th>
            <th>OPÇÕES</th>        
        </tr>
    </thead>

    <?php foreach($lista as $avaliacao): ?>
        <tbody>
            <tr>
                <td><?=$avaliacao['id_avaliador'];?></td>
                <td><?=$avaliacao['nome_avaliador'];?></td>
                <td><?=$avaliacao['email_avaliador'];?></td>
                <td><?=$avaliacao['avaliacao'];?></td><td>

                <a href="alterar.php?id_avaliador=<?=$avaliacao['id_avaliador'];?>">[ Editar ]</a>
                <a href="excluir.php?id_avaliador=<?=$avaliacao['id_avaliador'];?>" onclick="return confirm('Tem certeza que deseja ecxluir?')">[ Excluir ]</a> 
                </td>
            </tr>
        </tbody>
    <?php endforeach; ?>

    <tfoot>
        <tr>
            <td colspan="5">Agência de Turismo Viage Seguro</td>
        </tr>
    </tfoot>
    
</table>
<br>

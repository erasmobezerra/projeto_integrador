<?php 
require 'config.php';

$info = [];
$id_avaliador = filter_input(INPUT_GET, 'id_avaliador');

if($id_avaliador){

    $sql = $pdo->prepare("SELECT * FROM avaliacao WHERE id_avaliador = :id_avaliador");
    $sql->bindValue(':id_avaliador', $id_avaliador);
    $sql->execute();

    if($sql->rowCount() > 0){

        $info = $sql->fetch( PDO::FETCH_ASSOC );
           
    } else {
        header("Location: alterar.php");
        exit;
    }
    
} else {
    header('Location: consulta.php');
    exit;
}
?>

<?php
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando Avaliacao</title>
    <link rel="stylesheet" href="./css/style_menu.css">
    <link rel="stylesheet" href="./css/style_avaliacao.css">    
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
    <section class="content">
    
        <div class="contato">
            <h3>Formulário de avaliação</h3>
            <form class="form" method="POST" action="alterar_action.php">
                <input class="field" type="hidden" name="id_avaliador" value="<?=$info['id_avaliador'];?>">
                <input class="field" type="text" name="nome_avaliador" placeholder="Nome" maxlength="30" value="<?=$info['nome_avaliador'];?>">
                <input class="field" type="email" name="email_avaliador" placeholder="Email" maxlength="40" value="<?=$info['email_avaliador'];?>">
                <input class="field" name="avaliacao" placeholder="Digite aqui sua avaliação sobre o site, recomendações, críticas..." maxlength="500" value="<?=$info['avaliacao'];?>">
                <input class="field" type="submit" value="Aterar">                         
            </form>           
        </div>               
    </section>
</body>
</html>
<?php 
require 'config.php';

$info = [];
$id_avaliador = filter_input(INPUT_GET, 'id_avaliador');
if($id){

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

    <style>
        body{font-family: Arial, Arial, Helvetica, sans-serif;}
        .content{display:flex; justify-content: center;}
        .contato{width: 100%; max-width:500px;}
        .form{display: flex; flex-direction: column;}
        .field{padding: 10px; margin-bottom: 15px; border: 1px solid #000; border-radius: 5px; font-family: Arial, Helvetica, sans-serif; font-size: 16px}
        textarea{height: 150px;}
        .alertas{
            text-align: center;
            color: red;
            font-weight: bolder;
            padding-top: 10px;
            font-size: 25px
        }
        @media(min-width: 980px) {
            .content{margin-top: 20px;}
        }

    </style>
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
            <li><a href="avaliacao.php">Avaliação</a></li>
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
            <form class="form" method="POST" action="avaliar.php">
                <input class="field" type="hidden" name="id" value="<?=$info['id_avaliador'];?>">
                <input class="field" type="text" name="nome_avaliador" placeholder="Nome" maxlength="30" value="<?=$info['nome_avaliador'];?>">> 
                <input class="field" type="email" name="email_avaliador" placeholder="Email" maxlength="40" value="<?=$info['email_avaliador'];?>">>
                <textarea class="field" name="avaliacao" placeholder="Digite aqui sua avaliação sobre o site, recomendações, críticas..." maxlength="500" value="<?=$info['id_avaliador'];?>"></textarea>
                <input class="field" type="submit" value="Enviar">            
            </form>

            <?php

                if(isset($_SESSION['msg_enviada'])) {
                    echo $_SESSION['msg_enviada'];
                    unset($_SESSION['msg_enviada']);                
                } 

                if(isset($_SESSION['campo_em_aberto'])) {
                    echo $_SESSION['campo_em_aberto'];
                    unset($_SESSION['campo_em_aberto']);
                }

                if(isset($_SESSION['usuario_ja_avaliou'])) {
                    echo $_SESSION['usuario_ja_avaliou'];
                    unset($_SESSION['usuario_ja_avaliou']);
                }
                ?>
        </div>               
    </section>
</body>
</html>
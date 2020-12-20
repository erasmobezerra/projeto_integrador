<?php
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliaçao</title>
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
            <form class="form" method="POST" action="avaliar.php">
                <input class="field" type="text" name="nome_avaliador" placeholder="Nome" maxlength="30"> 
                <input class="field" type="email" name="email_avaliador" placeholder="Email" maxlength="40">
                <textarea class="field" name="avaliacao" placeholder="Digite aqui sua avaliação sobre o site, recomendações, críticas..." maxlength="500"></textarea>
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
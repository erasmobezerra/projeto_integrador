<?php
include('verifica_login.php');
?>


<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/style_menu.css">
    <link rel="stylesheet" href="./css/style_corpo.css">
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
    
    <div class="container">
        
        <h1>Início do texto</h1>
       
    </div>
    
</body>
</html>
 
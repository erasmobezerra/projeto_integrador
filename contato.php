<?php
include('verifica_login.php');
?>


<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="./css/style_menu.css">
    <link rel="stylesheet" href="./css/style_corpo.css">
    <link rel="stylesheet" href="./css/style_tabela.css">
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

    <div class="container">       

        <table>
            <caption>Contato dos desenvolvedores do projeto</caption>
            <thead>
                <tr>
                    <th>NOME</th>    
                    <th>EMAIL</th>                                
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Erasmo Ribeiro Bezerra</td>
                    <td>erasmobcs09.2@gmail.com</td>                   
                </tr>
                <tr>
                    <td>Laura</td>
                    <td>laurasevero321@gmail.com</td>
                </tr>
                <tr>
                    <td>Lucas</td>
                    <td>lucasmelopessoadasilva@hotmail.com</td>
                </tr>
                <tr>
                    <td>Ítalo</td>
                    <td>Italodaluzlatorre0@gmail.com</td>
                </tr>
            </tbody>
        </table>
    </div>


</body>
</html>
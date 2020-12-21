<?php
include('verifica_login.php');
?>


<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Mobile</title>
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
        <h1>App Mobile</h1>

        <p>
        Aprendemos a desenvolver aplicativos mobile na disciplina Desenvolvimento de Aplicações Mobile, por meio do site IT App Inventor. 
        </p>

        <p>
        Também chamada pelo nome de App Inventor for Android, é uma aplicação de código aberto originalmente criada pela Google, e atualmente mantida pelo Massachusetts Institute of Technology. Focado em estudantes que estão entrando em contato com a programação pela primeira vez, a codificação no App Inventor dá-se por meio da Programação em Blocos, que permite aos usuários arrastar e soltar objetos visuais para criar um aplicativo que pode ser executado em dispositivos Android.
        </p>

        <p>
        Nossa equipe então criou, por meio da plataforma App Inventor, um aplicativo mobile com funcionalidades semelhantes ao aplicativo desenvolvido para desktop que faz cadastro de agendamentos de pacotes de viagens. 
        </p>

        <p>
        Nosso aplicativo mobile chamado Cadastro, registra id, nome e destino dos clientes e guarda isso na base de dados do app. Também é possível alterar e deletar os registros salvos, além de ter um link onde é possível ter acesso ao app Google Maps. 
        </p>

        <div class="app_mobile">
            <img src="./imagens/mobile1.jpg" alt="">
            <img src="./imagens/mobile2.jpg" alt="">
            <img src="./imagens/mobile3.jpg" alt="">
        </div>
    </div>


</body>
</html>
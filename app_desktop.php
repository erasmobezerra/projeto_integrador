<?php
include('verifica_login.php');
?>


<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Desktop</title>
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
        
        <h1>Aplicativo Desktop</h1>

        <p>
            No final deste curso, fomos desafiados a construir um programa desktop utilizando a linguagem de programação orientada à objetos, a linguagem Java, que nos foi ensinada na disciplina Desenvolvimento de Aplicações Desktop.
        </p>

        <p>
        Java que não é somente uma linguagem de programação, mas toda uma plataforma de desenvolvimento que roda, inclusive, outras linguagem de programação como Kotlin, Scala e Python. Ao aprender Java, conseguimos programar em qualquer plataforma, desenvolvendo aplicações para desktop, web, mobile, internet das coisas, etc. 
        </p>

        <p>
        Por meio dessa plataforma tão interessante, que utiliza por exemplo uma máquina virtual que interpreta os bytecodes compilados por uma IDE transformando-os em linguagem de máquina, isso possibilita com que o programador ou programadora crie aplicativos para Windows, Linux ou MacOS.   
        </p>

        <p>
        Visando resolver o problema de falta de um programa que pudesse facilmente armazenar, alterar, excluir e gerar relatório dos agendamentos de pacotes de viagens dos clientes da nossa empresa fictícia Viagem Segure, construímos um projeto para desenvolver um aplicativo leve, seguro, objetivo, de fácil manuseio e que pudesse ser instalado em sistemas operacionais Windows, Linux e MacOS.  
        </p>

        <p>
        Como já dito anteriormente, utilizamos a linguagem de programação Java, versão 8. Para escrever e compilar o código, foi usado a IDE NetBeans 8.2. O Sistema de gerenciamento de banco de dados foi o MySQL, servidor Apache, todos presentes no pacote de distribuição Xampp. 
        </p>

        <p>
        O aplicativo desenvolvido possui apenas uma janela que agrega todas as funcionalidades do programa. Nela é possível cadastrar novos agendamentos de pacotes de viagens, guardando informações como nome do cliente, tipo de pacote, valor do pacote, data de ida e volta. Além disso, podemos alterar, excluir e procurar por os dados anteriormente registrados.
        </p>

        <img src="./imagens/viageseguro.png" alt="">


    </div>


</body>
</html>
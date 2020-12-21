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
        
        <h1>Boas-vindas!</h1>

        <p>
        Este é um trabalho de conclusão do curso de Técnico em Desenvolvimento de Sistemas, desenvolvido na ETE Jurandir Bezerra Lins, Igarassu/PE. Nossa equipe, formada por Ítalo da Luz La Torre, Laura Vitória da Silva Severo, Luccas e Erasmo Ribeiro Bezerra, elaborou este website com o objetivo de apresentar o Projeto Integrador II e III. 	
        </p>

        <p>
        Neste projeto de conclusão de curso, criamos uma empresa fictícia, uma agência de turismo intitulada Viagem Seguro que realiza dentre outras funções, cadastro de clientes e agendamento de pacotes de viagens aéreas.  Mais detalhes dos aplicativos e da rede local, você encontrará navegando por este site.
        </p>

        <p>
        Navegando pelo Menu acima, você encontrará informações a respeito dos nossos aplicativos desenvolvidos para desktop e mobile; descrição e imagens da simulação da nossa rede local; descrição sobre os requisitos de engenharia de software que utilizamos no desenvolvimento dos aplicativos e deste website; uma página para que você possa realizar uma avaliação crítica do nosso projeto, elogios, sugestões e o que mais puder contribuir conosco; por fim uma página que nossos dados de contato. 
        </p>

        <p>
        Agrademos todo apoio e dedicação que o corpo docente da instituição nos proporcionou, dos nossos familiares e amigos que contribuíram direta e indiretamente para este breve e importante jornada que embora tenha fim em dezembro, virão muitas outras pela frente. 
        </p>

       
    </div>
    
</body>
</html>
 
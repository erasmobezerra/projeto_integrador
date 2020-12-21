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
        <h1>Projeto físico da Rede Local </h1>

        <p>
        Criamos uma simulação de uma rede local no programa Cisco Packet Tracer para simular a infra estrutura de uma pequena agência de viagens.  
        </p>

        <p>
        A rede local foi configurada com sucesso. Para expandi-la, foi adicionado dois switchs que fizeram o intermédio entre os computadores e o servidor. Montamos e configuramos servidores DHCP, HTTP e DNS, resultando num servidor de internet completo.  
        </p>

        <p>
        A estrutura foi composta utilizando os seguintes equipamentos: 
        </p>

        <table>
            <caption>EQUIPAMENTOS NA REDE LOCAL</caption>
            <thead>
                <tr>
                    <th>PC</th>    
                    <th>NOTEBOOK</th>
                    <th>SERVIDOR</th>
                    <th>SWITCH</th>        
                    <th>ROTEADOR</th>                   
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>10</td>
                    <td>7</td>
                    <td>1</td>
                    <td>2</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>
        A distribuição de PCs e Notebooks foi realizada da seguinte maneira:
        </p> 
        
        <table>
            <caption>DISTRIBUIÇÃO DOS EQUIPAMENTOS</caption>
            <thead>
                <tr>
                    <th>RECEPÇÃO</th>
                    <th>CORREDOR</th>
                    <th>STAFF</th>
                    <th>DIRETORIA</th>
                    <th>SALA DE REUNIÃO</th>                                               
                </tr>
            </thead>

            <tbody>
                <tr>                    
                    <td>2 notebooks</td>
                    <td>1 roteador wireless</td>
                    <td>1 switch <br> 8 computadores</td>
                    <td>2 computadores <br> 1 servidor <br> 1 switch</td>
                    <td>5 notebooks</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Abaixo anexamos umas imagens mostrando a simulação que construimos da nossa agência de viagens Viage Seguro.</p>

        <div class="rede_local">
            <p>Viewport da Rede Local:</p>
            <img src="./imagens/rede_local1.jpg" alt="">
            <p>Teste de conecção entre as máquinas utilizando Ping:</p>
            <img src="./imagens/teste_ping1.jpg" alt="">
            <p>Teste do servidor HTTP entre o servidor e um notebook:</p>
            <img src="./imagens/teste_dns_http1.jpg" alt="">
        </div>
       


    </div>

</body>
</html>
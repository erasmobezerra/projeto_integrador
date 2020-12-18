<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Login</title>
    <link rel="stylesheet" href="css/style_login_cadastro.css">
</head>
<body>
    <div id="corpo-form">

        <h1>Entrar</h1>

        <form method="POST" action="login.php">
            <input type="email" name="email_usuario" placeholder="Seu Usuário">
            <input type="password" name="senha_usuario" placeholder="Sua Senha">
            <input type="submit" value="ACESSAR">
            <a href="cadastro.php">Ainda não é inscrito? &nbsp<strong>Cadastre-se<strong></a>
        </form>
        
        <div class="aviso_login">
            <?php
                if(isset($_SESSION['campos_em_aberto'])) {
                    echo $_SESSION['campos_em_aberto'];
                    unset($_SESSION['campos_em_aberto']);
                
                } else  if(isset($_SESSION['nao_autenticado'])) {
                    echo $_SESSION['nao_autenticado'];
                    unset($_SESSION['nao_autenticado']);
                } 
            ?>
        </div>
    </div>

</body>
</html>

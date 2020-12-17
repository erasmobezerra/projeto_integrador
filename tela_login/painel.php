<?php
include('verifica_login.php');
?>


<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Olá, <?php echo $_SESSION['nome'];?></h2>

<h3>Caso deseje sair desta sessão, clique em &nbsp<a href="logout.php">Logout</a></h3>
    
</body>
</html>
 
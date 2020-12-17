<?php
session_start();
include("conexao.php");

$nome = filter_input(INPUT_POST,'nome');
$telefone = filter_input(INPUT_POST,'telefone');
$email = filter_input(INPUT_POST,'email');
$senha = filter_input(INPUT_POST,'senha');

	if ($nome && $telefone && $email && $senha) {
		
		$sql = "SELECT count(*) AS total FROM usuarios WHERE email = '$email'";
		$result = mysqli_query($conexao, $sql);
		$row = mysqli_fetch_assoc($result);

		if($row['total'] > 0) {
			$_SESSION['usuario_existe'] = "O usuário escolhido já existe";
			header('Location: cadastro.php');
			exit;

		} else {

			$sql = "INSERT INTO usuarios (nome, telefone, email, senha) VALUES ('$nome', '$telefone', '$email', md5('$senha'))";
			$resultado_usuario = mysqli_query($conexao, $sql);
	
			if(mysqli_insert_id($conexao)){
				$_SESSION['msg'] = "Usuário cadastrado com sucesso";
				header("Location: cadastro.php");
	
			}else{
				$_SESSION['msg'] = "Usuário não foi cadastrado com sucesso";
				header("Location: cadastro.php");
			}
	
			$conexao->close();
			header('Location: cadastro.php');
			exit;
	
		} 

	} else {
		$_SESSION['campo_em_aberto'] = "<p style='color:green;'>Há campo(s) em aberto! Tente novamente.</p>";
		header("Location: cadastro.php");
		exit;
	}			

?>
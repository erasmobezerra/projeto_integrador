<?php
session_start();
include("conexao.php");

$nome_usuario = filter_input(INPUT_POST,'nome_usuario');
$telefone_usuario = filter_input(INPUT_POST,'telefone_usuario');
$email_usuario = filter_input(INPUT_POST,'email_usuario');
$senha_usuario = filter_input(INPUT_POST,'senha_usuario');

	if ($nome_usuario && $telefone_usuario && $email_usuario && $senha_usuario) {
		
		$sql = "SELECT count(*) AS total FROM usuarios WHERE email_usuario = '$email_usuario'";
		$result = mysqli_query($conexao, $sql);
		$row = mysqli_fetch_assoc($result);

		if($row['total'] > 0) {
			$_SESSION['usuario_existe'] = "O usuário escolhido já existe";
			header('Location: cadastro.php');
			exit;

		} else {

			$sql = "INSERT INTO usuarios (nome_usuario, telefone_usuario, email_usuario, senha_usuario, data_cadastro) VALUES ('$nome_usuario', '$telefone_usuario', '$email_usuario', md5('$senha_usuario'), NOW())";
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
		$_SESSION['campo_em_aberto'] = "Há campo(s) em aberto! Tente novamente.";
		header("Location: cadastro.php");
		exit;
	}			

?>
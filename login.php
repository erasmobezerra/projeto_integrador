<?php
session_start();
include('conexao.php');

$email_usuario = mysqli_real_escape_string($conexao, $_POST['email_usuario']);
$senha_usuario = mysqli_real_escape_string($conexao, $_POST['senha_usuario']);


if($email_usuario && $senha_usuario) {
	
	$query = "SELECT nome_usuario FROM usuarios WHERE email_usuario = '{$email_usuario}' and senha_usuario = md5('{$senha_usuario}')";

	$result = mysqli_query($conexao, $query);

	$row = mysqli_num_rows($result);

	if($row == 1) {
		$email_bd = mysqli_fetch_assoc($result);
		$_SESSION['nome_usuario'] = $email_bd['nome_usuario'];
		header('Location: home.php');
		exit();

	} else {
		$_SESSION['nao_autenticado'] = "ERRO: Usuário ou senha inválidos.";
		header('Location: index.php');
		exit();
	}
	
} else {
	$_SESSION['campos_em_aberto'] = "Há campo(s) em aberto! Tente novamente.";
	header("Location: index.php");
	exit;
}

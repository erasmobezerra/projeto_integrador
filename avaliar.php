<?php
session_start();

include("conexao.php");

$nome_avaliador = filter_input(INPUT_POST,'nome_avaliador');
$email_avaliador = filter_input(INPUT_POST,'email_avaliador');
$avaliacao = filter_input(INPUT_POST,'avaliacao');

if ($nome_avaliador && $email_avaliador && $avaliacao) {

    $sql = "SELECT count(*) AS total FROM avaliacao WHERE email_avaliador = '$email_avaliador'";
	$result = mysqli_query($conexao, $sql);
	$row = mysqli_fetch_assoc($result);

	if($row['total'] > 0) {
		$_SESSION['usuario_ja_avaliou'] = "Este usuário já fez uma avaliação.";
		header('Location: avaliacao.php');
		exit;

	} else {

        $sql = "INSERT INTO avaliacao (nome_avaliador, email_avaliador, avaliacao) VALUES ('$nome_avaliador', '$email_avaliador', '$avaliacao')";
        $resultado_usuario = mysqli_query($conexao, $sql);
        
        if(mysqli_insert_id($conexao)){
            $_SESSION['msg_enviada'] = "Avaliação registrada com sucesso :-)";
            header("Location: avaliacao.php");
        
        }else{
            $_SESSION['msg_enviada'] = "Desculpe, algo deu errado :-(";
            header("Location: avaliacao.php");
        }
        
        $conexao->close();
        header('Location: avaliacao.php');
        exit;
    }

} else {

    $_SESSION['campo_em_aberto'] = "Há campo(s) em aberto! Tente novamente.";
    header("Location: avaliacao.php");
	exit;
}
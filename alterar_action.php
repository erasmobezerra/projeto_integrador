<?php
require 'config.php';

$id_avaliador = filter_input(INPUT_POST, 'id_avaliador');
$nome_usuario = filter_input(INPUT_POST,'nome_usuario');
$telefone_usuario = filter_input(INPUT_POST,'telefone_usuario');
$email_usuario = filter_input(INPUT_POST,'email_usuario');
$senha_usuario = filter_input(INPUT_POST,'senha_usuario');



if($id_avaliador && $nome_avaliador && $email_avaliador && $avaliacao) {

    $sql = $pdo->prepare("UPDATE avaliacao SET nome_avaliador = :nome_avaliador, email_avaliador = :email_avaliador, avaliacao = :avaliacao  WHERE id_avaliador = :id_avaliador");
    
    $sql->bindValue(':nome_avaliador', $nome_avaliador); 
    $sql->bindValue(':email_avaliador', $email_avaliador);
    $sql->bindValue(':avaliacao', $avaliacao);
    $sql->bindValue(':id_avaliador', $id_avaliador);
    $sql->execute();
    

    header("Location: consulta.php");
    exit;

} else {
    header('Location: avaliacao.php');
    exit;
}
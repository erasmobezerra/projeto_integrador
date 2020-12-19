<?php
require 'config.php';

$id_avaliador = filter_input(INPUT_POST, 'id_avaliador');
$nome_avaliador = filter_input(INPUT_POST,'nome_avaliador');
$email_avaliador = filter_input(INPUT_POST,'email_avaliador');
$avaliacao = filter_input(INPUT_POST,'avaliacao');


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
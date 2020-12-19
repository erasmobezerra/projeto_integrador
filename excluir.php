<?php 
require 'config.php';


$id_avaliador = filter_input(INPUT_GET, 'id_avaliador');
if($id_avaliador){

   $sql = $pdo->prepare("DELETE FROM avaliacao WHERE id_avaliador = :id_avaliador");
   $sql->bindValue(':id_avaliador', $id_avaliador);
   $sql->execute();
    
} 

header('Location: consulta.php');
exit;

?>

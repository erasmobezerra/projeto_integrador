<?php
//informa ao script que o arquivo fpdf.php e o config.php é requerido
require './fpdf/fpdf.php'; 
require 'config.php';

if (!$pdo) {
    echo "Erro ao conectar ao Banco de Dados: ".mysqli_connect_errno(); 
}

$pdf = new FPDF('P','pt','A4');
$pdf->AddPage();
$pdf->Image('./imagens/logo2.jpg');
$pdf->ln(20);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,utf8_decode("Relatório de Avaliações"),0,0,'C');
$pdf->ln(20);

// gerando relatório por ID
$id_avaliador = filter_input(INPUT_GET, 'id_avaliador');

$sql = $pdo->prepare("SELECT * FROM avaliacao WHERE id_avaliador = :id_avaliador");
$sql->bindValue(':id_avaliador', $id_avaliador);
$sql->execute();

while ($info = $sql->fetch( PDO::FETCH_ASSOC )) {
    $pdf->SetFont('arial','B',12);
    $pdf->Cell(30,20,"ID: ",0,0,'L');
    $pdf->setFont('arial','',12);
    $pdf->Cell(0,20,$info['id_avaliador'],0,1,'L');

    $pdf->SetFont('arial','B',12);
    $pdf->Cell(100,20,"Nome: ",0,0,'L');
    $pdf->setFont('arial','',12);
    $pdf->Cell(0,20,$info['nome_avaliador'],0,1,'L');

    $pdf->SetFont('arial','B',12);
    $pdf->Cell(100,20,"Email: ",0,0,'L');
    $pdf->setFont('arial','',12);
    $pdf->Cell(0,20,$info['email_avaliador'],0,1,'L');    
   
    $pdf->SetFont('arial','B',12);
    $pdf->Cell(100,20,utf8_decode("Avaliação: "),0,0,'L');
    $pdf->setFont('arial','',12);
    $pdf->Cell(0,20,$info['avaliacao'],0,1,'L');
     
}

//gerando o arquivo boletim.pdf
$pdf->Output('avaliacao.pdf', 'I');


// Gerando relatório completo da base de dados
$listas = [];
$sql = $pdo->query("SELECT * FROM avaliacao");
if($sql->rowCount() > 0) {
    $listas = $sql->fetchAll(PDO::FETCH_ASSOC);    
}

foreach ($listas as $lista) {
    $pdf->SetFont('arial','B',12);
    $pdf->Cell(30,20,"ID: ",0,0,'L');
    $pdf->setFont('arial','',12);
    $pdf->Cell(0,20,$lista['id_avaliador'],0,1,'L');

    $pdf->SetFont('arial','B',12);
    $pdf->Cell(100,20,"Nome: ",0,0,'L');
    $pdf->setFont('arial','',12);
    $pdf->Cell(0,20,$lista['nome_avaliador'],0,1,'L');

    $pdf->SetFont('arial','B',12);
    $pdf->Cell(100,20,"Email: ",0,0,'L');
    $pdf->setFont('arial','',12);
    $pdf->Cell(0,20,$lista['email_avaliador'],0,1,'L');    
    $pdf->Ln(20);

    $pdf->SetFont('arial','B',12);
    $pdf->Cell(100,20,utf8_decode("Avaliação: "),0,0,'L');
    $pdf->setFont('arial','',12);
    $pdf->Cell(0,20,$lista['avaliacao'],0,1,'L');
}

//gerando o arquivo boletim.pdf
$pdf->Output('avaliacoes.pdf', 'I');

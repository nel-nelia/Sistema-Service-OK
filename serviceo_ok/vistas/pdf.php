<?php
require('../fpdf/fpdf.php');


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
   
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reportes SERVICE OK',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(80, 10, 'Nombre', 1,0,'C',0);
    $this->Cell(70, 10, 'Descripcion', 1,0,'C',0);
    $this->Cell(40, 10, 'Estado', 1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}


//tareermos datos de la bd
require 'conexion.php';
$consulta = "SELECT * FROM Actividad";
$resultado = $con->query($consulta);


$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(80, 10, $row['Nombrea'], 1,0,'C',0);
    $pdf->Cell(70, 10, $row['Descripcion'], 1,0,'C',0);
    $pdf->Cell(40, 10, $row['FlagActivo'], 1,1,'C',0);
    
}

$pdf->Output();
?>
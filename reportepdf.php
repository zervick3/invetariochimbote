<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('metal.png',0,0,50);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Movernos a la derecha
    $this->Cell(65);
    // Título
    $this->Cell(60,10,'Inventario Chimbote',0,0,'C');
    
    // Salto de línea
    $this->Ln(30);
    $this->SetFont('Arial','B',10);
    $this->Cell(150,10,'Descripcion ',1,0,'', 0);
    $this->Cell(15,10,'Cant',1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'cn.php';



$consulta="SELECT * FROM tiendachimbote ORDER BY Producto";
$resultado = $conexion->query($consulta);
$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
while($row = $resultado->fetch_assoc()){
    $pdf->Cell(150,10,$row["producto"],1,0,'', 0);
    $pdf->Cell(15,10,$row["cantidad"],1,1,'C',0);

}

$pdf->Output();
?>
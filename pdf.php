<?php
if(!empty($_POST['submit'])){
    $roll=$_POST['roll'];
    $fastname=$_POST['fast'];
    $lastname=$_POST['last'];
    $email=$_POST['mail'];

    require("fpdf184/fpdf.php");

    $pdf=new FPDF();
    $pdf->AddPage();

    $pdf->SetFont("Arial","",12);
    $pdf->Cell(0,10,"Registration Details",1,1,'C');

    $pdf->Cell(20,10,"Roll No",1,0);
    $pdf->Cell(45,10,"Fast Name",1,0);
    $pdf->Cell(45,10,"Last Name",1,0);
    $pdf->Cell(0,10,"Email",1,1);

    $pdf->Cell(20,10,$roll,1,0);
    $pdf->Cell(45,10,$fastname,1,0);
    $pdf->Cell(45,10,$lastname,1,0);
    $pdf->Cell(0,10,$email,1,0);

    $file=time(). '.pdf';
    $pdf->output($file,'D');
}
?>
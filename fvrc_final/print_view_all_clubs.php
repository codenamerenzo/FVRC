<?php
	$Title='';
	$size=63;
	require('fpdf.php');
	$pdf=new FPDF();
	
	$objConnect = mysql_connect("localhost","root","") or die("Error:Please check your database username & password");
	$objDB = mysql_select_db("fvrc");	
	session_start();
	
	//$strSQL = "Select * From `reports`";
	
	$pdf->AddPage();
		$pdf->SetFont("arial","",12);
		$pdf->Cell(0,10,"Federation of Volunteers thru Radio Communications {$Title}",0,1,'C');
		$pdf->SetFont("arial","",12);
		$pdf->Cell(0,10,"All Clubs",0,1,'C');
		
		
	$pdf->Cell(22);
	$pdf->SetFontSize(8);
	
	$pdf->Cell(57);
	
	$result2=mysql_query("select date_format(now(), '%W, %M %d, %Y') as date");
	while( $row=mysql_fetch_array($result2) )
	{
		$pdf->Write(5,$row['date'],'C');
	}
	
	$pdf->Ln();
	$pdf->Ln();
	$pdf->Ln();
	$pdf->Cell($size,8,"Club Name",1,0,'C');
	$pdf->Cell($size,8,"Leader",1,0,'C');
	$pdf->Cell($size,8,"Total Number of Members",1,1,'C');
	
	
	$result2=mysql_query("SELECT * from `clubs`");
	while( $row=mysql_fetch_array($result2) )
	{
		$pdf->Cell($size,8,$row['club_name'],1,0,'C');
		$pdf->Cell($size,8,$row['club_leader'],1,0,'C');
		$pdf->Cell($size,8,$row['club_member'],1,1,'C');
	}
	$pdf->output();
?>
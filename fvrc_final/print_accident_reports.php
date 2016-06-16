<?php
	$Title='';
	$size=25;
	$height=5;
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
		$pdf->Cell(0,10,"Accident Reports",0,1,'C');
		
		
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

	
	$result2=mysql_query("SELECT * from `reports`");
	while($row=mysql_fetch_array($result2)){
		
		$pdf->cell($size,$height,"Status:",0,0);
		$pdf->cell(70,$height,$row['status'],0,1);
		
		$pdf->cell($size,$height,"Date:",0,0);
		$pdf->cell(70,$height,$row['date'],0,0);
		
		$pdf->cell($size,$height,"Category:",0,0);
		$pdf->cell($size,$height,$row['report_category'],0,1);
		
		$pdf->cell($size,$height,"Firstname:",0,0);
		$pdf->cell(70,$height,$row['first_name'],0,0);
		
		$pdf->cell($size,$height,"Lastname:",0,0);
		$pdf->cell($size,$height,$row['last_name'],0,1);
		
		$pdf->cell($size,$height,"Email Address:",0,0);
		$pdf->cell(70,$height,$row['email_address'],0,0);
		
		$pdf->cell($size,$height,"Contact No:",0,0);
		$pdf->cell($size,$height,$row['contact'],0,1);
		
		$pdf->cell($size,$height,"Content:",0,0);
		$pdf->multicell(0,$height,$row['reoprt_content'],0,'L',0);
		
$pdf->cell(0,$height,"________________________________________________________________________________________________________________",0,1,'C');

		
	}
	
	
				
	$pdf->Ln();
		
		
	$pdf->output();
?>
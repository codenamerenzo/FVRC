<?php
	$Title='';
	$size=27;
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
		$pdf->Cell(0,10,"All Registered Members",0,1,'C');
		
		
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
	$pdf->Cell($size,8,"ID No.",1,0,'C');
	$pdf->Cell($size,8,"Username",1,0,'C');
	$pdf->Cell($size,8,"Firstname",1,0,'C');
	$pdf->Cell($size,8,"Lastname",1,0,'C');
	$pdf->Cell($size,8,"Middlename",1,0,'C');
	$pdf->Cell($size,8,"Gender",1,0,'C');
	$pdf->Cell($size,8,"Position",1,1,'C');
	
	
	$result2=mysql_query("SELECT * from `accounts` INNER JOIN `volunteer_information` ON `accounts`.`id_no`=`volunteer_information`.`id_no` where `$_SESSION[category]`='$_SESSION[keyword]'");
	while( $row=mysql_fetch_array($result2) )
	{
		$pdf->Cell($size,8,$row['id_no'],1,0,'C');
		$pdf->Cell($size,8,$row['username'],1,0,'C');
		$pdf->Cell($size,8,$row['firstname'],1,0,'C');
		$pdf->Cell($size,8,$row['lastname'],1,0,'C');
		$pdf->Cell($size,8,$row['middlename'],1,0,'C');
		$pdf->Cell($size,8,$row['gender'],1,0,'C');
		$pdf->Cell($size,8,$row['position'],1,1,'C');
	}
	$pdf->output();
?>
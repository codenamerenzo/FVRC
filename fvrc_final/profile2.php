<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('fvrc', $con);

$query = "SELECT * FROM volunteer_information";
$rs = mysql_query($query, $con) or die(mysql_error());
$row_rs = mysql_fetch_assoc($rs);
$totalRows = mysql_num_rows($rs)+2;

if($totalRows<10){
$zeros="00000";
}
else if($totalRows>=10 && $totalRows<=100){
$zeros="0000";
}
else if($totalRows>=100 && $totalRows<=1000){
$zeros="000";
}
else if($totalRows>=1000 && $totalRows<=10000){
$zeros="00";
}
echo $apec_id="FVRC-".$zeros.$totalRows;

?>

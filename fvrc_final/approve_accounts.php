<?php
	include('conn.php');
	if(isset($_GET['id']))
	{
	$id=$_GET['id'];
	echo $_GET['id'];
	
	$approve="approve";
	$pending="pending";
	
	$query1=mysql_query("select * from accounts where id_no='$id'");
	
	
	$query2=mysql_fetch_array($query1);
	
	if($query2['account_status']=="pending"){
		
		$query3=mysql_query("UPDATE `accounts` SET `account_status`='$approve' WHERE `id_no`='$id'");
		//$query3=mysql_query("UPDATE `accounts` SET `account_status`='$approve' WHERE `id_no` LIKE '$id'");
	}
	if($query2['account_status']=="approve"){
		
		$query3=mysql_query("UPDATE `accounts` SET `account_status`='$pending' WHERE `id_no`='$id'");
	}
	
	
	if($query2)
	{
	header('location:manage_accounts.php');
	}else{echo "failed";}
	}
?>

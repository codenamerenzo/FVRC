<?php
	include'conn.php';

	$query3=mysql_query("UPDATE `reports` SET `status`='$_POST[status]' WHERE `id` like '$_POST[id_number]'");
		
		header('location:accident_reports.php');
		
?>
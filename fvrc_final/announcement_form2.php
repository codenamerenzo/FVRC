<?php
	include('conn.php');
	echo $_POST['date'];
	echo '<br>';
	echo $_POST['subject'];
	echo '<br>';
		echo $_POST['content'];
	echo '<br>';
	$member=1;
	
		$sql="INSERT INTO `annoucement`(`date`,`subject`,`content`) values ('$_POST[date]','$_POST[subject]','$_POST[content]')";
		if(!mysql_query($sql)){
		  die('Error: ' . mysql_error());
		  }
		  header('location: fvrc_president_login.php');
	
	
	
  
?>
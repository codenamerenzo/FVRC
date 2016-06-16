<?php
	include('conn.php');
	echo $_POST['club_name'];
	echo '<br>';
	echo $_POST['club_leader'];
	echo '<br>';
	$member=1;
	$sql2=mysql_query("SELECT * FROM `clubs`");
	$row_clubs=mysql_fetch_array($sql2);
	echo $row_clubs['club_member'];
	
	if($_POST['club_name']!= $row_clubs['club_name']){
		$select=mysql_query("SELECT `id_no` FROM `accounts` WHERE `username`='$_POST[club_leader]'");
		$row=mysql_fetch_array($select);
		
		$sql="INSERT INTO `clubs`(`club_name`,`club_leader`,`club_member`) values ('$_POST[club_name]','$_POST[club_leader]','$member')";
		$sql2="UPDATE `accounts` SET `club_name`='$_POST[club_name]' where `username`='$_POST[club_leader]'";
		$sql3="UPDATE `volunteer_information` SET `club_name`='$_POST[club_name]' where `id_no`='$row[id_no]'";
		if(!mysql_query($sql)){
		  die('Error: ' . mysql_error());
		  }
		  if(!mysql_query($sql2)){
		  die('Error: ' . mysql_error());
		  }
		  if(!mysql_query($sql3)){
		  die('Error: ' . mysql_error());
		  }
		  header('location: club_createClub.php');
	}
	
	
  
?>
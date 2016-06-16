<?php
	include('conn.php');
	session_start();
	
	echo $_SESSION['SESS_MEMBER_ID'];
	echo $_GET['id'];
	
	$sql=mysql_query("Select * from `accounts` where `id_no`='$_SESSION[SESS_MEMBER_ID]'");
	$sql2=mysql_query("Select * from `clubs` where `club_name`='$_GET[id]'");
	
	$row=mysql_fetch_array($sql);
	$row2=mysql_fetch_array($sql2);
	
	$club_member=$row2['club_member'];
	$club_member=$club_member++;
	echo $club_member;
		
		$query5=mysql_query("UPDATE `accounts` SET `club_name`='$_GET[id]' WHERE `id_no` like '%$_SESSION[SESS_MEMBER_ID]%'");
		$query3=mysql_query("UPDATE `volunteer_information` SET `club_name`='$_GET[id]' WHERE `id_no` like '%$_SESSION[SESS_MEMBER_ID]%'");
		$query4=mysql_query("UPDATE `clubs` SET `club_member`='$club_member' WHERE `club_name`='$_GET[id]'");
						
			
			if (!mysql_query($query3))
				  {
				 // die('Error: ' . mysql_error());
				  }
			if (!mysql_query($query4))
				  {
				  //die('Error: ' . mysql_error());
				  }
	if (!mysql_query($query5))
				  {
				  //die('Error: ' . mysql_error());
				  }
	
	header('location:club_member_view_all_clubs.php');
	
?>
<?php
	//include('conn.php');
		
		//echo $_POST['date'];
		//echo '<br>';
		//echo $_POST['first_name'];
		//echo '<br>';
		//echo $_POST['last_name'];
		//echo '<br>';
		//echo $_POST['email_address'];
		//echo '<br>';
		//echo $_POST['contact'];
		//echo '<br>';
		//echo $_POST['report_category'];
		//echo '<br>';
		//echo $_POST['report_content'];
		
		$sql="INSERT INTO `reports`(`date`, `first_name`, `last_name`, `email_address`, `contact`, `report_category`, `reoprt_content`) 
		VALUES ('$_POST[date]','$_POST[first_name]','$_POST[last_name]','$_POST[email_address]','$_POST[contact]','$_POST[report_category]','$_POST[report_content]')";
		if (!mysql_query($sql))
			  {
			  die('Error: ' . mysql_error());
			  }
			  header('location: report.php');
		
?>
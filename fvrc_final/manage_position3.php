<html>
	<?php
		include('conn.php');

			echo "testing";
		//echo $_POST['id_number'];
		//echo $_POST['username'];
		//echo $_POST['position_types'];
		
		$query3=mysql_query("UPDATE `accounts` SET `position`='$_POST[position_types]' WHERE `id_no` like '$_POST[id_number]'");
		
		header('location:manage_positions.php');
		
	?>	
</html>
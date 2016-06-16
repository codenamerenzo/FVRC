<?php
include('config.php');
if (!isset($_FILES['Title']['News'])) {
	echo "";
			$Title=$_POST['Title'];
			$News=$_POST['News'];
			
			$save=mysql_query("INSERT INTO update_news (Title, News) VALUES ('$Title','$News')");
			header("location: manage_homepage.php");
								
}
?>

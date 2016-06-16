<?php
	session_start();

	session_destroy();
	 
	 header('Location:login.php');
	 //setcookie("switch","",time()-3600);

?>
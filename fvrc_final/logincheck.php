<html>
	
	<title> FVRC </title>
</html>
<?php
	
	
	//header('location:login.php');
		//<!-- The login script that validates our input data -->
    
    	//Start session
    	session_start();
     
    	//Include database connection details
    	require_once('conn.php');
     
    	//Array to store validation errors
    	$errmsg_arr = array();
     
    	//Validation error flag
    	$errflag = false;
     
    	//Function to sanitize values received from the form. Prevents SQL injection
    	function clean($str) {
    		$str = @trim($str);
    		if(get_magic_quotes_gpc()) {
    			$str = stripslashes($str);
    		}
    		return mysql_real_escape_string($str);
    	}
     
    	//Sanitize the POST values
    	$username = clean($_POST['user']);
    	$password = clean($_POST['pass']);
     
    	//Input Validations
    	if($username == '') {
    		$errmsg_arr[] = 'Username missing';
    		$errflag = true;
    	}
    	if($password == '') {
    		$errmsg_arr[] = 'Password missing';
    		$errflag = true;
    	}
     
    	//If there are input validations, redirect back to the login form
    	if($errflag) {
    		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    		session_write_close();
    		header("location: index.php");
    		exit();
    	}
     
    	//Create query
		$status="approve";
		$member="member";
		$club_leader="club leader";
		$regional_director="regional director";
		$fvrc_president="fvrc president";
    	
		$qry1="SELECT * FROM accounts WHERE username='$username' AND password='$password' AND account_status='$status' AND position='$member'";
		$qry2="SELECT * FROM accounts WHERE username='$username' AND password='$password' AND account_status='$status' AND position='$club_leader'";
		$qry3="SELECT * FROM accounts WHERE username='$username' AND password='$password' AND account_status='$status' AND position='$regional_director'";
		$qry4="SELECT * FROM accounts WHERE username='$username' AND password='$password' AND account_status='$status' AND position='$fvrc_president'";
    	
		$result1=mysql_query($qry1);
		$result2=mysql_query($qry2);
		$result3=mysql_query($qry3);
		$result4=mysql_query($qry4);
     
    	//Check whether the query was successful or not
    	
		if($result1) {
    		if(mysql_num_rows($result1) > 0) {
    			//Login Successful
    			session_regenerate_id();
    			$member = mysql_fetch_assoc($result1);
    			$_SESSION['SESS_MEMBER_ID'] = $member['id_no'];
    			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
    			$_SESSION['SESS_LAST_NAME'] = $member['password'];
    			session_write_close();
    			header("location: club_member_login.php");
    			exit();
    		}
    	}
		
		if($result2) {
    		if(mysql_num_rows($result2) > 0) {
    			//Login Successful
    			session_regenerate_id();
    			$member = mysql_fetch_assoc($result2);
    			$_SESSION['SESS_MEMBER_ID'] = $member['id_no'];
    			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
    			$_SESSION['SESS_LAST_NAME'] = $member['password'];
    			session_write_close();
    			header("location: club_leader_login.php");
    			exit();
    		}
    	}
		
		if($result3) {
    		if(mysql_num_rows($result3) > 0) {
    			//Login Successful
    			session_regenerate_id();
    			$member = mysql_fetch_assoc($result3);
    			$_SESSION['SESS_MEMBER_ID'] = $member['id_no'];
    			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
    			$_SESSION['SESS_LAST_NAME'] = $member['password'];
    			session_write_close();
    			header("location: regional_director_login.php");
    			exit();
    		}
    	}
		
		if($result4) {
    		if(mysql_num_rows($result4) > 0) {
    			//Login Successful
    			session_regenerate_id();
    			$member = mysql_fetch_assoc($result4);
    			$_SESSION['SESS_MEMBER_ID'] = $member['id_no'];
    			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
    			$_SESSION['SESS_LAST_NAME'] = $member['password'];
    			session_write_close();
    			header("location: fvrc_president_login.php");
    			exit();
    		}
    	}else {
    		die("Query failed");
    	}
		

        $_SESSION['WARNING'] = 0;
        header('location:login.php');
?>
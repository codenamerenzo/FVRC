<!DOCTYPE html>
<html lang="en">
<head>
	<!-- FVRC LOGO -->
	<LINK REL="SHORTCUT ICON" HREF="Resources/FVRC logo.PNG">
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>FVRC</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                    <li>
                        <a href="report.php">Reports</a>
                    </li>
                    
                    <li>
                        <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>




  <body class="login-img3-body">

    <div class="container">

      <!--<form class="login-form" action="index.html">    -->  

      <form class="login-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="user" placeholder="Username" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="pass" placeholder="Password" required>
            </div>
            <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Login</button>
            <a href="registration.php" class="btn btn-info btn-lg btn-block">Signup</a>
        </div>
      </form>
          <?php 

   session_start();
    //include'header_navigator.php';

if(isset($_POST['submit'])){
            include'conn.php';

        $status="approve";
        $member="member";
        $club_leader="club leader";
        $regional_director="regional director";
        $fvrc_president="fvrc president";

        $username=$_POST['user'];
        $password=$_POST['pass'];
        
        $qry1="SELECT * FROM accounts WHERE username='$username' AND password='$password' AND account_status='$status' AND position='$member'";
        $qry2="SELECT * FROM accounts WHERE username='$username' AND password='$password' AND account_status='$status' AND position='$club_leader'";
        $qry3="SELECT * FROM accounts WHERE username='$username' AND password='$password' AND account_status='$status' AND position='$regional_director'";
        $qry4="SELECT * FROM accounts WHERE username='$username' AND password='$password' AND account_status='$status' AND position='$fvrc_president'";
        
        $result1=mysql_query($qry1);
        $result2=mysql_query($qry2);
        $result3=mysql_query($qry3);
        $result4=mysql_query($qry4);
        
        if($result1) {
            if(mysql_num_rows($result1) > 0) {
                //Login Successful
                $member = mysql_fetch_assoc($result1);
                $_SESSION['SESS_MEMBER_ID'] = $member['id_no'];
                $_SESSION['SESS_FIRST_NAME'] = $member['username'];
                $_SESSION['SESS_LAST_NAME'] = $member['password'];
                
                $cookie_name="switch";
                $cookie_value="on";
                setcookie($cookie_name, $cookie_value, time()+(86400 * 30),"/");
                
                header("location: club_member_login.php");
                exit();
            }
        }else{
             include'alert_danger.php';
        }
        
        if($result2) {
            if(mysql_num_rows($result2) > 0) {
                //Login Successful
                $member = mysql_fetch_assoc($result2);
                $_SESSION['SESS_MEMBER_ID'] = $member['id_no'];
                $_SESSION['SESS_FIRST_NAME'] = $member['username'];
                $_SESSION['SESS_LAST_NAME'] = $member['password'];
                
                $cookie_name="switch";
                $cookie_value="on";
                setcookie($cookie_name, $cookie_value, time()+(86400 * 30),"/");
                

                header("location: club_leader_login.php");
                exit();
            }
        }else{
             include'alert_danger.php';
        }
        
        if($result3) {
            if(mysql_num_rows($result3) > 0) {
                //Login Successful
                $member = mysql_fetch_assoc($result3);
                $_SESSION['SESS_MEMBER_ID'] = $member['id_no'];
                $_SESSION['SESS_FIRST_NAME'] = $member['username'];
                $_SESSION['SESS_LAST_NAME'] = $member['password'];
                
                $cookie_name="switch";
                $cookie_value="on";
                setcookie($cookie_name, $cookie_value, time()+(86400 * 30),"/");
                
                header("location: regional_director_login.php");
                exit();
            }
        }else{
             include'alert_danger.php';
        }
        
        if($result4) {
            if(mysql_num_rows($result4) > 0) {
                //Login Successful
                $switch=1;
                $member = mysql_fetch_assoc($result4);
                $_SESSION['SESS_MEMBER_ID'] = $member['id_no'];
                $_SESSION['SESS_FIRST_NAME'] = $member['username'];
                $_SESSION['SESS_LAST_NAME'] = $member['password'];
               
                header("location: fvrc_president_login.php");
               
            }
        }else{
             include'alert_danger.php';
        }

        if(!$result1 || !$result2 || !$result3 || !$result4){
            include'alert_danger.php';
        }



            //Create query
       
            // if (!mysql_query($testing)){
//die('Error: ' . mysql_error());
//}else{
//    header('location: fvrc_president_login.php');
//}
        include'alert_danger.php';
        }
     ?>

    </div>
  </body>
</html>

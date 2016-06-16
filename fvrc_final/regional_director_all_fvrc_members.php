<!DOCTYPE html>
<html lang="en">
<?php 
	include('conn.php');
	session_start();
  if(!isset($_SESSION['SESS_MEMBER_ID'])){
      header('location:index.php');
    }
    ?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Regional | Director</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
	 <!--header start-->
      
 
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="regional_director_login.php" class="logo">Regional <span class="lite">Director</span></a>
            <!--logo end-->

           

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username"><?php 
								echo $_SESSION['SESS_FIRST_NAME'];
							?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="regional_director_profile.php"><i class="icon_profile"></i> My Profile</a>
                            </li>

                            <li>
                                <a href="session_ender.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                           
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>        
      <!--header end-->

      <!--sidebar start-->
      <?php
        include'regional_director_sidebar.php';
      ?>  
      <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> FVRC Members</h3>
					<ol class="breadcrumb">
					
						<li><i class="fa fa-home"></i><a href="regional_director_login.php">Home</a></li>
						<li><i class="fa fa-bars"></i><a href="regional_director_all_fvrc_members.php">FVRC Members</a></li>
						<!-- <li><i class="fa fa-square-o"></i>Pages</li> -->
					</ol>
				</div>
			</div>
			
             
			 
			 
			
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                           <select name="category" style="height: 29px; border: 1px grey;">
							
							<option value="username">Username</option>
							<option value="firstname">Firstname</option>
							<option value="lastname">Lastname</option>
							<option value="middlename">Middlename</option>
							<option value="gender">Gender</option>
						   </select>
						   
						   <input class="form-control" placeholder="Search" type="text" name="keyword">
                           <input class="btn btn-primary" style="height: 29px;" type="submit" value="Go" name="searching">
						   
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                

			 
            <!--  Page content goes here-->
			  
			  <br>
			   <header class="panel-heading">
                            All Members of the FVRC 
							
			
							<?php 
							
							if(isset($_POST['searching'])){
		$query_all_fvrc_members=mysql_query("SELECT * from `accounts` INNER JOIN `volunteer_information`
ON `accounts`.`id_no`=`volunteer_information`.`id_no` where `$_POST[category]`='$_POST[keyword]'");

$_SESSION['category']=$_POST['category'];
$_SESSION['keyword']=$_POST['keyword'];
$location="print_all_FVRC_members2.php";
	
	}else{
	$query_all_fvrc_members=mysql_query("SELECT * from `accounts` INNER JOIN `volunteer_information`
ON `accounts`.`id_no`=`volunteer_information`.`id_no`");

$location="print_all_FVRC_members.php";
	}
								
							
								
							?>
                          </header>
                          <div style="background-color: white;" class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>ID No.</th>
                                  <th>Username</th>
                                  <th>Firstname</th>
                                  <th>Lastname</th>
                                  <th>Middlename</th>
                                  <th>Gender</th>
                                  <th>Position</th>
                                </tr>
                              </thead>
							  <?php 
								while($row=mysql_fetch_array($query_all_fvrc_members)){
								
								?>
						  
                              <tbody>
							  
                                <tr>
                                  <td><?php  echo $row['id_no']; ?></td>
                                  <td><?php echo $row['username']; ?></td>
                                  <td><?php echo $row['firstname']; ?></td>
                                  <td><?php echo $row['lastname']; ?></td>
                                  <td><?php echo $row['middlename']; ?></td>
                                  <td><?php echo $row['gender']; ?></td>
                                  <td><?php echo $row['position']; ?></td>
                                </tr>
								 </tbody>
							<?php
							}
							
							if($query_all_fvrc_members === FALSE) { 
								die(mysql_error()); // TODO: better error handling
							}

							?>
                               
                            </table>
							
							
							
                          </div>
					<!-- END -->

                      </section>
                  </div>
              </div>
			  
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<?php 
	include('conn.php');
	session_start();
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Club | Leader</title>

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
            <a href="club_leader_login.php" class="logo">Club <span class="lite">Leader</span></a>
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
                                <a href="club_leader_profile.php"><i class="icon_profile"></i> My Profile</a>
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
           <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
<a class="" href="club_leader_login.php">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                        <a class="" href="club_leader_accident_reports.php">
                          <i class="!icon_genius"></i>
                          <span>Accident Reports</span>
                      </a>
                  </li>       
                  <li class="sub-menu">
                       <a href="javascript:;" class="">
                          <i class="!icon_document_alt"></i>
                          <span>Club</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="club_leader_createClub.php">Create Club</a></li>                          
                          <li><a class="" href="club_leader_clubsAndMembers.html">Clubs and Members</a></li>
						  <li><a class="" href="club_leader_view_all_clubs.php">View all clubs</a></li>
                      </ul>
                  </li>
				  
				  <li>                     
                      <a class="" href="club_leader_all_fvrc_members.php">
                          <i class="!icon_piechart"></i>
                          <span>FVRC Members</span>
                          
                      </a>
                                         
                  </li>
				  
                  <li>
                      <a class="" href="club_leader_manage_accounts.php">
                          <i class="!icon_genius"></i>
                          <span>Manage Accounts</span>
                      </a>
                  </li>
				  
                  <li>                     
                      <a class="" href="club_leader_manage_positions.php">
                          <i class="!icon_piechart"></i>
                          <span>Manage Position</span>
                          
                      </a>
                                         
                  </li>
				  
				  <li>                     
                      <a class="" href="club_leader_manage_homepage.php">
                          <i class="!icon_piechart"></i>
                          <span>Manage Home Page</span>
                          
                      </a>
                                         
                  </li>
				   
                   <!--          
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="!icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="basic_table.html">Basic Table</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="!icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="profile.html">Profile</a></li>
                          <li><a class="" href="login.html"><span>Login Page</span></a></li>
                          <li><a class="" href="all_fvrc_members.php">Blank Page</a></li>
                          <li><a class="" href="404.html">404 Error</a></li>
                      </ul>
                  </li>
                  -->
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Manage Positions</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="club_leader_login.php">Home</a></li>
						<li><i class="fa fa-bars"></i><a href="club_leader_manage_positions.php">Manage Positions</a></li>
						<!-- <li><i class="fa fa-square-o"></i>Pages</li> -->
					</ol>
				</div>
			</div>
              <!-- page start-->
			 
			 
			 <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                           <select name="category" style="height: 29px; border: 1px grey;">
							
							<option value="username">Username</option>
							<option value="password">Password</option>
							<option value="position">Current Position</option>
							
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
                            All accounts with their respective positions
							<?php 
								if(isset($_POST['searching'])){
									$query1=mysql_query("SELECT * from `accounts` where `$_POST[category]` like '%$_POST[keyword]%'");
									$_SESSION['category']=$_POST['category'];
								$_SESSION['keyword']=$_POST['keyword'];
								}else{
								$query1=mysql_query("SELECT * from `accounts`");		
								}
								
								
							?>
                          </header>
                          <div style="background-color: white;" class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Username</th>
                                  <th>Password</th>
                                  <th>Current Position</th>
                                  <th>Update</th>
                                </tr>
                              </thead>
							  <?php 
								while($row=mysql_fetch_array($query1)){
								
								?>
						  
                              <tbody>
							  
                                <tr>
                                  <td><?php  echo $row['id_no']; ?></td>
                                  <td><?php echo $row['username']; ?></td>
                                  <td><?php echo $row['password']; ?></td>
                                  <td><?php echo $row['position']; ?></td>
                               <?php  echo '<td class="">'."<a href='manage_position2.php?id=".$row['id_no']."'>Edit</a>".'</td>'.'</tr>' ?>
                                  
                                </tr>
								 </tbody>
							<?php
							}
							
							if($query1 === FALSE) { 
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

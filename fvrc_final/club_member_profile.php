<!DOCTYPE html>
<html lang="en">
<?php 
	include('conn.php');
	session_start();
  if(!isset($_SESSION['SESS_MEMBER_ID'])){
      header('location:index.php');
    }
    ?>
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Club | Member</title>

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
                <div class="icon-reorder tooltips" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="club_member_login.php" class="logo">FVRC <span class="lite">Member</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

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
                                <a href="club_member_profile.php"><i class="icon_profile"></i> My Profile</a>
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
<a class="" href="club_member_login.php">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                       <a href="javascript:;" class="">
                          <i class="!icon_document_alt"></i>
                          <span>Club</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="club_member_clubsAndMembers.php">Clubs and Members</a></li>
              <li><a class="" href="club_member_view_all_clubs.php">View all clubs</a></li>
                      </ul>
                  </li>

                   <li>                     
                      <a class="" href="club_member_all_fvrc_members.php">
                          <i class="!icon_piechart"></i>
                          <span>FVRC Members</span>
                          
                      </a>
                                         
                  </li>

				  <li class="sub-menu">
                        <a class="" href="club_member_accident_reports.php">
                          <i class="!icon_genius"></i>
                          <span>Incident Reports</span>
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
					<h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="club_member_login.php">Home</a></li>
						<li><i class="icon_documents_alt"></i>Pages</li>
						<li><i class="fa fa-user-md"></i>Profile</li>
					</ol>
				</div>
			</div>
              <div class="row">
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <!-- HERE -->
							  <?php 
								//$query1=mysql_query("SELECT * from `accounts`,`volunteer_information` where `id_no`='$_SESSION[SESS_MEMBER_ID]'");
								$query_account=mysql_query("SELECT * from `accounts` where `id_no`='$_SESSION[SESS_MEMBER_ID]'");
								$query_information=mysql_query("SELECT * from `volunteer_information` where `id_no`='$_SESSION[SESS_MEMBER_ID]'");
								$query_contact=mysql_query("SELECT * from `volunteer_contact` where `id_no`='$_SESSION[SESS_MEMBER_ID]'");
								$query_resources=mysql_query("SELECT * from `volunteer_resources` where `id_no`='$_SESSION[SESS_MEMBER_ID]'");
								$query_skills=mysql_query("SELECT * from `volunteer_skills` where `id_no`='$_SESSION[SESS_MEMBER_ID]'");
								//white($row=mysql_fetch_array($query1)){
								 
								$row_account=mysql_fetch_array($query_account);
								$row_information=mysql_fetch_array($query_information);
								$row_contact=mysql_fetch_array($query_contact);
								$row_resources=mysql_fetch_array($query_resources);
								$row_skills=mysql_fetch_array($query_skills);
								
								
								
								?>
							  <h4><?php echo $row_information['firstname']." ".$row_information['lastname']; ?></h4>               
                              <div class="follow-ava">
                                  <img src="img/profile-widget-avatar.jpg" alt="">
                              </div>
                              <h6><?php echo $row_account['position']; ?></h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p><?php echo "ID No.: ".$row_account['id_no']; ?></p>
                                <p><?php echo "Contact No.: ".$row_information['cellphone_no'];?></p>
								<p><?php echo "Email Ad.: ".$row_contact['e-mail'];?></i></p>
                               
                            </div>
							<!--
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-comments fa-2x"> </i><br>
											  
											  Contrary to popular belief, Lorem Ipsum is not simply
                                          </li>
										   
                                      </ul>
                            </div>
							-->
						<!--
						<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-bell fa-2x"> </i><br>
											  
											  Contrary to popular belief, Lorem Ipsum is not simply 
                                          </li>
										   
                                      </ul>
                            </div>
							<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-tachometer fa-2x"> </i><br>
											  
											  Contrary to popular belief, Lorem Ipsum is not simply
                                          </li>
										   
                                      </ul>
                            </div>
							-->
                          </div>
                    </div>
                </div>
              </div>
              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <header class="panel-heading tab-bg-info">
                              <ul class="nav nav-tabs">
								
                                  <li>
                                      <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Background Profile
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Edit Background Profile
                                      </a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="recent-activity" class="tab-pane active">
                                      <div class="profile-activity">                                          
                                          
                                      </div>
                                  </div>
                                  <!-- profile -->
                                  <div id="profile" class="tab-pane">
                                    <section class="panel">
                                      <!--
									  <div class="bio-graph-heading">
                                                Hello I’m Jenifer Smith, a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.
                                      </div>
									  -->
                                      <div class="panel-body bio-graph-info">
                                          <h1>Background Profile</h1>
                                          <div class="row">
                                              <div class="bio-row">
                                                  <p><span>ID No.</span>: <?php echo $row_account['id_no']; ?> </p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span></span></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Firstname</span>: <?php echo $row_information['firstname']; ?></p>
                                              </div>                                              
                                              <div class="bio-row">
                                                  <p><span>Lastname</span>: <?php echo $row_information['lastname']; ?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Middlename</span>: <?php echo $row_information['middlename']; ?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Maidenname</span>: <?php echo $row_information['maidenname']; ?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Gender</span>: <?php echo $row_information['gender']; ?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Marital status</span>: <?php echo $row_information['status']; ?></p>
                                              </div>
                                               <div class="bio-row">
                                                  <p><span>Date of birth</span>:  <?php echo $row_information['date_of_birth']; ?></p>
                                              </div>
											   <div class="bio-row">
                                                  <p><span>Place of birth</span>:  <?php echo $row_information['place_of_birth']; ?></p>
                                               </div>
											   <div class="bio-row">
                                                  <p><span>Citizenship</span>:  <?php echo $row_information['citizenship']; ?></p>
                                               </div>
											   <div class="bio-row">
                                                  <p><span>Club name</span>:  <?php echo $row_information['club_name']; ?></p>
                                               </div>
											   <div class="bio-row">
                                                  <p><span>Civic Call Sign</span>:  <?php echo $row_information['civic_call_sign']; ?></p>
                                               </div>
											   <div class="bio-row">
                                                  <p><span>FVRC Call Sign</span>:  <?php echo $row_information['fvrc_call_sign']; ?></p>
                                               </div> 
										
											   <div class="bio-row">
                                                  <p><span>Date registered</span>:  <?php echo $row_information['date_registered']; ?></p>
                                               </div>
											   <div class="bio-row">
                                                  <p><span>Religion</span>:  <?php echo $row_information['religion']; ?></p>
                                               </div>
											   <div class="bio-row">
                                                  <p><span>Blood type</span>:  <?php echo $row_information['blood_type']; ?></p>
                                               </div>
											   <div class="bio-row">
                                                  <p><span>Health issues</span>:  <?php echo $row_information['health_issues']; ?></p>
                                               </div>
											   <div class="bio-row">
                                                  <p><span>Medications</span>:  <?php echo $row_information['medications']; ?></p>
                                               </div>
                                          </div>
                                      </div>
									  
									  <!-- CONTACTS -->
									   <div class="panel-body bio-graph-info">
                                          <h1>Contact Information</h1>
                                          <div class="row">
                                              <div class="bio-row">
                                                  <p><span>Cellphone No.</span>: <?php echo $row_contact['cellphone_no']; ?> </p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Telephone No.</span>: <?php echo $row_contact['telephone_no']; ?> </p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>E-mail Address</span>: <?php echo $row_contact['e-mail']; ?> </p>
                                              </div>
											  
											  <div class="bio-row">
                                                  <p><span>Present Address</span>: <?php echo $row_contact['present_address']; ?> </p>
                                              </div>
											  
											  <div class="bio-row">
                                                  <p><span>Permanent Address</span>: <?php echo $row_contact['permanent_address']; ?> </p>
                                              </div>
											  
											  <div class="bio-row">
                                                  <p><span>Homephone No</span>: <?php echo $row_contact['homephone_no']; ?> </p>
                                              </div>
                                             
                                          </div>
                                      </div>
									  
									   <!-- END CONTACTS -->
									  
									  
									  <!-- SKILLS -->
									   <div class="panel-body bio-graph-info">
                                          <h1>Skills</h1>
                                          <div class="row">
                                              <div class="bio-row">
                                                  <p><span>Dialects Spoken</span>: <?php echo $row_skills['dialects_spoken']; ?> </p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Special Skills</span>: <?php echo $row_skills['special_skills']; ?> </p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Trainings</span>: <?php echo $row_skills['trainings']; ?> </p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span></span></p>
                                              </div>
                                             
                                          </div>
                                      </div>
									  
									   <!-- END SKILLS -->
									  <!-- RESOURCES -->
											<div class="panel-body bio-graph-info">
                                          <h1>Resources</h1>
                                          <div class="row">
                                              <div class="bio-row">
                                                  <p><span>Item name</span>: <?php echo $row_resources['item_name']; ?> </p>
                                              </div>
                                             
                                          </div>
                                      </div>
									  
									  <!-- END RESOURCES -->
									  
                                    </section>
                                      <section>
                                          <div class="row">                                              
                                          </div>
                                      </section>
                                  </div>
                                  <!-- edit-profile -->
                                  <div id="edit-profile" class="tab-pane">
                                    <section class="panel">      
                                    
								<!-- ACCOUNT -->
								 
                                          <div class="panel-body bio-graph-info">
                                              <h1> Background Profile </h1>
                                              <form class="form-horizontal" action="club_member_update_profile.php" method="POST" role="form">                                                  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Username</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="f-name" name="edit_username" value="<?php echo $row_account['username']; ?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Password</label>
                                                      <div class="col-lg-6">
                                                          <input type="password" class="form-control" id="l-name" name="edit_password" value="<?php echo $row_account['password']; ?> ">
                                                      </div>
                                                  </div>
												  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Position</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="l-name" name="edit_position" value="<?php echo $row_account['position']; ?>">
                                                      </div>
                                                  </div>
												  
												  
                                          </div>
								
								<!-- END ACCOUNT -->
								
								<!-- VOLUNTEER INFORMATION-->
                                          <div class="panel-body bio-graph-info">
                                              <h1> Volunteer Information </h1>
                                                                                              
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">First Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="f-name" name="edit_firstname" value="<?php echo $row_information['firstname']; ?>"><br>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Last Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="l-name" name="edit_lastname" value="<?php echo $row_information['lastname']; ?>">
                                                      </div>
                                                  </div>
												  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Middlename</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="l-name" name="edit_middlename" value="<?php echo $row_information['middlename']; ?>">
                                                      </div>
                                                  </div>
												  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Gender</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="l-name"name="edit_gender" value="<?php echo $row_information['gender']; ?>">
                                                      </div>
                                                  </div>
                                                  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Marital Status</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="c-name" name="edit_marital_status" value="<?php echo $row_information['status']; ?>">
                                                      </div>
                                                  </div>
												  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Birthday</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="b-day" name="edit_birthday" value="<?php echo $row_information['date_of_birth']; ?>">
                                                      </div>
                                                  </div>
												  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Place of birth</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="b-day" name="edit_place_of_birth" value="<?php echo $row_information['place_of_birth']; ?>">
                                                      </div>
                                                  </div>
												  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Citizenship</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="occupation" name="edit_citizenship" value="<?php echo $row_information['citizenship']; ?>">
                                                      </div>
                                                  </div>
												  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Club Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="email" name="edit_club_name" value="<?php echo $row_information['club_name']; ?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Civic Call Sign</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="mobile" name="edit_civic_call_sign" value="<?php echo $row_information['civic_call_sign']; ?>">
                                                      </div>
                                                  </div>
                                                  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">FVRC Call Sign</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="mobile" name="edit_fvrc_call_sign" value="<?php echo $row_information['fvrc_call_sign']; ?>">
                                                      </div>
                                                  </div>
                                                  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Date Registered</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="mobile"  value="<?php echo $row_information['date_registered']; ?>">
                                                      </div>
                                                  </div>
                                                  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Religion</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="mobile" name="edit_religion" value="<?php echo $row_information['religion']; ?>">
                                                      </div>
                                                  </div>
												  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Blood type</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="mobile" name="edit_blood_type" value="<?php echo $row_information['blood_type']; ?>">
                                                      </div>
                                                  </div>
												  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Allergies/ Health Issues</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="mobile" name="edit_health_issues" value="<?php echo $row_information['health_issues']; ?>">
                                                      </div>
                                                  </div>
												  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Maintenance/ Medication</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="mobile" name="edit_medication" value="<?php echo $row_information['medications']; ?>">
                                                      </div>
                                                  </div>
                                                  
                                                 
                                          </div>
										  <!-- END VOLUNTEER INFORMATION-->
                                
										<!-- VOLUNTEER CONTACT -->
								 
                                          <div class="panel-body bio-graph-info">
                                              <h1> Volunteer Contact </h1>
                                                                                      
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Cellphone No.</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="f-name" name="edit_cellphone_no" value="<?php echo $row_contact['cellphone_no']; ?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Telephone No.</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="l-name" name="edit_telephone_no" value="<?php echo $row_contact['telephone_no']; ?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">E-mail Address</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="l-name" name="edit_email_address" value="<?php echo $row_contact['e-mail']; ?>">
                                                      </div>
                                                  </div>
												  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Present Address</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="l-name" name="edit_present_address" value="<?php echo $row_contact['present_address']; ?>">
                                                      </div>
                                                  </div>
												  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Permanent Address</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="l-name" name="edit_permanent_address" value="<?php echo $row_contact['permanent_address']; ?>">
                                                      </div>
                                                  </div>
												  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Homephone No.</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="l-name" name="edit_homephone_no" value="<?php echo $row_contact['homephone_no']; ?>">
                                                      </div>
                                                  </div>
												  
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Year of stay</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="l-name" name="edit_year_of_stay" value="<?php echo $row_contact['year_of_stay']; ?>">
                                                      </div>
                                                  </div>
												  
										  </div>
								
								<!-- END VOLUNTEER CONTACT -->
								
								<!-- SKILLS -->
								 
                                          <div class="panel-body bio-graph-info">
                                              <h1> Skills </h1>
                                              
											  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Dialects spoken</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="f-name" name="edit_dialects_spoken" value="<?php echo $row_skills['dialects_spoken']; ?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Special skills</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="l-name" name="edit_special_skills" value="<?php echo $row_skills['special_skills']; ?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Tranings</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="l-name" name="edit_trainings" value="<?php echo $row_skills['trainings']; ?>">
                                                      </div>
                                                  </div>
												  </div>
												  
											
								<!-- END SKILLS -->
								
								<!-- RESOURCES -->
								 
                                          <div class="panel-body bio-graph-info">
                                              <h1> Resources </h1>
                                                                                              
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Item name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="f-name" name="edit_item_name" value="<?php echo $row_resources['item_name']; ?>">
                                                      </div>
                                                  </div>
                                                  
												  
											 <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" class="btn btn-primary">Save</button>
                                                          <button type="button" class="btn btn-danger">Cancel</button>
                                                      </div>
                                                  </div>
                                              </form>	  
                                          
										  </div>
								
								<!-- END RESOURCES -->
								
								
                                      </section>
                                  </div>
                              </div>
                          </div>
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
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery knob -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>


  </body>
</html>

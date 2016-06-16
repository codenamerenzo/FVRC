<?php 
	session_start();
	$_SESSION['firstname_registration']=$_POST['firstname_registration'];
	$_SESSION['lastname_registration']=$_POST['lastname_registration'];
	$_SESSION['middlename_registration']=$_POST['middlename_registration'];
	$_SESSION['maidenname_registration']=$_POST['maidenname_registration'];
	$_SESSION['gender_registration']=$_POST['gender_registration'];
	$_SESSION['marital_status_registration']=$_POST['marital_status_registration'];
	$_SESSION['date_of_birth_registration']=$_POST['date_of_birth_registration'];
	$_SESSION['place_of_birth_registration']=$_POST['place_of_birth_registration'];
	$_SESSION['citizenship_registration']=$_POST['citizenship_registration'];
	$_SESSION['club_name_registration']=$_POST['club_name_registration'];
	$_SESSION['civic_call_sign_registration']=$_POST['civic_call_sign_registration'];
	$_SESSION['fvrc_call_sign_registration']=$_POST['fvrc_call_sign_registration'];
	$_SESSION['religion_registration']=$_POST['religion_registration'];
	$_SESSION['blood_type_registration']=$_POST['blood_type_registration'];
	$_SESSION['health_issues_registration']=$_POST['health_issues_registration'];
	$_SESSION['medications_registration']=$_POST['medications_registration'];
?>
<!DOCTYPE html>
<html lang="en">
<?php 
	include('conn.php');
	
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

   <title>FVRC | Registration (3/3)</title>

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
  

	              <!-- edit-profile -->
                                  <div id="edit-profile" class="tab-pane">
                                    <section  class="panel">                                          
                                          <div style="background-color: #324c57;" class="panel-body bio-graph-info">
										  <center>
                                              <h1 style="color: white;"> VOLUNTEER'S INFORMATION FORM (3/3)</h1>
											  <h5 style="color: white;">Instruction: Please fill all the necessary forms </h5>
                                           </center>
									 </div>
					<!-- first -->
											<div class="panel-body bio-graph-info">
											 <h1>Volunteer Contact Information</h1>
												  <form action="register_volunteer.php" method="POST" class="form-horizontal" role="form">  
												
												
												<br>
                                                  <div class="form-group">
												  
                                                      <label class="col-lg-2 control-label">Cellphone No.:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="cellphone_no_registration" style="width: 100%;" class="form-control" id="f-name" placeholder=" ">
                                                      </div>
												   
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Telephone No.:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="telephone_no_registration" style="width: 100%;" class="form-control" id="l-name">
                                                      </div>
													  

                                                  </div>
												   <div class="form-group">
                                                      <label class="col-lg-2 control-label">E-mail Address:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="email_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													  

                                                  </div>
												   <div class="form-group">
                                                      <label class="col-lg-2 control-label">Present Address:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="present_address_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													  

                                                  </div>
												  
												   <div class="form-group">
                                                      <label class="col-lg-2 control-label">Permanent Address:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="permananet_address_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													 </div>
                                                 
												 <div class="form-group">
                                                      <label class="col-lg-2 control-label">Home Phone No.:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="homephone_no_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													 </div>
                                                 
												 <div class="form-group">
                                                      <label class="col-lg-2 control-label">Years of stay:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="years_of_stay_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													 </div>
                                                 
                                                 

                                                  											  
											  
											
									  
					<!-- END first -->
					
										<!-- S -->
											
											 <h1>Volunteer Skills</h1>
												
												
												<br>
                                                  <div class="form-group">
												  
                                                      <label class="col-lg-2 control-label">Dialects spoken:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="dialects_spoken_registration" style="width: 100%;" class="form-control" id="f-name" placeholder=" ">
                                                      </div>
												   
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Special skills:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="special_skills_registration" style="width: 100%;" class="form-control" id="l-name">
                                                      </div>
													  

                                                  </div>
												   <div class="form-group">
                                                      <label class="col-lg-2 control-label">Trainings:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="trainings_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
                                                  </div>
												   
                                                  
					<!-- END SECOND -->										
					
					<!-- third -->
											
											 <h1>Volunteer Resources</h1>
												
												
												<br>
                                                  
												   <div class="form-group">
                                                      <label class="col-lg-2 control-label">Item name:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="item_name_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
                                                  </div>
												   
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" name="next" style="background-color: green;" class="btn btn-primary">Next</button>
                                                         <a href="login.html" class="btn btn-danger">Cancel</a>
														 </div>
                                                  </div>
												  
                                              </form>
											  
											  
											</div>
									  
					<!-- END third -->
					

						 
											
                                          </div>
                                      </section>
                                 
								  
								  
  </body>
	
</html>
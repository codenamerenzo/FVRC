<?php
	if($_POST['password_registration'] == $_POST['password_registration2']){
		session_start();
		$_SESSION['date_registration']=$_POST['date_registration'];
		$_SESSION['fvrc_id_registration']=$_POST['fvrc_id_registration'];
		$_SESSION['username_registration']=$_POST['username_registration'];
		$_SESSION['password_registration']=$_POST['password_registration'];
		//$_SESSION['userame']=$_POST['username_registration'];
		//echo $_SESSION['date_registration'];	
		//echo $_SESSION['fvrc_id_registration'];	
		//echo $_SESSION['username_registration'];	
		//echo $_SESSION['password_registration'];	
			
	
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

   <title>FVRC | Registration (2/3)</title>

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
                                              <h1 style="color: white;"> VOLUNTEER'S INFORMATION FORM (1/3)</h1>
											  <h5 style="color: white;">Instruction: Please fill all the necessary forms </h5>
                                           </center>
									 </div>
					<!-- first -->
											<div class="panel-body bio-graph-info">
											 <h1>Volunteer Information</h1>
												  <form action="registration3.php" method="POST" class="form-horizontal" role="form">  
												
												
												<br>
                                                  <div class="form-group">
												  
                                                      <label class="col-lg-2 control-label">Firstname:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="firstname_registration" style="width: 100%;" class="form-control" id="f-name" placeholder=" ">
                                                      </div>
												   
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Lastname:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="lastname_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													  

                                                  </div>
												  
												   <div class="form-group">
                                                      <label class="col-lg-2 control-label">Middlename:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="middlename_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													</div>
													
													<div class="form-group">
                                                      <label class="col-lg-2 control-label">Maidenname:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="maidenname_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													</div>
													
												   <div class="form-group">
                                                      <label class="col-lg-2 control-label">Gender:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="gender_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													  

                                                  </div>
												  
												   <div class="form-group">
                                                      <label class="col-lg-2 control-label">Marital Status:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="marital_status_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
                                                  </div>
										  
													<div class="form-group">
                                                      <label class="col-lg-2 control-label">Date of birth:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="date_of_birth_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													  </div>
													  
													  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Place of birth:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="place_of_birth_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													  </div>
													  
													  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Citizenship:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="citizenship_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													  </div>
													
													<div class="form-group">
                                                      <label class="col-lg-2 control-label">Club name:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="club_name_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													  </div>
													  
													  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Civic Call Sign:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="civic_call_sign_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													  </div>
													  
													  <div class="form-group">
                                                      <label class="col-lg-2 control-label">FVRC Call Sign:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="fvrc_call_sign_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													  </div>
													 
														 <div class="form-group">
                                                      <label class="col-lg-2 control-label">Religion:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="religion_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													  </div>
													  
													   <div class="form-group">
                                                      <label class="col-lg-2 control-label">Blood type:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="blood_type_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													  </div>
													  
													  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Health Issues/ Allergies:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="health_issues_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
													  </div>
													 
													<div class="form-group">
                                                      <label class="col-lg-2 control-label">Medications:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="medications_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" ">
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
									  
					<!-- END first -->
					
						 
											
                                          </div>
                                      </section>
                                 
								  
								  
  </body>
	
</html>
<?php
	}else{
		
		header('location:registration.php');
		
	}
?>
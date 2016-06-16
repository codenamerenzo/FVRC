<?php 
	session_start();
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

   <title>FVRC | Registration (1/3)</title>

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
  <?php include'header_navigator.php'; ?>  
  <br>
  <br>

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
											 <h1>Account</h1>
												  <form action="registration2.php" method="POST" class="form-horizontal" role="form">  
												
												
												<br>
                                                  <div class="form-group">
												  
                                                      <label class="col-lg-2 control-label">Date</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="date_registration" style="width: 50%;" class="form-control" id="f-name" value="<?php include 'date.php'; ?>" required>
                                                      </div>
												   
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">FVRC ID No.:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="fvrc_id_registration" style="width: 50%;" class="form-control" id="l-name" value=" <?php include 'profile2.php'; ?>" >
                                                      </div>
													  

                                                  </div>
												   <div class="form-group">
                                                      <label class="col-lg-2 control-label">Username:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" name="username_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" " required>
                                                      </div>
													  

                                                  </div>
												   <div class="form-group">
                                                      <label class="col-lg-2 control-label">Password:</label>
                                                      <div class="col-lg-6">
                                                          <input type="password" name="password_registration" style="width: 100%;" class="form-control" id="l-name" placeholder=" " required>
                                                      </div>
													  

                                                  </div>
												  
												   <div class="form-group">
                                                      <label class="col-lg-2 control-label">Re-type Password:</label>
                                                      <div class="col-lg-6">
                                                          <input type="password" name="password_registration2" style="width: 100%;" class="form-control" id="l-name" placeholder=" " required>
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
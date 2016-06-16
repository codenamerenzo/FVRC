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

    <title>FVRC | President</title>

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
       
     
   <!-- HEADER -->
    <?php include'header_navigator_user.php'; ?>
  <!-- HEADER END -->
   
	  <?php
	include('conn.php');
		
		$sql=mysql_query("SELECT * FROM `reports` WHERE id='$_GET[id]'"); 
		//$sqlSecond=mysql_query("SELECT * FROM `volunteer_information` WHERE id_no='$_GET[id]'"); 
		$sql2=mysql_fetch_array($sql);
		//$sqlSecond=mysql_fetch_array($sqlSecond);
		
		
		
	//header('location:assign_position.php');
		 
	?>
	  
      <!-- edit-profile -->
      

                                  <br>
                                  <div id="edit-profile" class="tab-pane">
                                    <section class="panel">                                          
                                          <div class="panel-body bio-graph-info">
                                              <h1> Profile Info</h1>
                                              <form class="form-horizontal" action="accident_reports3.php" method="POST" role="form" >                                                  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">ID</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" name="id_number" id="f-name"  value="<?php echo $sql2['id']; ?>" readonly>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Date</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" name="username" id="l-name"  value="<?php echo $sql2['date']; ?>" placeholder=" " readonly>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Firstname</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="l-name" value="<?php echo $sql2['first_name']; ?>" placeholder=" " readonly>
                                                      </div>
                                                  </div>
                                                  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Lastname</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="c-name" value="<?php echo $sql2['last_name']; ?>" placeholder=" " readonly>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Email Address</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="b-day" value="<?php echo $sql2['email_address']; ?>" placeholder=" " readonly>
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Contact</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="b-day" value="<?php echo $sql2['contact']; ?>" placeholder=" " readonly>
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Category</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="b-day" value="<?php echo $sql2['report_category']; ?>" placeholder=" " readonly>
                                                      </div>
                                                  </div>

                                                   <div class="form-group">
                                                       <label class="col-lg-2 control-label">Status</label>
                                                      <div class="col-lg-6">
                                                          <!--<input type="text" class="form-control" id="occupation" placeholder=" ">-->
                              
            <select class="form-control" id="occupation" name="status">
                <option value="pending">pending</option>
                <option value="done">done</option>
            </select>
                                                      </div>
                                                  </div>
                                                 

                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
                                                          <a href="accident_reports.php" class="btn btn-danger">Cancel</a>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </section>
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

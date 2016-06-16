<!DOCTYPE html>
<html lang="en">
	<?php 
		require_once('conn.php');
		session_start();
		
	?>
  <head>
	<LINK REL="SHORTCUT ICON" HREF="Resources/FVRC logo.PNG">
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
    <!-- date picker -->
    
    <!-- color picker -->
    
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

  </head>
  <body>

  <!-- container section start -->
  <section id="container" class="">
     <!-- HEADER -->
    <?php include'header_navigator_user.php'; ?>
  <!-- HEADER END -->
    
   <!--SIDEBAR -->
    <?php include'sidebar_president.php'; ?>
   <!-- SIDEBAR END-->  
	       <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>Create Club</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="fvrc_president_login.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Club</li>
						<li><i class="fa fa-file-text-o"></i>Create Club</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Create Club
                          </header>
                          
						  <!-- FORM STARTS HERE -->
						
						  <div class="panel-body">
                              <form class="form-horizontal" action="insert_new_club.php" method="POST">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Club name</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="club_name" class="form-control" required>
                                      </div>
                                  </div>
								  
								    <div class="form-group">
                                      <label class="control-label col-lg-2" for="inputSuccess">Select Club President</label>
                                      <div class="col-lg-10">
                                         <select name="club_leader" class="form-control m-bot15">
										  <?PHP
											$sql=mysql_query("Select * from `accounts` where `position`='Club Leader' && `club_name`='none'");
											while($row=mysql_fetch_array($sql)){
											?>
											
											<option value="none"> </option>
											<option value="<?php echo $row['username']; ?>"><?php echo $row['username'];?></option>
                                              
											 <?php
											 }
											 ?>
                                          </select>
										  
										 </div>
									  <center>
									   <button type="submit" name="btn_insert_new_club" class="btn btn-primary">Submit</button>
									   </center>
                                  </div>
								
								  
                              </form>
                          </div>
						  <!-- FORM ENDS HERE --> 
						  
                      </section>
					  <!--
						  -->
                      </div>
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

    <!-- jquery ui -->
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>
    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    
    <!-- colorpicker -->
   
    <!-- bootstrap-wysiwyg -->
    <script src="js/jquery.hotkeys.js"></script>
    <script src="js/bootstrap-wysiwyg.js"></script>
    <script src="js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="js/scripts.js"></script>
  

  </body>
</html>

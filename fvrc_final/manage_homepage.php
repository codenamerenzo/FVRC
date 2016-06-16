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
    
   <!--SIDEBAR -->
    <?php include'sidebar_president.php'; ?>
   <!-- SIDEBAR END--> 
     
	 
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Manage Home Page</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="fvrc_president_login.php">Home</a></li>
						<li><i class="fa fa-bars"></i>Manage Home Page</li>
						<!-- <li><i class="fa fa-square-o"></i>Pages</li> -->
					</ol>
				</div>
			</div>
              <!-- page start-->
			 
			 <!--upload photo-->
				
			 <!--end-->
			 
            <!--  Page content goes here-->
			  
			  <br>
			  <div class="row">
          
			   <header class="panel-heading">
					
			   
                            Updated News
							<?php 
								$query1=mysql_query("SELECT * from `update_news`");
								
							?>
                          </header>
                          <div style="background-color: white;" class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>News Title</th>
                                  <th>News Update</th>
                                </tr>
                              </thead>
							  <?php 
								while($row=mysql_fetch_array($query1)){
								
								?>
						  
                              <tbody>
							  
                                <tr>
                                  <td><?php  echo $row['Id']; ?></td>
                                  <td><?php echo $row['Title']; ?></td>
                                  <td><?php echo $row['News']; ?></td>
                               <?php  echo '<td class="">'."<a href='manage_homepage2.php?Id=".$row['Id']."'>Edit</a>".'</td>'.'</tr>' ?>
                                  
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

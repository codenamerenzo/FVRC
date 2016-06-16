<!DOCTYPE html>
<html lang="en">
<?php 
	include('conn.php');
	session_start();
?>
  <head>
     <meta http-equiv="refresh" content="10" >

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
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Incident Reports</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="fvrc_president_login.php">Home</a></li>
						<li><i class="fa fa-bars"></i>Incident Reports</li>
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
							
							<option value="date">Date</option>
							<option value="first_name">Firstname</option>
							<option value="last_name">Lastname</option>
							<option value="email_address">Email Address</option>
							<option value="contact">Contact No.</option>
							<option value="report_category">Report Category</option>
							
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
                            Reported Accidents
							<?php 
							if(isset($_POST['searching'])){
								$query1=mysql_query("SELECT * from `reports` where `$_POST[category]` LIKE '%$_POST[keyword]%'");
								$_SESSION['category']=$_POST['category'];
								$_SESSION['keyword']=$_POST['keyword'];
							}else{
								$query1=mysql_query("SELECT * from `reports`");
							}	
							?>
                          </header>
                          <div style="background-color: white;" class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>id</th>
                                  <th>Date</th>
                                  <th>Firstname</th>
                                  <th>Lastname</th>
                                  <th>email-address</th>
                                  <th>Contact No.</th>
                                  <th>Category</th>
                                  <th>Content</th>
                                  <th>Status</th>
                                  <th>Change</th>
                                </tr>
                              </thead>
							  <?php 
								while($row=mysql_fetch_array($query1)){
								
								?>
						  
                              <tbody>
							  
                                <tr>

                               
                                  <td><?php  echo $row['id']; ?></td>
                                  <td><?php  echo $row['date']; ?></td>
                                  <td><?php echo $row['first_name']; ?></td>
                                  <td><?php echo $row['last_name']; ?></td>
                                  <td><?php echo $row['email_address']; ?></td>
                                  <td><?php echo $row['contact']; ?></td>
                                  <td><?php echo $row['report_category']; ?></td>
                                  <td><?php echo $row['reoprt_content']; ?></td>
                                  <td><?php echo $row['status']; ?></td>
                                  <?php  echo '<td class="">'."<a href='accident_reports2.php?id=".$row['id']."'>Change</a>".'</td>' ?>
                                </tr>
								
								 </tbody>
								
							<?php
							}
							
							if($query1 === FALSE) { 
								die(mysql_error()); // TODO: better error handling
							}

							?>
 
                            </table>
							
                              <?php
								if(isset($_POST['searching'])){
							?>	
								<a href="print_accident_reports2.php">Generate Report</a>
							<?php
								}else{
							?>
								 <a href="print_accident_reports.php">Generate Report</a>
							<?php
									
								}
							?>
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

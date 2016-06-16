<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FVRC</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php include'header_navigator.php'; ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Concerned Citizen Report
                    <!--<small>Citizens Report</small>-->
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Reports</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->


<?php
							include('conn.php');
							$sql=mysql_query("SELECT * FROM `reports`"); 
							$sql2=mysql_fetch_array($sql);
						  ?>

               <?php 
    if(isset($_POST['send_report'])){
    //include('conn.php');
    
    //echo $_POST['date'];
    //echo '<br>';
    //echo $_POST['first_name'];
    //echo '<br>';
    //echo $_POST['last_name'];
    //echo '<br>';
    //echo $_POST['email_address'];
    //echo '<br>';
    //echo $_POST['contact'];
    //echo '<br>';
    //echo $_POST['report_category'];
    //echo '<br>';
    //echo $_POST['report_content'];
      $pending='pending';
    
    $sql="INSERT INTO `reports`(`date`, `first_name`, `last_name`, `email_address`, `contact`, `report_category`, `reoprt_content`,`status`) 
    VALUES ('$_POST[date]','$_POST[first_name]','$_POST[last_name]','$_POST[email_address]','$_POST[contact]','$_POST[report_category]','$_POST[report_content]','$pending')";
    if (!mysql_query($sql))
        {
        die('Error: ' . mysql_error());
        }
        include'alert_success.php';
                            }
                          ?>
        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="panel-body">
              <div class="form">
        <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
								        										
					<div class="form-group ">
                <label for="cname" class="control-label col-lg-2">Date <span class="required">*</span></label>
                <div class="col-lg-10">
                <input class="form-control" id="subject" name="date" type="text" value="<?php include 'date.php'; ?>"required />
                                          </div>
										  </div>
										  
										  <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Firstname <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="first_name" type="text" required />
                                          </div>
										  </div>
                                      
											<div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Lastname <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="last_name" type="text" required />
                                          </div>
										  </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Email Address <span class="required"></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="email" name="email_address" placeholder="none" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Contact Number <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="" name="contact" required/>
                                          </div>
                                      </div>
									  <div class="form-group">
				                <label class="control-label col-lg-2" for="inputSuccess">Category</label>
                                      <div class="col-lg-10">
                                         <select name="report_category" class="form-control m-bot15">
                                          <option value="Others">Others</option>
                      <?PHP
                      $sql=mysql_query("Select * from `report_category`");
                      while($row=mysql_fetch_array($sql)){
                     
                      ?>

                      <option value="<?php echo $row['category']; ?>"><?php echo $row['category'];?></option>
                                              
                       <?php
                       }
                       ?>
                                          </select>
                      
                     </div>
									  </div>
                                                                            
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Content <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control " id="ccomment" name="report_content" required></textarea>
                                          </div>
                                      </div>
									  
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                  <button name="send_report" class="btn btn-primary" value="submit" type="submit">Send</button>
                                  <a href="index.php" class="btn btn-danger">Cancel</a>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>

						  
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; FVRC/NTC 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
 
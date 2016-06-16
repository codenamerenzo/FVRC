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

    <!-- HTML5 shim and Respond.jszsIE8 support of HTML5 -->
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
		
		$sql=mysql_query("SELECT * FROM `update_news` WHERE Id='$_GET[Id]'"); 
		//$sqlSecond=mysql_query("SELECT * FROM `update_news` WHERE Id='$_GET[Id]'"); 
		$sql2=mysql_fetch_array($sql);
		//$sqlSecond=mysql_fetch_array($sqlSecond);
		
		
		
	//header('location:assign_position.php');
		
	?>
	  
      <!-- edit-profile -->
                                  <div id="edit-profile" class="tab-pane">
                                    <section class="panel">                                          
                                          <div class="panel-body bio-graph-info">
										  <br>
                                              <h1> Profile Info</h1>
                                              <form class="form-horizontal" action="update_homepage_news.php" method="POST" role="form" >                                                  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">ID</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" name="id_number" id="f-name"  value="<?php echo $sql2['Id']; ?>" readonly>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">News Title</label>
                                                      <div class="col-lg-6">
                                                          <textarea type="text" class="form-control"  name="Title" id="l-name"   placeholder=" "></textarea>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">News Update</label>
                                                      <div class="col-lg-6">
                                                          <textarea type="text" class="form-control"  name="News" id="l-name"  placeholder=" "></textarea>
                                                      </div>
                                                  </div>
                                                 
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" name="updating" value="Submit" class="btn btn-primary">Submit</button>

                                                          <a href="manage_homepage.php" class="btn btn-danger">Cancel</a>
                                                          
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
										  <?php
										  
										  ?>
							
							
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

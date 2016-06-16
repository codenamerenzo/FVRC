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
</head>
<body>

    <?php include'header_navigator.php'; ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
			
                <div class="fill" style="background-image:url('Resources/ntc.jpg');">
				
				</div>
                <div class="carousel-caption">
                   <!-- <h2>Caption 1</h2> -->
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('Resources/ntc1.jpg');"></div>
                <div class="carousel-caption">
                    <!--<h2>Caption 2</h2> -->
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('Resources/ntc2.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 3</h2> -->
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
		<?php
						include('conn.php');
						$sql=mysql_query("SELECT * FROM `update_news` WHERE `Id`='1'");
						$row=mysql_fetch_array($sql);
					?>
			
<?php
						$sql2=mysql_query("SELECT * FROM `update_news` WHERE `Id`='2'");
						$row2=mysql_fetch_array($sql2);
					?>
<?php
						$sql3=mysql_query("SELECT * FROM `update_news` WHERE `Id`='3'");
						$row3=mysql_fetch_array($sql3);
					?>					
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    News Reports
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <!-- <h4><i class="fa fa-fw fa-check"></i> <?php echo $row['Title'];?></h4> -->
                        <h4><i class=""></i> <?php echo $row['Title'];?></h4>
                    </div>
					
                    <div class="panel-body">
                      
<p><?php echo $row['News'];?></p>
                        <!--<a href="#" class="btn btn-default">Learn More</a>-->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <!-- <h4><i class="fa fa-fw fa-gift"></i><?php echo $row2['Title'];?></h4> -->
                        <h4><i class=""></i><?php echo $row2['Title'];?></h4>
                    </div>
                    <div class="panel-body">
                        
<p><?php echo $row2['News'];?></p>
                        <!--<a href="#" class="btn btn-default">Learn More</a>-->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <!--<h4><i class="fa fa-fw fa-compass"></i><?php echo $row3['Title'];?></h4>-->
                        <h4><i class=""></i><?php echo $row3['Title'];?></h4>
                    </div>
                    <div class="panel-body">
                       
<p> <?php echo $row3['News'];?></p>
                        <!--<a href="#" class="btn btn-default">Learn More</a>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        

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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>
</html>

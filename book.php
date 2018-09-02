<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Rooms | Villa 49 HotelBeds</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css"> 
<!---->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href='//fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!---strat-date-piker---->
</head>
<body>
	<div class="banner">
		
	</div>
    <div class="header">
		<div class="container">
			<div class="header-menu">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <div class="navbar-brand logo">
								<h1><a href="index.html"><span>Villa49  </span> HotelBeds</a></h1>
							</div>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						   <ul class="nav navbar-nav">
							<li><a href="index.php" data-hover="Home">Home </a></li>
							<li><a href="about.php" data-hover="About">About</a></li>
							<li><a data-hover="Restaurant" href="restaurant.php">Reviews</a></li>
							<li><a data-hover="Gallery" href="gallery.php">Gallery</a></li>
							<li class="active"><a data-hover="Rooms" href="room.php">Rooms</a></li>
							 <li><a data-hover="Contact" href="contact.php">Contact</a></li>
							 	
						  </ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			<div class="clearfix"></div>
			</div>	
		</div> 
	</div>
		<div class="content">
		
		
		<div class="rooms-rates">
				<div class="container">
					<h3 class="tittle">Rooms & Rates</h3>
	
				<?php
 

 					include 'dbCon.php';
 					session_start();

							$_SESSION['checkin']=$_POST['checkdate'];
					$_SESSION['checkout']=$_POST['checkout'];







	$sql="SELECT * FROM `room` WHERE book=0";
	
	$result=mysqli_query($conn, $sql);
	
	
	     

$x=0;

			while($row=mysqli_fetch_array($result)){
				
				if($row['roomid']==1){
					
					?>
				<div class="container">
						<div class="rates-grids">
						<div class="rates-grid">
							<img src="<?php echo $row['image'] ?> " class="img-responsive gray" alt=""/>
						</div>
						<div class="rates-text">
						
							<h4><?php echo $row['type'] ?> </h4>
							<p><?php echo $row['description'] ?> </p>
							<h5>LKR <?php echo $row['price'] ?> <span class="small">/ Night</span></h5>
							  <?php
                            	echo ""."<a href=completebook.php?".$row['roomid']."><img src='images/booknow.png' width='200px' height='80px'></a>";
                         ?>
						</div>
					</div></div>
					
					<?php
				}
					else if($row['roomid']==2){
					
					?>
					<div class="container">
								<div class="rates-grids rate1">
						<div class="rates-grid1">
							<img src="<?php echo $row['image'] ?> " class="img-responsive gray" alt=""/>
						</div>
						<div class="rates-text1">
						<h4><?php echo $row['type'] ?> </h4>
							<p><?php echo $row['description'] ?> </p>
							<h5>LKR <?php echo $row['price'] ?> <span class="small">/ Night</span></h5>
							  <?php
                            	echo ""."<a href=completebook.php?".$row['roomid']."><img src='images/booknow.png' width='200px' height='80px'></a>";
                         ?>
						</div>
						<div class="clearfix"></div>
					</div></div>
					
					<?php
					
				}
				
				else if($row['roomid']==3){
					
					?>
				<div class="container">
				<div class="rates-grids">
						<div class="rates-grid">
							<img src="<?php echo $row['image'] ?> " class="img-responsive gray" alt=""/>
						</div>
						<div class="rates-text">
							<h4><?php echo $row['type'] ?> </h4>
							<p><?php echo $row['description'] ?> </p>
							<h5>LKR <?php echo $row['price'] ?> <span class="small">/ Night</span></h5>
							  <?php
                            	echo ""."<a href=completebook.php?".$row['roomid']."><img src='images/booknow.png' width='200px' height='80px'></a>";
                         ?>
						</div>
					</div></div>
					
					<?php
				}
				
				
						else if($row['roomid']==4){
					
					?>
					<div class="container">
						<div class="rates-grids rate1">
						<div class="rates-grid1">
							<img src="<?php echo $row['image'] ?>" class="img-responsive gray" alt=""/>
						</div>
						<div class="rates-text1">
							<h4><?php echo $row['type'] ?> </h4>
							<p><?php echo $row['description'] ?> </p>
							<h5>LKR <?php echo $row['price'] ?> <span class="small">/ Night</span></h5>
							  <?php
                            	echo ""."<a href=completebook.php?".$row['roomid']."><img src='images/booknow.png' width='200px' height='80px'></a>";
                         ?>
						</div>
						<div class="clearfix"></div>
					</div></div>
					
					<?php
				}
	
		
		
		
		
	
		


?>

	

			

					
			
			
				</div>
			</div>
	
	
	
		</div>
		
			<?php
		}
		?>
		
		
		
		
		<div class="footer-section">
			<div class="container">
				<div class="footer-grids">
					<div class="col-md-3 footer-grid">
						<h4>Get In Touch</h4>
						<ul>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Office : 0094-777-555-463</li>
							<li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 0094-777-555-463</li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="#"><a href="mailto:info@villa49hotelbeds.com">info@villa49hotelbeds.com</a></a></li>
							<li><i class="glyphicon glyphicon-print" aria-hidden="true"></i> Fax : 0094-112-302-871</li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Hotel top links</h4>
						<ul>
							<li>Our Story</li>
							<li>Sleep Program</li>
							<li>Executive Travel Program</li>
							<li>Enriched Wellness</li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Our Rooms</h4>
						<ul>
							<li>Full House</li>
							<li>Standard Room</li>
							<li>Deluxe Room</li>
							<li>Twin Room</li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Our Services </h4>
						<ul>
							<li>Room services</li>
							<li>Free internet Wifi</li>
							<li>Television</li>
							<li>Kitchen with Pantry</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>	
	
			<div class="copy-section">
				<div class="container">
					<div class="footer-top">
						<p>&copy; Vill49 HotelBeds. All rights reserved | Design by <a href="http://www.feeltechlanka.com">feeltech lanka</a></p>
					</div>
					<div class="social-icons">
						<a href="#"><i class="icon"></i></a>
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
						<a href="#"><i class="icon3"></i></a>
					</div>
				</div>
			</div>
		
		
		
		

</body>
</html>

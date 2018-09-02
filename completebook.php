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





<?php

include 'dbCon.php';

session_start();


$roomid =$_SERVER['QUERY_STRING'];

	$sql="SELECT * FROM room WHERE roomid='$roomid' ";


$result=mysqli_query($conn,$sql);

	$result=$conn->query($sql);
	
	
		if(!$row=$result->fetch_assoc()){
		?>
		<script>alert("Not Done");</script>
<?php

	
	}
	else{
		$_SESSION['roomid']=$row['roomid'];
	
		$_SESSION['image']=$row['image'];
		$_SESSION['type']=$row['type'];

		$_SESSION['description']=$row['description'];
		$_SESSION['price']=$row['price'];
	
echo "aaaaaaaaaaaaaaaaaaaaa";
		
	
	}


?>
<div class="container-fluid">
<div class="row" ><br><br></div>


	<div class="row" >
			<div class="col-sm-3">
			</div>
			
			<div class="col-sm-6">
				
				 <div class="panel-group">
    <div class="panel panel-success">
      <div class="panel-heading" style="text-align: center; "><h3 style="color: green;">Enter Your Details</h3></div>
      <div class="panel-body">
      	
      	
      	
      	
      	 <form class="form-horizontal" action="confirm.php" method="POST" >
      	 	
      	 	    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Your Name:</label>
      <div class="col-sm-9">          
        <input type="text" class="form-control" name="cname" placeholder="Enter Your name" required>
      </div>
    </div>
      	 	
      	 	
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Email:</label>
      <div class="col-sm-9">
        <input type="email" class="form-control" name="cemail" placeholder="Enter email" required>
      </div>
    </div>



    	 	    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Country:</label>
      <div class="col-sm-9">          
        <input type="text" class="form-control" name="ccountry" placeholder="Enter Your country" required>
      </div>
    </div>

  	 	    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Contact No:</label>
      <div class="col-sm-9">          
        <input type="text" class="form-control" name="ccontact" placeholder="Enter Your Contact No">
      </div>
    </div>
    
    	    <div class="form-group">
    	    <div class="col-sm-1"> </div>	
      <label style="text-align: center;" class="control-label col-sm-10" for="pwd"><h3 style="color: green;">Confirm the CheckIn CheckOut Date</h3></label>
      
      </div>
    
    
     	    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Check In:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" name="ccheckin" value="<?php echo $_SESSION['checkin']  ?>">
      </div>
        
       <label class="control-label col-sm-2" for="pwd">Check Out:</label>
      <div class="col-sm-4">     
     
        <input type="text" class="form-control" name="ccheckout" value="<?php echo $_SESSION['checkout']  ?>">
      </div>
    </div>
    
   <div class="row" ><br></div>
    
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-3">
         <button type="submit" class="btn btn-success" name="confirm">Confirm</button>
      </div>
      <div class="col-sm-3"> 
      	
      	<button type="reset" class="btn btn-success">Clear</button>
      	</div>
    </div>
  </form>

      	
      	
      	
      	
      	
      </div>
    </div>
				
				
			</div>

	
	</div>
	
		<div class="col-sm-3">
			</div>
	
	</div>

</div>


	<div class="rooms-rates">
				<div class="container">
					<h3 class="tittle">Room you Selected</h3>
					<div class="rates-grids">
						<div class="rates-grid">
							<img src="<?php  echo $_SESSION['image']; ?>" class="img-responsive gray" alt=""/>
						</div>
						<div class="rates-text">
							<h4><?php echo $_SESSION['type']; ?></h4>
							<p> <?php echo $_SESSION['description']; ?> </p>
							<h5><?php echo $_SESSION['price']; ?> <span class="small">/ Night</span></h5>
						</div>
					</div>
					
					
</div>
</div>


















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
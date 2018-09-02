<?php



session_start();
	include 'dbCon.php';
		$sql="SELECT * FROM `login` WHERE `log`=1";
$result=$conn->query($sql);

$rowcount=mysqli_num_rows($result);

if($rowcount !=0){

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
body {

}
a{
	color:black;
}


</style>


</head>
<body>

<div class="container"  style="background-color: #e3e3e3; " >
 <div class="row">
<nav class="navbar navbar-inverse">
  	<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="AdminHomePage.php">Villa49 Hotel Beds</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="AdminHomePage.php">Home</a></li>
    
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
    	
      <li><a href="Admindetail.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['Admin_name'];?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
    </ul>
  </div>
</nav>
</div>

<div class="row"><br/><br/><br/><br/><br/></div>

  <div class="row" style="text-align:center;">
    
  	
  	<div class="col-sm-4">
  			<a href="bookedDetails.php"> <img src="images/bd1.png"  onmouseover="this.src='images/bd2.png'" onmouseout="this.src='images/bd1.png'"/> </a>
  	</div>
  	
  	<div class="col-sm-4">
  			<a href="bookremoveAdd.php"> <img src="images/rd1.png"  onmouseover="this.src='images/rd2.png'" onmouseout="this.src='images/rd1.png'"/> </a>
  	</div>

    	<div class="col-sm-4">
  			<a href="price.php"> <img src="images/pricebtn1.png"  onmouseover="this.src='images/pricebtn2.png'" onmouseout="this.src='images/pricebtn1.png'"/> </a>
  	</div>
  	
  </div>	
  
  

     

<div class="row"><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></div>




<div class="row" style="background-color: black; color: white; border-bottom-right-radius:15px; border-bottom-left-radius:15px;">
			<div class="col-sm-4">
			</div>
	
			<div class="col-sm-4">
					<footer id="footer">
				<div id="footer-inner">
					<p>&copy; Copyright Cargo &#124; Terms of Use&#124; Privacy Policy</p>
					<div class="clr"></div>
				</div>
			</footer>
			</div>	
	</div>



</body>
</html>
<?php
}

else {

header("Location: AdminLoginPage.php");

}


?>
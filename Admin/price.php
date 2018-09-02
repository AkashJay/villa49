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

th{
    color:blue;
}


</style>


</head>
<body>

<div class="container" style="background-color: #e3e3e3;">
	
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

	
	
	
	
			<?php
 



	$sql="SELECT * FROM `room` WHERE 1";
	
	$result=mysqli_query($conn, $sql);
	
?>

 <div class="row">
 	
 	 <div class="col-sm-1">
	</div>
	 <div class="col-sm-10">
	
    <div class="panel panel-success">
      <div class="panel-heading" style="text-align:center; color:green;"><h3>Booked Room Details</h3></div>
      <div class="panel-body">

    
    
				<table class="table">
    <thead>
      <tr>
        <th><h2>Type</h2></th>
       <th><h2>Current Price</h2></th>
       
        <th><h2>Change Price</h2></th>
  
         
      </tr>
    </thead>
    
    
  <?php

	
			while($row=mysqli_fetch_array($result)){
				
?>			

    <tbody>
      <tr class="success">
        <td><h4> <?php echo $row['type'] ?></h4></td>
        <td><h3>LKR <?php echo $row['price'] ?></h3></td>
        
        
        <td>
<?php


        	 echo ""."<a href=changeprice.php?".$row['roomid']."><h3 style='color:red;'>Change Price</h3></a>";  
	
}

	
 ?>
       </td>
      </tr>      
     
				

	
	    </div>
	</div>
	</div>
	    </tbody>
  </table>
	
</body>
</html>

<?php
}

else {

header("Location: AdminLoginPage.php");

}


?>
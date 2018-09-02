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
 



	$sql="SELECT * FROM `book` WHERE 1";
	
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
        <th>Name</th>
        <th>Contact No</th>
        <th>E-mail</th>
        <th>CheckIn</th>
        <th>CheckOut</th>
        <th>Delete Record</th>
         
      </tr>
    </thead>
    
    
  <?php

	
			while($row=mysqli_fetch_array($result)){
				
?>			

    <tbody>
      <tr class="success">
        <td> <?php echo $row['name'] ?></td>
        <td><?php echo $row['contact_no'] ?></td>
        <td> <?php echo $row['email'] ?></td>
         <td> <?php echo $row['bookdate'] ?></td>
          <td> <?php echo $row['leavedate'] ?></td>
        
        <td>
<?php


        	 echo ""."<a href=deletebook.php?".$row['bookid'].">Delete</a>";  
	
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
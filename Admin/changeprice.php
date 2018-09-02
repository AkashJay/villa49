
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
	

	include 'dbCon.php';


	
$_SESSION['roomid']=$_SERVER['QUERY_STRING'];

$roomid=$_SESSION['roomid'];
        
	$sql="SELECT `price` FROM `room` WHERE `roomid`='$roomid'";
	
	$result=mysqli_query($conn, $sql);	
	
	if($row=$result->fetch_assoc()){

        $price= $row['price'];


}

?>
  <div class="panel panel-success">
      <div class="panel-heading">Change The price</div>
      <div class="panel-body">
        <table class="table">
    <thead>
      <tr>
        <th>Old Price</th>
        <th>New Price</th>
        <th>Change Price</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><h3>LKR <?php echo $price ?>.00</h3></td>
        <form action="changep.php" method="POST">
        <td>
         <div class="form-group">
    
    <h3><input type="text" class="form-control" name="newprice"></h3>
  </div>
        
        </td>

              <td>
  <h3> <button type="submit" class="btn btn-success" name="change">Change Price</button></h3>
        
        </td>
        </form>
      </tr> 

      </tbody>

      </table>
      
      
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
<?php

include 'dbCon.php';


if(isset($_POST['add'])){
	
	
	$rid=$_POST['rid'];
	$image=$_POST['image'];
	$type=$_POST['type'];
	$desc=$_POST['description'];
	$price=$_POST['price'];
	
	$query=" INSERT INTO `room`(`roomid`, `image`, `type`, `description`, `price`)
	 VALUES ('$rid','$image','$type','$desc','$price') ";
	 
	 						if($sql_run=mysqli_query($conn, $query)){
?>
							<script>alert("Registration Sucessfull Login ");</script>
<?php
						}
	 
	 
}
else {
	echo "dddddddddd";
}


?>
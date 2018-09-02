<!DOCTYPE html>
<html lang="en">
<head>
	
	<title> Book Now Villa </title>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</ head>

<body>


<div class="container">
	
	<div class="row">
		
		
		<div class="col-sm-3">
		
						 <form class="form-horizontal" name="book"  onsubmit="return ak()" action="bookform.php" method="POST">
	  <div class="form-group">
	     
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="text" class="form-control" name="uname">
	    <p  style="color:red;" id="demo"></p>
	  </div>
	 
	 
	  <div class="form-group">
	    <label for="contact">Contact:</label>
	    <input type="text" class="form-control" name="contact">
	    <p  style="color:red;" id="demo1"></p>
	  </div>
	 
	  <div class="form-group">
	    <label for="mail">Email:</label>
	    <input type="email" class="form-control" name="mail">
	     <p  style="color:red;" id="demo2"></p>
	  </div>
	 
	 
	  <div class="form-group">
	    <label for="bdate">Book Date:</label>
	    <input type="date" class="form-control" name="bdate">
	     <p  style="color:red;" id="demo3"></p>
	  </div>
	 
	  <div class="form-group">
	    <label for="ldate">Leave Date:</label>
	    <input type="date" class="form-control" name="ldate">
	     <p  style="color:red;" id="demo4"></p>
	  </div>
	 
	 
		<div class="radio">
			
		  <label><input type="radio" name="r1" value="AC">With AC</label>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		  <label><input type="radio" name="r1" value="NON-AC">Without AC</label>
		  
		   <p  style="color:red;" id="demo5"></p>
		
		</div>
			 
		<br>	 

                    <button type="submit" class="btn btn-primary" name="book" onclick="ak()">Book Now </button>
 	  
					 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <button type="reset" class="btn btn-primary" id="resetLog">Reset</button>
							
	  

</form>
		
		
		</div>
		
		
		
		
	</div>
	
	
	
	
	
	
</div>

<script>  
	
	
	function ak(){
	  var p = document.forms["book"]["uname"].value;
	  var y = document.forms["book"]["contact"].value;
	  var x = document.forms["book"]["mail"].value;
	  var q = document.forms["book"]["bdate"].value;
	   var r = document.forms["book"]["ldate"].value;
	    var s = document.forms["book"]["r1"].value;
	  
	
	  
	  
	  if (p == null || p == "") {
    nameError = "* Please enter your name";
    document.getElementById("demo").innerHTML = nameError; 
    return false;
} 

if (p != null) {
	
	document.getElementById("demo").innerHTML = null ; 
}


			  if (y == null || y == "") {
    nameError = "* Please enter your contact no";
    document.getElementById("demo1").innerHTML = nameError; 
    return false;
}


if (y != null) {
	
	document.getElementById("demo1").innerHTML = null ; 
}



			  if (x == null || x == "") {
    nameError = "* Please enter your email";
    document.getElementById("demo2").innerHTML = nameError; 
    return false;
} 


if (x != null) {
	
	document.getElementById("demo2").innerHTML = null ; 
}


			  if (q == null || q == "") {
    nameError = "* Please enter your book date";
    document.getElementById("demo3").innerHTML = nameError; 
    return false;
} 

if (q != null) {
	
	document.getElementById("demo3").innerHTML = null ; 
}



			  if (r == null || r == "") {
    nameError = "* Please enter your leave date";
    document.getElementById("demo4").innerHTML = nameError; 
    return false;
} 

if (r != null) {
	
	document.getElementById("demo4").innerHTML = null ; 
}



			  if (s == null || s == "") {
    nameError = "* Please select the condition you want";
    document.getElementById("demo5").innerHTML = nameError; 
    return false;
} 

if (s != null) {
	
	document.getElementById("demo5").innerHTML = null ; 
}







	}
	
	
	
	</script>



</body>

</html>


<?php


		include 'dbCon.php';
		
		
			if(isset($_POST['book'])){
				
				$name=$_POST['uname'];
				$contact=$_POST['contact'];
				$email=$_POST['mail'];
				$bdate=$_POST['bdate'];
				$ldate=$_POST['ldate'];
				@$condition=$_POST['r1'];

				
				
				if(!empty($name)&& !empty($contact)&&!empty($email)&&!empty($bdate)&&!empty($ldate) && !empty($condition) ){
						
					$sql="INSERT INTO `book`(`name`, `contact_no`, `email`, `bookdate`, `leavedate` , `Roomcondition`)
					         VALUES ('$name' , '$contact' , '$email' , '$bdate' , '$ldate' , '$condition' ) ";
					
					
											if($sql_run=mysqli_query($conn, $sql)){
														
													
													
										$mail_to = 'akash.jayaweera@gmail.com';
												
												$body_message = 'From: '.$name."\n";
												$body_message .= 'E-mail: '.$email."\n";
												$body_message .= 'Contact No: '.$condition."\n";
												$body_message .= 'Book Date: '.$bdate."\n";
												$body_message .= 'Leave Date: '.$ldate;	
												
												$subject = 'Message from a site visitor ' . $name;
												
												$headers = "From: $email\r\n";
												$headers .= "Reply-To: $email\r\n";
												
												$mail_status = mail($mail_to, $subject, $body_message, $headers);
												
												if ($mail_status) { ?>
												    <script language="javascript" type="text/javascript">
												        
												        alert('Booking sucsessfull.. We will contact you shortly.');
												    
												       
												    </script>
												<?php
												}
												else { ?>
												    <script language="javascript" type="text/javascript">
												    
												        alert('Message failed. Please try again ');
												       
												    </script>
												<?php
												}
												
											
												
												
												
?>
						
<?php
						}	
						else {
?>
							<script>alert("Registration Not Sucessfull");</script>
<?php
						}
					
					
				}
				
					else {
?>

							<script>alert("Fill All Fields");</script>

<?php
			}
				
				
			}	
			
		


?>
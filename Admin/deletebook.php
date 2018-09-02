<?php 
	

	include 'dbCon.php';
	include'afterlognav.php';

	
	$bookid=$_SERVER['QUERY_STRING'];
			
	

	
	$sql="DELETE FROM book WHERE bookid='$bookid' ";
	
	$result=mysqli_query($conn, $sql);
	
	if($result=mysqli_query($conn, $sql))
	{
	?>
	 <script language="javascript" type="text/javascript">
        
        alert('Delete sucsessfull....');
    
                      window.location='bookedDetails.php';

    </script>

	<?php
	}
	?>
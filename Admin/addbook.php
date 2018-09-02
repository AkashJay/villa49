<?php

include 'dbCon.php';

session_start();


$roomid =$_SERVER['QUERY_STRING'];

	$sql=" UPDATE `room` SET `book`=1 WHERE roomid='$roomid' ";


$result=mysqli_query($conn,$sql);


	
if($result){
	
?>	   <script language="javascript" type="text/javascript">
        
        alert('Added to the booked..Now Visitors Can not see the room');
    
                      window.location='bookremoveAdd.php';

    </script>
    
<?php
}
else{
	
?>	   <script language="javascript" type="text/javascript">
        
        alert('Not Added to the booked...Please try again');
    
                      window.location='bookremoveAdd.php';

    </script>
    
<?php
}


?>
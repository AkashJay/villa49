<?php

include 'dbCon.php';

session_start();


$roomid =$_SERVER['QUERY_STRING'];

	$sql=" UPDATE `room` SET `book`=0 WHERE roomid='$roomid' ";


$result=mysqli_query($conn,$sql);

	$result=$conn->query($sql);
	
if($result){
	
?>	   <script language="javascript" type="text/javascript">
        
        alert('Remove the booked..Now Visitors Can see the room');
    
                      window.location='bookremoveAdd.php';

    </script>
    
<?php
}
else{
	
?>	   <script language="javascript" type="text/javascript">
        
        alert('Not Removed the booked...Please try again');
    
                      window.location='bookremoveAdd.php';

    </script>
    
<?php
}


?>
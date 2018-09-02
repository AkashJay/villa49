<?php
	
	include 'dbCon.php';
session_start();

	
	

    if(isset($_POST['change'])){
$roomid=$_SESSION['roomid'];
       $p= $_POST['newprice'];
	$sql=" UPDATE `room` SET `price`='$p' WHERE `roomid`='$roomid' ";
	
	

	$result=$conn->query($sql);
	
	if($result){
	
	?>
	 <script language="javascript" type="text/javascript">
        
        alert('Price Change sucsessfull....');
    
                      window.location='price.php';

    </script>

	<?php
	}

    else{
     ?>
        	 <script language="javascript" type="text/javascript">
        
        alert('Price Change not sucsessfull....');
    
                      window.location='changeprice.php';

    </script>
<?php
    }
    }
	?>
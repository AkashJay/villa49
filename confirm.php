


<?php
	include 'dbCon.php';
 					session_start();

	if(isset($_POST['confirm'])){

$_SESSION['checkin'];
$_SESSION['checkout'];



$_SESSION['cname']=$_POST['cname'];
$_SESSION['cemail']=$_POST['cemail'];
$_SESSION['ccountry']=$_POST['ccountry'];
$_SESSION['ccontact']=$_POST['ccontact'];


$field_name = $_POST['cname'];
$field_email = $_POST['cemail'];


$mail_to = $field_email;


$subject = 'Message from Villa49 ' ;

$body_message = "From: Villa49 \n";
$body_message .= 'you book  '.	$_SESSION['type']."\n";
$body_message .= 'From :'.	$_SESSION['checkin']."\n";
$body_message .= 'TO : '.$_SESSION['checkout']."\n";

$body_message .= 'Go to this link : <a href="www.google.com">google</a>';

$headers = "From: feeltechlanka@gmail.com\r\n";


$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        
        alert('Thank you for the message. We will contact you shortly.');
    
                      window.location='thank.php';

    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
    
        alert('Message failed. Please try again ');

           window.location='thank.php';
 
    </script>
<?php
}

}

else {
	echo "aaaaaaaaaaaaa";
}
?>

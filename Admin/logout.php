<?php
include 'dbCon.php';
session_start();
session_destroy();
		$sql="UPDATE `login` SET `log`=0";
$result=$conn->query($sql);
header("Location: AdminLoginPage.php");

?>

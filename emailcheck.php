<?php
include('conn.php');
  
 
$email =$_POST['email'];
//$dob =$_POST['dob'];
//$mobno =$_POST['mobno'];
$user =$_POST['usertype'];
$sql="SELECT * FROM ".$user." WHERE email_id='$email' ";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
if($count){
	echo '1';
} 

?>

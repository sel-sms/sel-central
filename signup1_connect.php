<?php
include('conn.php');

session_start();
$_SESSION['user'] = $_POST['usertype'];

$name =$_POST['name'];
$email =$_POST['email'];
$_SESSION['email'] = $email;
$password =$_POST['password'];
//$dob =$_POST['dob'];
//$mobno =$_POST['mobno'];
$user =$_POST['usertype'];

$qry="insert into ". $user ." set  name ='$name', email_id ='$email', password ='$password',  status='inactive'";
//$qry="insert into ". $user ." set  name ='$name', dob = '$dob' , email_id ='$email', password ='$password', contact_no ='$mobno',  status='inactive'";
mysql_query($qry) or die(mysql_error());


	$toEmail = $_POST["email"];
	$subject = "User Registration Activation Email";
	$content = "Click this link to activate your account. $_SERVER[HTTP_HOST]"."/activate.php?id=" . $email .'&t='.$user ;
	$mailHeaders = "From: Admin\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
		$message = "You have registered and the activation mail is sent to your email. Click the activation link to activate you account.";	
	}
	


if($user=='student')
{
header('location:signup.php');

}
else
{
header('location:index.php');
}

?>

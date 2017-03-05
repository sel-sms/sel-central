<?php
include('conn.php');

session_start();
$_SESSION['user'] = $_POST['usertype'];

$email =$_POST['email'];
$user =$_POST['usertype'];



$sql="select * from ". $user ." where  email_id ='$email'";
$row=mysql_query($sql);
$password=$row['password'];


	$toEmail = $_POST["email"];
	$subject = "Forget Password";
	$content = "You have Requested dor password.Your Password is" . $password ."If Password is not requested by you please contact admin asap" ;
	$mailHeaders = "From: Admin\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
		?>
		
		<html>
<body  onLoad="myFunction()">

<script>
function myFunction() {
    alert("We have sent password to your registered email  id. Please check your Registered email account.");
}
</script>

</body>
</html>

		
		<?php
	}
	

header('location:index.php');

?>

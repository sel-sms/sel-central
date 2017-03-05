<?php
include('conn.php');
// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 
$user=$_POST['user']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM ".$user." WHERE email_id='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
$rows_data=mysql_fetch_assoc($result);
if($count){
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['user'] = $_POST['user']; 
$_SESSION['sno'] = $rows_data['sno']; 

if($user=='student') 
{?>
<script>
	window.location.href = 'pro.php';
</script>
<?php
//header("location:pro.php");
 }else{?>
<script>
	window.location.href = 'profile.php';
</script>
<?php
	//header("location:profile.php");
}
}
else {
  echo "Your Username or Password Wrong. please try again..";
}
?>
<?php
include('conn.php');

session_start();
$email = $_SESSION['email'] ;
$user = $_SESSION['user'] ;
$about =$_POST['about'];
$skill =$_POST['skill'];
$experience =$_POST['experience'];
$education =$_POST['education'];
$college =$_POST['college'];
$branch =$_POST['branch'];
$university =$_POST['university'];
$pic = $_FILES['photo']['name']; 
$address =$_POST['address'];
//$city =$_POST['city'];

$sqry="insert into skill set skills='$skill'";
mysql_query($sqry) or die(mysql_error());

$qry="UPDATE student SET address ='$address'  , about ='$about', skills ='$skill', experience ='$experience', education ='$education', branch ='$branch', college ='$college', university ='$university', photo ='$pic' WHERE email_id='$email'";
mysql_query($qry) or die(mysql_error());
$target = "Photos/"; 
$target = $target . basename( $_FILES['photo']['name']); 
move_uploaded_file($_FILES['photo']['tmp_name'], $target); 
header('location:index.php');
?>

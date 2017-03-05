<?php
include('conn.php');

session_start();

$user = $_SESSION['username'] ;
$title =$_POST['title'];
$skill =$_POST['skill'];
//$experience =$_POST['experience'];
$subtitle =$_POST['subtitle'];
$details =$_POST['details'];
//$type =$_POST['type'];
$skills =$_POST['skills'];
$pid =rand(1,9999);
//$file = $_FILES['file']['name']; 
$location =$_POST['location'];


$qry="insert into projects SET user='$user',pid='$pid',title ='$title' ,subtitle ='$subtitle' , details ='$details', skills ='$skills',status='Published', location ='$location' ";
//$qry="insert into projects SET user='$user',pid='$pid',title ='$title' ,subtitle ='$subtitle' , details ='$details', skills ='$skills', experience ='$experience',status='Published', type ='$type', location ='$location' ";
//$qry="insert into projects SET user='$email',title ='$title' ,subtitle ='$subtitle' , details ='$details', skills ='$skills', experience ='$experience', type ='$type', location ='$location', file ='$file' ";
//echo $qry;
mysql_query($qry) or die(mysql_error());
/*$target = "files/"; 
$target = $target . basename( $_FILES['file']['name']); 
move_uploaded_file($_FILES['file']['tmp_name'], $target); 
*/header('location:project.php?q='.$pid.'');
?>

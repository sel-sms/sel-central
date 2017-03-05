<?php
include('conn.php');
$email_id = $_GET['id'];
$tbl = $_GET['t'];
$sql="update  ". $tbl ." set status ='active' WHERE email_id = '$email_id'";
$result=mysql_query($sql);
header('location:index.php');
//echo $sql;
?>
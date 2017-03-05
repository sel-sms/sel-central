<?php
include('conn.php');
$tbl = $_GET['q'];
$sno = $_GET['p'];
$url = $_GET['r'];
$status = $_GET['s'];
$sql="update  ". $tbl ." set status = '$status' WHERE sno = '$sno'";
$result=mysql_query($sql);
header('location:'. $url. '.php');
?>
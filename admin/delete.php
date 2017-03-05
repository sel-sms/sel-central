<?php
include('conn.php');
$tbl = $_GET['q'];
$sno = $_GET['p'];
$url = $_GET['r'];
$sql="DELETE FROM ". $tbl ." WHERE sno = '$sno'";
$result=mysql_query($sql);
header('location:'. $url. '.php');
?>
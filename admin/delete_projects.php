<?php
include('conn.php');
$pid = $_GET['pid'];
$sql="DELETE FROM projects WHERE pid = '$pid'";
$result=mysql_query($sql);
header('location:products.php');
?>
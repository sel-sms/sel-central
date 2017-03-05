<?php
include('conn.php');
$sno = $_GET['p'];
$sql="DELETE FROM skill WHERE sno = '$sno'";
$result=mysql_query($sql);
header('location:skills.php');
?>
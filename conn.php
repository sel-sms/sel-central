<?php 
    error_reporting(0);
   $user = 'selcentral'; 
   $password = 'lokesh12345'; 
   $database = 'sel_central';
     $db = new mysqli('182.50.133.87:3306',$user,$password,$database); 
 
$db1 = mysql_connect("182.50.133.87:3306", "selcentral", "lokesh12345") or die("Could not connect.");
if(!$db1) 
	die("no db");
if(!mysql_select_db("sel_central",$db1))
 	die("No database selected.");
	
/*	$user = 'root'; 
   $password = ''; 
   $database = 'student'; 
   $db = new mysqli('localhost',$user,$password,$database); 
$db1 = mysql_connect("localhost", "root", "") or die("Could not connect.");
if(!$db1) 
	die("no db");
if(!mysql_select_db("student",$db1))
 	die("No database selected.");
*/	
?>

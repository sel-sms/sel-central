<html><body><?php
include("header.php");
if(isset($_REQUEST['submit2']))
{
			$rating= $_POST['rating'];
			$feedback =  $_POST['feedback'];
			$pid= $_POST['pid'];
			$employer =  $_POST['employer'];
			$student= $_POST['student'];

			$sqlf="insert into feedbacks set pid='$pid', employer='$employer', student='$student',feedback='$feedback' , rating='$rating'";
			$sql2="UPDATE projects SET status='Completed' where pid='$pid' ";
			mysql_query($sqlf);
if (mysql_query($sql2))
{ ?>
  <script type="text/javascript"> alert("Thanks! Your Feedback Submited Successfully"); </script>
  
<?php } else {?>

	 <script  type="text/javascript"> alert("Please Try Again Later") ; </script>
	<?php
	
} }
header('location:project.php?q='.$pid.'');
?>
</body></html>
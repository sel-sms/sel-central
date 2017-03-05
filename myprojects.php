<?php
include('conn.php');
include("header.php");
?>

<div class="" style="margin-top: 3%;    background: #f9f9f9;">
	<div class="container" style="    margin-top: 50px;     margin-bottom: 50px;">
		<div class="col-md-12"  style="background: #ffffff; border-left: #fff 5px solid;">
			<h1>Projects</h1>
			<?php
if($_GET['usr']==''){
$usr=$email;
}else{
$usr=$_GET['usr'];
}
$qry="select * from projects where user='$usr'";
//echo $qry;
$sql=mysql_query($qry);
 $i = 0;
while($row=mysql_fetch_array($sql)){


$title = $row{'title'};
$pid = $row{'pid'};
$subtitle = $row{'subtitle'};
$details = $row{'details'};
$status = $row{'status'};

$i++;

 ?>
			<div class="col-md-12 prolist1" >
				<div class="row" >
					<h4><a style="background:none; color:#000000" href="project.php?q=<?php echo $pid ?>"><?php echo $i . " . " . $title ; ?></a></h4>
					<span style="float: right; color: rgb(0, 153, 0); position: absolute; right: 0px; top: 0px; margin-right: 10px; font-size: 22px;"><?php echo $status ?></span>
					<p><?php echo $details ; ?></p>
				</div>
			</div>
			<?php } ?>
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-5">
						<ul class="pagination">
							<li>Showing 1 to 10 of  entries</li>
						</ul>
					</div>
					<div class="col-sm-7">
						<ul class="pagination">
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).on('change','.sort_rang',function(){
   $("#search_form").submit();
  return false;
});
</script>
<?php include('footer.php'); ?>

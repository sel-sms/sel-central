<?php
include('header.php');
if($_GET['q']){
$usr=$_GET['q'];
$qry="select * from student where email_id='$usr'";

}else{
$qry="select * from student where email_id='$email'";
}
$sql=mysql_query($qry);
$row=mysql_fetch_array($sql);
?>

<div class="" style="margin-top: 3%;">
	<div class="container " style="    margin-top: 50px;">
		<div class=" col-md-8 showprofile">
			<div class="col-md-12" >
				<h1>Profile Details</h1>
				<hr />
				<?php
			$name = $row{'name'};
			$dob = $row{'dob'};
			$pic = $row{'photo'};
			$skill = $row{'skills'};
			$email = $row{'email_id'};
			$contact = $row{'contact_no'};
			$address  = $row{'address'};
			$city  = $row{'city'};
			$about  = $row{'about'};
			$education  = $row{'education'};
			$branch  = $row{'branch'};
			$college  = $row{'college'};
			$university  = $row{'university'};
			$experience  = $row{'experience'};

			
			?>
				<div class="form-group">
					<h2>About me </h2>
					<p><?php echo $about ; ?>.</p>
				</div>
				<div style="width: 50%; float: left;  /* margin-top: -30px; */"  class="form-group">
					<h2> Name</h2>
					<p><?php echo $name ; ?> </p>
				</div>
				<div style="width: 50%;float: right;"  class="form-group">
					<h2>Email Id</h2>
					<p><?php echo $email ; ?></p>
				</div>
				<div class="form-group">
					<h2>Skill </h2>
					<p><?php echo $skill ; ?></p>
				</div>
				<div class="form-group">
					<h2>Adress</h2>
					<p><?php echo $address ; ?> - <?php echo $city ; ?> </p>
				</div>
				<div class="form-group">
					<h2>Contact no.</h2>
					<p><?php echo $contact ; ?> </p>
				</div>
				<div style="display:none;" class="form-group">
					<h2>Date of Birth</h2>
					<p><?php echo $dob ; ?></p>
				</div>
				<div style="display:none;">
					<div class="form-group">
						<h2>City</h2>
						<p><?php echo $city ; ?> </p>
					</div>
					<div class="form-group">
						<h2>Experience </h2>
						<p><?php echo $experience ; ?></p>
					</div>
					<div class="form-group">
						<h2>Current Education </h2>
						<p><?php echo $education ; ?></p>
					</div>
					<div class="form-group">
						<h2>Branch </h2>
						<p><?php echo $branch ; ?></p>
					</div>
					<div class="form-group">
						<h2>College </h2>
						<p><?php echo $college ; ?></p>
					</div>
					<div class="form-group">
						<h2>University </h2>
						<p><?php echo $university ; ?></p>
					</div>
				</div>
			</div>
		</div>
		<div style="" class=" col-md-4 profilepic" >
			<div>
				<div  class="change-p"><a></a></div>
				<?php if($pic) {?>
				<img src="images/<?php echo $pic; ?>"  class="img-responsive">
				<?php }else{ ?>
				<img src="images/profile.jpg"  class="img-responsive">
				<?php } ?>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="" style="margin-top: 3%;    background: #f9f9f9;">
	<div class="container" style="    margin-top: 50px;     margin-bottom: 50px;">
		<div class="col-md-12"  style="background: #ffffff; border-left: #fff 5px solid;">
			<h3>Feedbacks</h3>
			<?php
$qry="select  * from feedbacks where student='$email'";
//echo $qry;
$sql=mysql_query($qry);
 $i = 0;
while($row=mysql_fetch_array($sql)){
$pid = $row{'pid'};
$employer = $row{'employer'};
$feedback = $row{'feedback'};
$e = $row{'rating'};
$student = $row{'student'};

$qry2="select * from projects where pid='$pid'";
$sql2=mysql_query($qry2);
$row2=mysql_fetch_array($sql2);
$title = $row2{'title'};
$details = $row2{'details'};




$i++;

 ?>
			<div class="col-md-12 prolist1" >
				<div class="row" >
					<h4><a style="background:none; color:#000000" href="project.php?q=<?php echo $pid ?>"><?php echo $i . " . " . $title ; ?></a></h4>
					by : <?php echo $employer ; ?>
					<p>"<?php echo $feedback ; ?>"</p>
					<p> Rating : <?php echo $e .'/5' ;
									 for ($x = 0; $x < $e; $x++) { ?> <img src="images/rating.png" class="rating" />
						<?php }?>
					</p>
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
<?php include('footer.php'); ?>

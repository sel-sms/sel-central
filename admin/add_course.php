<?php include('head.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php
if(isset($_POST['submit']))
{
$name =$_POST['name'];
$category =$_POST['category'];
$duration =$_POST['duration'];
$details =$_POST['details'];

$qry="insert into courses set  name ='$name', category = '$category', duration = '$duration', details = '$details' ";
mysql_query($qry) or die(mysql_error());
}
?>

<section id="main-content">
    <section class="wrapper">
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Courses</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>Add Courses</li>						  	
					</ol>
				</div>
			</div>

<div class="row">
                  <div class="col-lg-9">
                      <section class="panel">
                          <header class="panel-heading">
                              Add Courses / Streams
                          </header>
                          <div class="panel-body">
						                                <form role="form" method="post" action="#">
<div class="form-group">
                                      <label for="exampleInputEmail1">Course Name</label>
                                      <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Course Name">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Course Duration</label>
                                      <input type="text" class="form-control" id="exampleInputPassword1" name="duration" placeholder="Course Duration">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Category</label>
                                      <input type="text" class="form-control" id="exampleInputPassword1" name="category" placeholder="Category ">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Course Details</label>
                                     <textarea class="form-control" id="exampleInputPassword1" name="details" placeholder="Course Details"></textarea>
                                  </div>                                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

                          </div>
                      </section>
                  </div>
              </div>	</section>
</section>
<?php include('footer.php'); ?>

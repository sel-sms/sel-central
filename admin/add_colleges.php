<?php include('head.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php
if(isset($_POST['submit']))
{
$name =$_POST['name'];
$contact =$_POST['contact'];
$address =$_POST['address'];
$city =$_POST['city'];
$details =$_POST['details'];

$qry="insert into college set  name ='$name', contact = '$contact', address = '$address', city = '$city', details = '$details' ";
mysql_query($qry) or die(mysql_error());
}
?>


<section id="main-content">
    <section class="wrapper">
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> College</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>Add College</li>						  	
					</ol>
				</div>
			</div>

<div class="row">
                  <div class="col-lg-9">
                      <section class="panel">
                          <header class="panel-heading">
                             Add College
                          </header>
                          <div class="panel-body">                              <form role="form" method="post" action="#">
<div class="form-group">
                                      <label for="exampleInputEmail1">College Name</label>
                                      <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="College Name">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Contact no</label>
                                      <input type="text" class="form-control" name="contact" id="exampleInputPassword1" placeholder="Contact no">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Address</label>
                                     <textarea class="form-control" id="exampleInputPassword1" name="address" placeholder="Address"></textarea>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">City</label>
                                      <input type="text" class="form-control" id="exampleInputPassword1" name="city" placeholder="City">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">details</label>
                                      <input type="text" class="form-control" id="exampleInputPassword1" name="details" placeholder="Details">
                                  </div>                                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

                          </div>
                      </section>
                  </div>
              </div>	</section>
</section>
<?php include('footer.php'); ?>

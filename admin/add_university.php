<?php include('head.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<section id="main-content">
    <section class="wrapper">
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> University</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>Add University</li>						  	
					</ol>
				</div>
			</div>

<div class="row">
                  <div class="col-lg-9">
                      <section class="panel">
                          <header class="panel-heading">
                           Add University
                          </header>
                          <div class="panel-body">
                              <form role="form" method="post" action="#">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">University Name</label>
                                      <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="University Name">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">City</label>
                                      <input type="text" name="city" class="form-control" id="exampleInputPassword1" placeholder="City">
                                  </div>
                                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                              </form>

                          </div>
                      </section>
                  </div>
              </div>	</section>
</section>
<?php
if(isset($_POST['submit']))
{
$name =$_POST['name'];
$city =$_POST['city'];

$qry="insert into university set  name ='$name', city = '$city' ";
mysql_query($qry) or die(mysql_error());
}
?>

<?php include('footer.php'); ?>

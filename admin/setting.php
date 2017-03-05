<?php include('head.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php
if(isset($_POST['submit']))
{
$name =$_POST['name'];
$email =$_POST['email'];
$password =$_POST['password'];
$cpassword =$_POST['cpassword'];

$qry="update  admin set  username ='$name' , password = ' $password' , email = ' $email' where sno='1' ";
mysql_query($qry) or die(mysql_error());
}
?>

<section id="main-content">
    <section class="wrapper">
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Setting</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>Setting</li>						  	
					</ol>
				</div>
			</div>

<div class="row">
                  <div class="col-lg-9">
                      <section class="panel">
                          <header class="panel-heading">
                              Admin Details Form
                          </header>
                          <div class="panel-body">
                              <form role="form" action="#" method="post">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1"> Name</label>
                                      <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Name">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Email Id</label>
                                      <input type="text" class="form-control" name="email" id="exampleInputPassword1" placeholder="Email Id ">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1"> Password</label>
                                      <input type="text" class="form-control" name="password" id="exampleInputEmail1" placeholder="Password">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1"> Confirm Password</label>
                                      <input type="text" class="form-control" name="cpassword" id="exampleInputEmail1" placeholder=" Confirm Password">
                                  </div>
                                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                              </form>

                          </div>
                      </section>
                  </div>
              </div>	</section>
</section>
<?php include('footer.php'); ?>

<?php
include('header.php');

if(isset($_REQUEST['submit1']))
{

$name1 =$_POST['name'];
$password1 =$_POST['password'];
$dob1 =$_POST['dob'];
$mobno1 =$_POST['mobno'];
$about1 =$_POST['about'];
$address1 =$_POST['address'];
$city1 =$_POST['city'];
$pic1 = $_FILES['photo']['name']; 
if($pic1=='')
{
$qryy="UPDATE employer SET name ='$name1' ,password ='$password1' , about ='$about1', dob ='$dob1', contact_no ='$mobno1', address ='$address1', city ='$city1' WHERE email_id='$email'";
}else{
$qryy="UPDATE employer SET name ='$name1' ,password ='$password1' , about ='$about1', dob ='$dob1', contact_no ='$mobno1', address ='$address1', city ='$city1', photo ='$pic1' WHERE email_id='$email'";
}
mysql_query($qryy) or die(mysql_error());
$target = "G:/PleskVhosts/selcentral.brightinfotech.com/Photos/"; 
$target = $target . basename( $_FILES['photo']['name']); 
move_uploaded_file($_FILES['photo']['tmp_name'], $target); 
}

if($_GET['q']){
$usr=$_GET['q'];
$qry="select * from employer where email_id='$usr'";

}else{
$qry="select * from employer where email_id='$email'";
}
$sql=mysql_query($qry);
$row=mysql_fetch_array($sql);

$name = $row{'name'};
$dob = $row{'dob'};
$password = $row{'password'};
$pic = $row{'photo'};
$email = $row{'email_id'};
$mobno = $row{'contact_no'};
$city  = $row{'city'};
$address  = $row{'address'};
$about  = $row{'about'};

?> 
<div class="container-fluid " style="margin-top: 3%;">
 <div class="container" style="    margin-top: 50px;">
            <div class=" col-md-8">
                      <div class="col-md-12" >
          <form method="post" role="form" action="#" enctype="multipart/form-data" class="profiledetail" >
          <h1>Profile Details</h1>
          <hr />
            <div class="form-group">
			           		<h2>Name</h2>

              <input type="text" class="form-control" id="pwd" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
			           		<h2>Email Id</h2>

              <input  readonly="" type="text" class="form-control" id="pwd" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
			           		<h2>Password</h2>

              <input type="text" class="form-control" id="pwd" name="password" value="<?php echo $password; ?>">
            </div>
           <div  style="display:none;" class="form-group">
			           		<h2>Date of Birth</h2>

              <input type="date" class="form-control" id="pwd" name="dob" value="<?php echo $dob; ?>">
            </div>
           <div  style="" class="form-group">
			           		<h2>Contact No</h2>

              <input type="text" class="form-control" id="pwd" name="mobno" value="<?php echo $mobno; ?>">
            </div>
			
            <div class="form-group">
           		<h2>About me </h2>
              <textarea name="about" type="text" class="form-control"  > <?php echo $about; ?></textarea>
            </div>
             
			
            <div class="form-group">
			           		<h2>Address</h2>

              <input type="text" class="form-control" id="pwd" name="address" value="<?php echo $address; ?>">
            </div>
            <div class="form-group">
			           		<h2>City</h2>

              <input type="text" class="form-control" id="pwd" name="city" value="<?php echo $city; ?>">
            </div>


            <div class="form-group">
            <input name="submit1" id="" class="btn btn-default btn_2 btn_up"  value="Update" type="submit">
            </div>
             
              
            
             </div>
    </div>
                    
                     <div class=" col-md-4 profilepic" >
                            <div> 
                     <div  class="change-p"><a>Change profile image</a></div>
          				
						<?php if($pic) {?>
          				<img src="Photos/<?php echo $pic; ?>"  class="img-responsive">
						<?php }else{ ?><img src="images/profile.jpg"  class="img-responsive"><?php } ?>
              			 <hr />			<input type="file"  name="photo"  />

                        </form>
                        <hr />
           				 </div>
        </div>
  </div>
</div>


<?php include('footer.php'); ?>
<?php
session_start();
include('header.php');
 
if(isset($_REQUEST['submit1'])){

	$name1 =$_POST['name'];
	$password1 =$_POST['password'];
	$mobno1 =$_POST['mobno'];
	$about1 =$_POST['about'];
	$address1 =$_POST['address'];
	$pic1 = $_FILES['photo']['name']; 
	$skill1 =$_POST['skill'];
	$education1 =$_POST['education'];


	if($pic1==''){
		$qryy="UPDATE student SET name ='$name1' ,password ='$password1' , education ='$education1', about ='$about1', contact_no ='$mobno1', address ='$address1' ,  skills ='$skill1' WHERE email_id='$email'";
	}else{
		$qryy="UPDATE student SET name ='$name1' ,password ='$password1', education ='$education1' , about ='$about1' ,contact_no ='$mobno1', address ='$address1' , skills ='$skill1', photo ='$pic1' WHERE email_id='$email'";
	}
	mysql_query($qryy);
}


if(isset($_POST['uploadd'])){
$errors = '';
   $file_name = $_FILES['photo']['name'];
   $file_size = $_FILES['photo']['size'];
   $file_tmp = $_FILES['photo']['tmp_name'];
   $file_type = $_FILES['photo']['type'];
  $file_ext=strtolower(end(explode('.',$_FILES['photo']['name'])));      
  $expensions= array("jpeg","jpg","png");
  
  if(in_array($file_ext,$expensions)=== false){
	 $errors="extension not allowed, please choose a JPEG or PNG file.";
  }
  
  $imgName = rand(0,99999999).rand(0,999999999).".".$file_ext;
  
  if($file_size > 2097152) {
	 $errors='File size must be excately 2 MB';
  }
  // print_r($_FILES);
  // print_r($errors);
  if($errors == '') { //echo "sss";
	 if(move_uploaded_file($file_tmp,"images/".$imgName)){
		 echo "ddd";
	 }else{
		 echo "error";
	 }
	 //print_r(error_get_last());
	 mysql("update student set photo = 'images/".$imgName."' where sno = '".$_SESSION['sno']."' ");
  }else{
	 print_r($errors);
  }
}
   
   $sql_std = mysql_query("select * from student where sno = '".$_SESSION['sno']."'");
   $rows_std = mysql_fetch_assoc($sql_std);
?> 
<div class="container-fluid " style="margin-top: 3%;">
 <div class="container" style="    margin-top: 50px;">
            <div class=" col-md-8">
                      <div class="col-md-12" >
          <form method="post" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" class="profiledetail" >
          <h1>Profile Details</h1>
         <hr />
            <div class="form-group">
			           		<h2>Name</h2>

              <input type="text" class="form-control" id="pwd" name="name" value="<?php echo @$rows_std['name']; ?>">
            </div>
            <div class="form-group">
			           		<h2>Email Id</h2>

              <input  readonly=""type="text" class="form-control" id="pwd" name="email" value="<?php echo $email; ?>">
            </div>
            <!--<div class="form-group">
			           		<h2>Password</h2>

              <input type="text" class="form-control" id="pwd" name="password" value="<?php echo $password; ?>">
            </div>-->
             <div style="display:none;" class="form-group">
			   <h2>Date of Birth</h2>

              <input type="date" class="form-control" id="pwd" name="dob" value="<?php echo @$rows_std['dob']; ?>">
            </div>
            <div class="form-group">
			   <h2>Contact No</h2>
              <input type="text" class="form-control" id="pwd" name="mobno" value="<?php echo @$rows_std['contact_no']; ?>">
            </div>

            <div class="form-group">
			           		<h2>Address</h2>

              <input type="text" class="form-control" id="pwd" name="address" value="<?php echo @$rows_std['address']; ?>">
            </div>
             <div style="display:none;" class="form-group">
			           		<h2>City</h2>

              <input type="text" class="form-control" id="pwd" name="city" value="<?php echo @$rows_std['city']; ?>">
            </div>

            <div class="form-group">
           		<h2>About me </h2>
              <textarea name="about" type="text" class="form-control"  ><?php echo @$rows_std['about']; ?></textarea>
            </div>
             
              <div class="form-group">
              <h2>Skill </h2>
              <input id="myAutocomplete"  name="skill" type="text" value="<?php echo @$rows_std['skills']; ?>" class="form-control"  />
           
            </div>
            
             <div style="display:none;" class="form-group">
             <h2>Experience </h2>
             <select class="form-control" name="experience" >
			 <option><?php echo $experience; ?></option>
			 <option value="0"> Fresher</option>
			 <option value="<1"> < 1 Year</option>
			 <option value="1">  1 Year</option>
			 <option value="2">  2 Year</option>
			 <option value="3">  3 Year</option>
			 <option value="4">  4 Year</option>
			 <option value="5">  5 Year</option>
			 <option value="5+">  5+ Year</option>
			  </select>
            </div>
            
             <div style="" class="form-group">
             <h2>Current Education </h2>
              <input type="text" class="form-control" id="pwd" name="education" value="<?php echo @$rows_std['education']; ?>">
            </div>
			
             <div style="display:none;" class="form-group">
             <h2>Branch </h2>
             <select class="form-control" name="branch" >
			 <option><?php echo @$rows_std['branch']; ?></option> 
			<?php 
			$qry1="select * from courses"; 
			$sql1=mysql_query($qry1);
			while($row1=mysql_fetch_array($sql1)){
			$result1 = $row1{'name'};
			?>
			 <option><?php echo $result1 ?></option> 
			 <?php } ?>
			 </select>
            </div>
            
             <div style="display:none;" class="form-group">
             <h2>College </h2>
             <select class="form-control" name="college" >
			 <option><?php echo @$rows_std['college']; ?></option> 
			<?php 
			$qry2="select * from college"; 
			$sql2=mysql_query($qry2);
			while($row2=mysql_fetch_array($sql2)){
			$result2 = $row2{'name'};
			?>
			 <option><?php echo $result2 ?></option> 
			 <?php } ?>
			 </select>
            </div>
            
             <div style="display:none;" class="form-group">
             <h2>University </h2>
             <select class="form-control" name="university" >
			 <option><?php echo @$rows_std['university']; ?></option> 
			<?php 
			$qry3="select * from university"; 
			$sql3=mysql_query($qry3);
			while($row3=mysql_fetch_array($sql3)){
			$result3 = $row3{'name'};
			?>
			 <option><?php echo $result3 ?></option> 
			 <?php } ?>
			  </select>
            </div>
             
            <div class="form-group">
            <input name="submit1" id="" class="btn btn-default btn_2 btn_up"  value="Update" type="submit">
            </div>
             
              
            </form>
             </div>
    </div>
                    
        <div class=" col-md-4 profilepic" ><div> 
            <div  class="change-p"><a>Change profile image</a></div>          				
			<?php if($pic) {?>
				<img src="<?php echo $pic; ?>"  class="img-responsive">
			<?php }else{ ?>
				<img src="images/profile.jpg"  class="img-responsive">
			<?php } ?>
			<hr/>
			<form action='#' method='post' enctype='multipart/form-data' >
				<input type="file" name="photo" class='uploadimg' />
				<input type='submit' name='uploadd' class='uploadBtn' />
			</form>
			<hr />
           </div>
        </div>
  </div>
</div>
<style>
.uploadBtn{display:none;}
</style>
<script>
$(function(){
	$('.uploadimg').on('change',function(){
		$('.uploadBtn').trigger('click');
	});
});
</script>
<?php include('footer.php'); ?>
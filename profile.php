<?php
include('header.php');
$qry="select * from employer where email_id='$email'";
$sql=mysql_query($qry);
$row=mysql_fetch_array($sql);
?> 

<div class="container-fluid " style="margin-top: 3%;">
 <div class="container " style="    margin-top: 50px;">
            <div class=" col-md-8 showprofile">
                      <div class="col-md-12" >
         
          <h1>Profile Details</h1>
          <hr />
            
            <?php
			$name = $row{'name'};
			$dob = $row{'dob'};
			$pic = $row{'photo'};
			$email = $row{'email_id'};
			$contact = $row{'contact_no'};
			$address  = $row{'address'};
			$about  = $row{'about'};
			$city  = $row{'city'};

			
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
              <h2>Skill </h2>
               <p><?php echo $skill ; ?></p>
            </div>
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
          				<img src="Photos/<?php echo $pic; ?>"  class="img-responsive">
						<?php }else{ ?><img src="images/profile.jpg"  class="img-responsive"><?php } ?>

                        </form>
           				 </div>
        </div>
  </div>
</div>
 <br />
<br />

<?php include('footer.php'); ?>
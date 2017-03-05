<?php
include('header.php');
?>
<div class="container-fluid " style="margin-top: 3%;">
 <div class="container" style="    margin-top: 50px;">
            <div class=" col-md-8">
                      <div class="col-md-12" >
          <form method="post" role="form" action="signup2_connect.php" enctype="multipart/form-data" class="profiledetail" >
          <h1>Profile Details</h1>
          <hr />
            <div class="form-group">
			           		<h2>Address</h2>

              <input type="text" class="form-control" id="pwd" name="address" placeholder="Address">
            </div>
            <div style="display:none;" class="form-group">
			           		<h2>City</h2>

              <input type="text" class="form-control" id="pwd" name="city" placeholder="City">
            </div>

            <div class="form-group">
           		<h2>About me </h2>
              <textarea name="about" type="text" class="form-control"   ></textarea>
            </div>
             
              <div class="form-group">
              <h2>Skill </h2>
              <input id="myAutocomplete"  placeholder="Skills" name="skill" type="text"  class="form-control"  />
           
            </div>
            
             <div style="display:none;" class="form-group">
             <h2>Experience </h2>
             <select class="form-control" name="experience" >
			 <option>---Select---</option>
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
            
             <div class="form-group">
             <h2>Education </h2>
              <input type="text" class="form-control" id="pwd" name="education" placeholder="Education">
            </div>
			
             <div style="display:none;" class="form-group">
             <h2>Branch </h2>
             <select class="form-control" name="branch" >
			 <option>---Select---</option> 
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
			 <option>---Select---</option> 
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
			 <option>---Select---</option> 
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
            <input name="submit" id="" class="btn btn-default btn_2 btn_up"  value="Update" type="submit">
            </div>
             
              
            
             </div>
    </div>
                    
                     <div class=" col-md-4 profilepic" >
                            <div> 
                     <div  class="change-p"><a>Change profile image</a></div>
          				<img src="images/profile.jpg"  class="img-responsive">
              			 <hr />			<input type="file" name="photo"  />

                        </form>
                        <hr />
           				 </div>
        </div>
  </div>
</div>





 


<?php include('footer.php'); ?>
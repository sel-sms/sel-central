<?php
include('header.php');
$q=$_GET['q'];
$qry="select * from  employer where email_id='$q'";
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
			$pic = $row{'photo'};
			$dob = $row{'dob'};
			$email1 = $row{'email_id'};
			$contact = $row{'contact_no'};
			$address  = $row{'address'};
			$about  = $row{'about'};
			$city  = $row{'city'};

			
			?>
            
         <div class="form-group">   
                  <h2>Name</h2>
                  <p><?php echo $name ; ?> </p>
          </div>   
            
           <div  style="display:none;" class="form-group">
           		<h2>Date of Birth</h2>
               	<p><?php echo $dob ; ?></p>
            </div>
            
           <div class="form-group">
           		<h2>Email Id</h2>
               	<p><?php echo $email1 ; ?></p>
            </div>
               
           <div  style="display:none;" class="form-group">
           		<h2>Contact no.</h2>
               	<p><?php echo $contact ; ?> </p>
            </div>
            
            <div class="form-group">
           		<h2>Adress</h2>
               	<p><?php echo $address ; ?> </p>
            </div>
            <div class="form-group">
           		<h2>City</h2>
               	<p><?php echo $city ; ?> </p>
            </div>
            
            
            
            <div class="form-group">
           		<h2>About me </h2>
              <p><?php echo $about ; ?>.</p>
            </div>
             
          
             
              
             
             </div>
                    </div>
                    
                     <div class=" col-md-4 profilepic" >
                            <div> 
                     <div  class="change-p"><a></a></div>
          				
						<?php if($pic) {?>
          				<img src="Photos/<?php echo $pic; ?>"  class="img-responsive">
						<?php }else{ ?><img src="images/profile.jpg"  class="img-responsive"><?php } ?>
              			 <hr />		

                        </form>
                        <hr />
           				 </div>
        </div>
  </div>
</div>

        <div class="container-fluid " style="margin-top: 3%;    background: #f9f9f9;">
         <div class="container" style="    margin-top: 50px;     margin-bottom: 50px;">
            <div class="col-md-12"  style="background: #ffffff; border-left: #fff 5px solid;">
                       <h1>Projects</h1>
					   
<?php
$qry="select * from projects where user='$q'";
//echo $qry;
$sql=mysql_query($qry);
 $i = 0;
while($row=mysql_fetch_array($sql)){


$title = $row{'title'};
$pid = $row{'pid'};
$subtitle = $row{'subtitle'};
$details = $row{'details'};

$i++;

 ?>
                     <div class="col-md-12 prolist1" >
                      		<div class="row" >
                                    <h4><a style="background:none; color:#000000" href="project.php?q=<?php echo $pid ?>"><?php echo $i . " . " . $title ; ?></a></h4><p><?php echo $details ; ?></p>
									
             				</div>
                        </div>
						
						
<?php } ?>
                       		 <div class="row">
                             <div class="col-sm-12">
                             <div class="col-sm-5"><ul class="pagination"><li>Showing 1 to 10 of  entries</li></ul></div>
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
		<?php 
		include("header.php");
		//include_once "function.php";
//		$q=$_POST['skills'];
		$all_skills=$db->query("SELECT * from skill GROUP BY skills where skills='$q'");
		$all_city=$db->query("SELECT distinct college from student where status = 'active' GROUP BY college");
		$all_experience=$db->query("SELECT distinct experience from student where status = 'active' GROUP BY experience");
		// Filter query
$skills = $_POST['skills'];
$search = explode( ' ', $skills );
		 
	$sql = '';
$count = 0;
foreach($search as $text)
{
  if($count > 0)
     $sql = $sql."UNION SELECT distinct * from student where skills  LIKE '%$text%'";
  else
     $sql = $sql."SELECT distinct * from student where skills LIKE '%$text%'";

  $count++;
}
		
		$skills = $_GET['skills'];
		if(count($skills) > 0) {
		$sql .= ' AND (';
		for($i=0;$i<count($skills);$i++){
		  if($i == 0){
			$sql .= ' FIND_IN_SET("'.$skills[$i].'", skills)';     
		  }else{
			$sql .= ' OR FIND_IN_SET("'.$skills[$i].'", skills)';  
		  }
		  $pgstr .= '&skills[]='.$skills[$i]; 
		  
		}
		$sql .= ' ) ';
		}
		
		
		
		
		$city = $_GET['college'];
		if(count($city) > 0) {
		$sql .= ' AND (';
		for($i=0;$i<count($city);$i++){
		  if($i == 0){
			//$sql .= ' city = '.$city[$i]; 
			$sql.= " college LIKE '%".stripslashes($city[$i])."%'";    
		  }else{
			$sql.= " OR college LIKE '%".stripslashes($city[$i])."%'";  
		  }
		  $pgstr .= '&city[]='.$city[$i]; 
		  
		}
		$sql .= ' ) ';
		}
		
		
		
		$experience = $_GET['experience'];
		if(count($experience) > 0) {
		$sql .= ' AND (';
		for($i=0;$i<count($experience);$i++){
		  if($i == 0){
			$sql.= " experience LIKE '%".stripslashes($experience[$i])."%'";      
		  }else{
			$sql.= " OR experience LIKE '%".stripslashes($experience[$i])."%'";  
		  }
		  $pgstr .= '&experience[]='.$experience[$i]; 
		  
		}
		$sql .= ' ) ';
		} 
		
		
		   
		
		
		
		
		
		
		
		$perpage = 10;
		
		if(isset($_GET["page"])){
			$page = intval($_GET["page"]);
		}
		else {
		$page = 1;
		}
		$calc = $perpage * $page;
		$start = $calc - $perpage;
		
		$sql.= "Limit $start, $perpage";   
		
		$all_product=$db->query($sql);
		
		?>
		
		<?php
		// Pagination
		
		$sql2= "SELECT distinct * from student where status = 'active'";
		
		

		
		$skills = $_GET['skills'];
		if(count($skills) > 0) {
		$sql2 .= ' AND (';
		for($i=0;$i<count($skills);$i++){
		  if($i == 0){
			$sql2 .= ' FIND_IN_SET("'.$skills[$i].'", skills)';  
		  }else{
			$sql2 .= ' OR FIND_IN_SET("'.$skills[$i].'", skills)';  
		  }
		  
		}
		$sql2 .= ' ) ';
		}
		
		
		
		$city = $_GET['college'];
		if(count($city) > 0) {
		$sql2 .= ' AND (';
		for($i=0;$i<count($city);$i++){
		  if($i == 0){
			$sql2.= " college LIKE '%".stripslashes($city[$i])."%'";  
		  }else{
			$sql2.= " OR college LIKE '%".stripslashes($city[$i])."%'";
		  }  
		}
		$sql2 .= ' ) ';
		}
		
		$experience = $_GET['experience'];
		if(count($experience) > 0) {
		$sql2 .= ' AND (';
		for($i=0;$i<count($experience);$i++){
		  if($i == 0){
			$sql2.= " experience LIKE '%".stripslashes($experience[$i])."%'";
		  }else{
			$sql2.= " OR experience LIKE '%".stripslashes($experience[$i])."%'";
		  }
		}
		$sql2 .= ' ) ';
		} 
		
		
		$result = mysqli_query($db,$sql2);
		
		$rows = mysqli_num_rows($result);
		
		
		$totalPages = ceil($rows / $perpage);
		?>




		 <script src="js/filter/jquery.js" type="application/javascript"></script>
         
        
         
        <div class="container-fluid " style="margin-top: 3%;    background: #f9f9f9;">
         <div class="container" style="margin-top: 50px;     margin-bottom: 50px;">
         
         <div class="col-md-3 searchpannel"  style="display:none;background: #ffffff; border-right: #fff 5px solid;">
          <form method="get" id="search_form">
                         <h3>Filter result</h3>
                         <hr />
                         
                           <?php /*?> <ul>
                         <li><h3>Category</h3></li>
                         <li><div class="checkbox checkbox-warning"><input id="checkbox5" checked  type="checkbox" ><label for="checkbox5">Partime </label></div></li> 
                         <li><div class="checkbox checkbox-warning"><input id="checkbox6" type="checkbox" ><label for="checkbox6">Fulltime</label></div></li> 
                         </ul><?php */?>
                         
                          <ul style="display:none;">
                         
                         <li><h3>Skills</h3></li>
                         
                          
                        <?php 
						$i=0;
						 while($new_skills=mysqli_fetch_array($all_skills)){
                                if(isset($_GET['skills'])) :

                                    if(in_array($new_skills['sno'],$_GET['skills'])) : 
                                        $check='checked="checked"';
                                    else : $check="";
                                    endif;
                                endif;
                            ?>
                            <li>
                           <div class="checkbox checkbox-warning">
                           <input type="checkbox" value="<?=$new_skills['sno']; ?>" <?=@$check?> name="skills[]" class="sort_rang" id="checkbox<?php echo $i;?>"><label for="checkbox<?php echo $i;?>"><?=$new_skills['skills']; ?> </label>
                           </div> 
                           </li>
                           
                            <?php $i++; } ?>
                         
                         
                           
                           
                         </ul>
                         
                          <ul style="display:none;">
                         <li><h3>School</h3></li>
                         <?php
						 $i=50;
						 while($new_city=mysqli_fetch_array($all_city)){
						 
                                if(isset($_GET['college'])) :
                                    if(in_array($new_city['college'],$_GET['college'])) : 
                                        $check2='checked="checked"';
                                    else : $check2="";
                                    endif;
                                endif;
                            ?>
                        <li>
                        <div class="checkbox checkbox-warning"><input type="checkbox" value="<?=$new_city['city']; ?>" <?=@$check2?> name="city[]" class="sort_rang" id="checkbox<?php echo $i;?>"><label for="checkbox<?php echo $i;?>"><?=$new_city['city']; ?> </label>
                        </div>
                        </li> 
                         
                         
                           <?php $i++;} ?>
                         </ul>
                         
                          <ul style="display:none;">
                         <li><h3>Experience</h3></li>
							  <?php
							  $i=100;
						 while($new_experience=mysqli_fetch_array($all_experience)){
						 
                                if(isset($_GET['experience'])) :
                                    if(in_array($new_experience['experience'],$_GET['experience'])) : 
                                        $check3='checked="checked"';
                                    else : $check3="";
                                    endif;
                                endif;
                            ?>
                            
                         <li>
                        <div class="checkbox checkbox-warning"><input type="checkbox" value="<?=$new_experience['experience']; ?>" <?=@$check3?> name="experience[]" class="sort_rang" id="checkbox<?php echo $i;?>"><label for="checkbox<?php echo $i;?>"><?=$new_experience['experience']; ?> </label>
                        </div>
                        </li> 
                        
                         <?php $i++; } ?>
                        
                        
                         </ul>
                         
                         
                         
                    
                         
                            
        </div>
        </form>
 
            <div class="col-md-9"  style="background: #ffffff; border-left: #fff 5px solid;">
                       <h1>Search result</h1>
                       <hr />
                        
                        
                         <?php if(isset($all_product) && count($all_product)) : ?>
                        <?php
						
						 $i = 0;
						while($row=mysqli_fetch_array($all_product)){
						$name = $row{'name'};
						$pic = $row{'photo'};
						$q = $row{'email_id'};
						$skills = $row{'skills'};
						$contact_no = $row{'contact_no'};
						$address  = $row{'address'};
						$college  = $row{'college'};
						$branch  = $row{'branch'};
						$course  = $row{'education'};
						$e  = $row{'experience'};
						$university  = $row{'university'};
						
								$qryrat= mysql_query("SELECT AVG(rating) as thesum FROM feedbacks  where student = '$q'");
								$y = mysql_result( $qryrat, 0, "thesum");
						
						$i++;
						 ?>
                     <div class="col-md-12 prolist" >
                      		<div class="row" >
                                    <div class="col-md-4" >
                                   		 <img <?php if($pic !="") { ?> src="Photos/<?php echo $pic ; ?>" <?php }else{ ?> src="images/profile.jpg" <?php } ?> class="img-responsive">
                                    </div>
                                    <div class="col-md-5"><h2><a style="background:none; color:#000000" href="pro.php?q=<?php echo $q ; ?>"><?php echo $name ; ?></a></h2>
                                         <hr  style="margin: 2px!important;"/>
                                    
                                            <ul class="listdetail">
                                            <li >Rating <?php for ($x = 0; $x < $y; $x++) { ?>
                                            <img src="images/rating.png" class="rating" /><?php }  ?>
                                             </li>
                                             <li><i class="fa fa-phone"></i>+(91)-<?php echo $contact_no ; ?></li>
                                            <li><i class="fa fa-map-marker"></i><?php echo $address ; ?></li>
                                            <li><i class="fa fa-play"></i><?php echo $skills ; ?></li>
                                           <li><i class="fa fa-play"></i><?php echo $course   ; ?></li>
										   <div style="display:none"> 
                                            <li><i class="fa fa-play"></i><?php echo $college ; ?></li>
                                            <li><i class="fa fa-play"></i><?php echo $university ; ?></li></div>
                                            </ul>
</div>
                                    <div class="col-md-3 pad-top" style="padding-top: 10%;" >
                                                 <?php 			  if(!isset($_SESSION['username']) ){ ?>

                                   		   <a data-toggle="modal" data-target="#myModal"> <input type="button" class="btn btn-default btn_2" value="Contact Now"></a>
                                                                                   
                                           
                                                                                   <?php }else{ ?>    
                                  		   <a data-toggle="modal" data-target="#contact"> <input type="button" class="btn btn-default btn_2" value="Contact Now"></a>
<?php } ?>    
                                           
                                           <div class="modal fade" id="contact" role="dialog">
                                    <div class="modal-dialog ">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                        <div class="circle crl"> <i class="fa fa-envelope"></i> </div>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                         <div class="modal-body login">
                                        <div class="col-md-12" >
                                        
                                        
                                        <?php
										
										if(isset($_REQUEST['submit']))
										{
										
										
												
													$to = $q;
													$from = 'hsgora018@gmail.com';
													$subject= $_REQUEST['subject'];
													$message =  $_REQUEST['message'];
													$mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
													 $headers = "From: ".$from."\r\n" .
													 "MIME-Version: 1.0\r\n" .
														"Content-Type: multipart/mixed;\r\n" .
														" boundary=\"{$mime_boundary}\"";
										
												
										if (mail($to, $subject, $message, $headers))
										{ ?>
										  <script> alert("Thanks Your Form Submitted Successfully")</script>
                                          
										<?php } else {?>
	
                                             <script> alert("Please Try Again Later")</script>
                                            <?php
											
										} }?>
										
										
                                        
                                        
                                        
                                                    <form method="post" role="form" >
                                          <h3 class="text-center account" style="font-family: 'Lato', sans-serif;">Send Email</h3>
                                          <div> <?php echo $messagedd;?> </div>
                                            <div class="form-group">
                                              <input type="text" name="subject" class="form-control"   placeholder="Subject*" required>
                                            </div>
                                             
                                              <div class="form-group">
                                              <textarea type="text" class="form-control" name="message"  placeholder="Your Messages"></textarea>
                                            </div>
                                 <div class="form-group" align="center">
                                            <input name="submit" id="" class="btn btn-default btn_2" value="Send" type="submit">
                                            </div>
                                             
                                              
                                            </form>
                                             </div>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                         </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                                                           
                                                                           
                                                                           
                                           
                                           
                                           
                                           
                                           
                                           
                                           
                                           
                                           
                                           
                                           
                                           
                                           
                                           
                                    </div>
             				</div>
                        </div>
                        
                          <?php }?>
                         
                    <?php else : ?>
                   <?php echo " No Record Found!!!!!!!!!!!!!!" ;?>
                    
                     <?php endif; ?>
                                
                        
                        
        
                      		 <div class="row">
                             <div class="col-sm-12">
                             <div class="col-sm-5"><ul class="pagination"><li>Showing 1 to 10 of <?php echo $i ; ?> entries</li></ul></div>
                             <div class="col-sm-7">
                           				 <ul class="pagination">
                            	
                                
                                <?php

										if(isset($page)){
										
										if($page <=1 ){ echo ""; }
										
										else{ $j = $page - 1;
										
										echo "<li><a id='page_a_link' href='listing.php?page=$j".$pgstr."'>Previous</a></li>";
										
										}
										
										for($i=1; $i <= $totalPages; $i++)
										
										{
										
										if($i<>$page)
										
										{
										
										echo "<li><a id='page_a_link' href='listing.php?page=$i".$pgstr."'>$i</a></li>";
										
										}
										
										else
										
										{
										
										echo "<li><span id='page_links' style='font-weight: bold;'>$i</span><li>";
										
										}
										
										}
										
										if($page == $totalPages )
										
										{
										
										echo "";
										
										}
										
										else
										
										{
										
										$j = $page + 1;
										
										echo "<li><a id='page_a_link' href='listing.php?page=$j".$pgstr."'>Next</a></li>";
										
										}
										
										}
										
										?>
																		
                                
                                
                            </ul>
                              </div>
                               </div>
                              </div> 
           		 
             </div>       
                     
    </div>
</div>


<script type="text/javascript">
$(document).on('change','.sort_rang',function(){
   $("#search_form").submit();
  return false;
});
</script>
<?php include('footer.php'); ?>
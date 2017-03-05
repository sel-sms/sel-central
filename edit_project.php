<?php
include('header.php');
$pid = $_GET["pid"];
$qry12="select * from projects where pid ='$pid'";
$sql12=mysql_query($qry12);
$roww=mysql_fetch_array($sql12);
$title = $roww{'title'};
$pid = $roww{'pid'};
$subtitle = $roww{'subtitle'};
$details = $roww{'details'};
$skills = $roww{'skills'};
$city = $roww{'location'};
$employer = $roww{'user'};
//$type = $roww{'type'};
//$experience = $roww{'experience'};

?>
<div class="container-fluid " style="margin-top: 3%;">
 <div class="container" style="    margin-top: 50px;">
            <div class=" col-md-8">
                      <div class="col-md-12" >
          <form method="post" role="form" action="#" enctype="multipart/form-data" class="profiledetail" >
          <h1>Update your Project </h1>
          <hr />
            <div class="form-group">
			           		<h2>Title</h2>

                            <input type="text" class="form-control" id="pwd" name="title" value="<?php echo $title; ?>">
            </div>
            <div class="form-group">
			           		<h2>Subtitle</h2>

                            <input type="text" class="form-control" id="pwd" name="subtitle" value="<?php echo $subtitle; ?>">
            </div>

            <div class="form-group">
           		<h2>Project details  </h2>
                <textarea name="details" type="text" class="form-control"   ><?php echo $details; ?></textarea>
            </div>
             
              <div class="form-group">
              <h2>Skill </h2>
              <input id="myAutocomplete"  name="skills" type="text" value="<?php echo $skills; ?>"  class="form-control"  />
           
            </div>
            
              <div style="display:none;" class="form-group">
                <h2>Experience</h2>
                <select class="form-control" name="experience" >
                  <option><?php echo $experience; ?></option>
                  <option value="0"> Fresher</option>
                  <option value="&lt;1"> &lt; 1 Year</option>
                  <option value="1"> 1 Year</option>
                  <option value="2"> 2 Year</option>
                  <option value="3"> 3 Year</option>
                  <option value="4"> 4 Year</option>
                  <option value="5"> 5 Year</option>
                  <option value="5+"> 5+ Year</option>
                </select>
              </div>
              <div style="display:none;" class="form-group">
                <h2>Project type </h2>
                <select name="type" class="form-control" name="select" >
                  <option><?php echo $type; ?></option>
                  <option value="Fulltime"> Full time</option>
                  <option value="Parttime"> Part time</option>
                </select>
              </div>
              <div class="form-group">
             <h2>Location </h2>
                            <input type="text" class="form-control" id="pwd" name="location" value="<?php echo $city; ?>">
            </div>
             
            <div class="form-group">
            <input name="submit" id="" class="btn btn-default btn_2 btn_up"  value="Update Now" type="submit">
            </div>
             
              
            
             </div>
    </div>
                    
                     <div style="display:none;" class=" col-md-4 profilepic" >
                            <div> 
                     <div  class="change-p"><a> Document file</a></div>
              			 <hr />			<input type="file" name="file"  />

                        </form>
                        <hr />
           				 </div>
        </div>
  </div>
</div>


<?php

if(isset($_REQUEST['submit']))
{


$user = $_SESSION['user'] ;
$title =$_POST['title'];
$skill =$_POST['skill'];
$experience =$_POST['experience'];
$subtitle =$_POST['subtitle'];
$details =$_POST['details'];
$type =$_POST['type'];
$skills =$_POST['skills'];
//$file = $_FILES['file']['name']; 
$location =$_POST['location'];








$qry="update projects SET user='$email',title ='$title' ,subtitle ='$subtitle' , details ='$details', skills ='$skills', experience ='$experience',status='Published', type ='$type', location ='$location' where pid='$pid' ";

//$qry="insert into projects SET user='$email',title ='$title' ,subtitle ='$subtitle' , details ='$details', skills ='$skills', experience ='$experience', type ='$type', location ='$location', file ='$file' ";
//echo $qry;
mysql_query($qry) or die(mysql_error());
/*$target = "files/"; 
$target = $target . basename( $_FILES['file']['name']); 
move_uploaded_file($_FILES['file']['tmp_name'], $target); 
*/header('location:project.php?q='.$pid.'');
}

 ?>

 


<?php include('footer.php'); ?>
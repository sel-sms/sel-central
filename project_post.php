<?php
include('header.php');
?>
<div class="" style="margin-top: 3%;">
 <div class="container" style="    margin-top: 50px;">
            <div class=" col-md-8">
                      <div class="col-md-12" >
          <form method="post" role="form" action="project_submit.php" enctype="multipart/form-data" class="profiledetail" >
          <h1>Submit your Project </h1>
          <hr />
            <div class="form-group">
			           		<h2>Title</h2>

                            <input type="text" class="form-control" id="pwd" name="title" placeholder="Project title">
            </div>
            <div class="form-group">
			           		<h2>Subtitle</h2>

                            <input type="text" class="form-control" id="pwd" name="subtitle" placeholder="Subtitle">
            </div>

            <div class="form-group">
           		<h2>Project details  </h2>
                <textarea name="details" type="text" class="form-control"   ></textarea>
            </div>
             
              <div class="form-group">
              <h2>Skill </h2>
              <input id="myAutocomplete"  name="skills" type="text"  class="form-control"  />
           
            </div>
            
              <div style="display:none;" class="form-group">
                <h2>Experience</h2>
                <select class="form-control" name="experience" >
                  <option>---Select---</option>
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
                  <option>---Select---</option>
                  <option value="Fulltime"> Full time</option>
                  <option value="Parttime"> Part time</option>
                </select>
              </div>
              <div class="form-group">
             <h2>Location </h2>
                            <input type="text" class="form-control" id="pwd" name="location" placeholder="Location">
            </div>
             
            <div class="form-group">
            <input name="submit" id="" class="btn btn-default btn_2 btn_up"  value="Post your Project" type="submit">
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




 


<?php include('footer.php'); ?>
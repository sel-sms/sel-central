<?php include('head.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php');
$qry="select * from skill "; 
$sql=mysql_query($qry);

if(isset($_POST['submit']))
{
$skills =$_POST['skills'];

$qry1="insert into skill set  skills ='$skills' ";
mysql_query($qry1) or die(mysql_error());
header('location:skills.php');
}

 ?>
<section id="main-content">
    <section class="wrapper">
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>Skills</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Skills</li>
						<li><i class="fa fa-file-text-o"></i>Skills Details</li>
					</ol>
				</div>
			</div>
<div class="row">
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Skills Details
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> S No</th>
                                 <th><i class="icon_calendar"></i> Skills</th>
                               <th><i class="icon_cogs"></i> Action</th>
                              </tr>
							    <?php $i='0';
						while($row=mysql_fetch_array($sql)){
						$sno = $row{'sno'};
						$skills = $row{'skills'};
$i++;
						?>
							  
                              <tr>
                                 <td> <?php echo $i ; ?></td>
                                 <td> <?php echo $skills ; ?></td>

                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-danger" href="deleteskills.php?p=<?php echo $sno ?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                          <?php } ?>                             
                           </tbody>
                        </table>
                      </section>
                  </div>
				  
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Add Skills 
                          </header>
                          <div class="panel-body">
						                                <form role="form" method="post" action="#">
<div class="form-group">
                                      <label for="exampleInputEmail1">Skills Name</label>
                                      <input type="text" class="form-control" name="skills" id="exampleInputEmail1" placeholder="Skills ">
                                  </div>
                                                                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

                          </div>
                      </section>
                  </div>

              </div>	</section>
</section>
<?php include('footer.php'); ?>

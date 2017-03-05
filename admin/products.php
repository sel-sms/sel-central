<?php include('head.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php');
$qry12="select * from projects ";
$sql12=mysql_query($qry12);



 ?>
<section id="main-content">
    <section class="wrapper">
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>Products</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Products</li>
						<li><i class="fa fa-file-text-o"></i>Products Details</li>
					</ol>
				</div>
			</div>
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Products Details
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i>  S no</th>
                                 <th><i class="icon_calendar"></i>Project Id</th>
                                 <th><i class="icon_calendar"></i>Title</th>
                                 <th><i class="icon_mail_alt"></i> Employer</th>
                                 <th><i class="icon_mobile"></i> Skills</th>
                                 <th><i class="icon_pin_alt"></i> Status</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
							    <?php $i=0;
						while($roww=mysql_fetch_array($sql12)){
							$title = $roww{'title'};
							$pid = $roww{'pid'};
							$subtitle = $roww{'subtitle'};
							$details = $roww{'details'};
							$skills = $roww{'skills'};
							$city = $roww{'location'};
							$employer = $roww{'user'};
							$status = $roww{'status'};
							$experience = $roww{'experience'};
									$i++				
						?>
							  
                              <tr>
                                 <td> <?php echo $i ; ?></td>
                                 <td> <?php echo $pid ; ?></td>
                                 <td> <a target="_blank" href="../project.php?q=<?php echo $pid ; ?> " ><?php echo $title ; ?></a></td>
                                 <td> <?php echo $employer ; ?></td>
                                 <td> <?php echo $skills ; ?></td>
                                 <td> <?php echo $status ; ?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-danger" href="delete_projects.php?pid=<?php echo $pid ?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                          <?php } ?>                             
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>	</section>
</section>
<?php include('footer.php'); ?>

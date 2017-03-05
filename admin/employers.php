<?php include('head.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php');
$qry="select * from employer "; 
$sql=mysql_query($qry);


 ?>
<section id="main-content">
    <section class="wrapper">
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>Employers</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Employers</li>
						<li><i class="fa fa-file-text-o"></i>Employers Details</li>
					</ol>
				</div>
			</div>
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Employers Details
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Full Name</th>
                                 <th><i class="icon_calendar"></i> Date of Birth</th>
                                 <th><i class="icon_mail_alt"></i> Email</th>
                                 <th><i class="icon_mobile"></i> Contact no</th>
                                 <th><i class="icon_pin_alt"></i> Status</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
							    <?php 
						while($row=mysql_fetch_array($sql)){
						$name = $row{'name'};
						$sno = $row{'sno'};
						$dob = $row{'dob'};
						$email = $row{'email_id'};
						$contact_no = $row{'contact_no'};
						$status = $row{'status'};
						
						?>
							  
                              <tr>
                                 <td> <?php echo $name ; ?></td>
                                 <td> <?php echo $dob ; ?></td>
                                 <td> <?php echo $email ; ?></td>
                                 <td> <?php echo $contact_no ; ?></td>
                                 <td> <?php echo $status ; ?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="status.php?p=<?php echo $sno ?>&q=employer&r=employers&s=inactive"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="status.php?p=<?php echo $sno ?>&q=employer&r=employers&s=active"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="delete.php?p=<?php echo $sno ?>&q=employer&r=employers"><i class="icon_close_alt2"></i></a>
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

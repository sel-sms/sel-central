<?php include('head.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<section id="main-content">
    <section class="wrapper">
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>Courses</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Courses</li>
						<li><i class="fa fa-file-text-o"></i>Courses Details</li>
					</ol>
				</div>
			</div>
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Courses Details
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class=""></i> S. No</th>
                                 <th><i class="icon_calendar"></i> Courses Name</th>
                                 <th><i class="icon_mail_alt"></i>  Durations</th>
                                 <th><i class="icon_pin_alt"></i>  Category</th>
                                 <th><i class="icon_pin_alt"></i>  Details</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
							  
							  			<?php 
			$qry1="select * from courses"; 
			$sql1=mysql_query($qry1);
			$i=1;
			while($row1=mysql_fetch_array($sql1)){
			$sno = $row1{'sno'};
			$name = $row1{'name'};
			$duration = $row1{'duration'};
			$category = $row1{'category'};
			$details = $row1{'details'};
			?>

							  
                              <tr>
                                 <td> <?php echo $i ; ?></td>
                                 <td>   <?php echo $name ; ?></td>
                                 <td> <?php echo $duration ; ?></td>
                                 <td>  <?php echo $category ; ?></td>
                                 <td>  <?php echo $details ; ?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="status.php?p=<?php echo $sno ?>&q=courses&r=course&s=inactive"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="status.php?p=<?php echo $sno ?>&q=courses&r=course&s=active"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="delete.php?p=<?php echo $sno ?>&q=courses&r=course"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>			 <?php $i++;
			  } ?>
    </tbody>
                        </table>
                      </section>
                  </div>
              </div>	</section>
</section>
<?php include('footer.php'); ?>

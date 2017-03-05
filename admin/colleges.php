<?php include('head.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<section id="main-content">
    <section class="wrapper">
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Colleges</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Colleges</li>
						<li><i class="fa fa-file-text-o"></i>Add Colleges</li>
					</ol>
				</div>
			</div>
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Add Colleges
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
							  <th>Sno</th>
                                 <th><i class="icon_profile"></i> College Name</th>
                                 <th><i class="icon_mobile"></i> Mobile</th>
                                 <th><i class="icon_pin_alt"></i> City</th>
                                 <th><i class=""></i> Details</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
							  
			<?php 
			$qry2="select * from college"; 
			$sql2=mysql_query($qry2);
			$i=1;
			while($row2=mysql_fetch_array($sql2)){
			$sno = $row2{'sno'};
			$name = $row2{'name'};
			$mob = $row2{'contact'};
			$city = $row2{'city'};
			$details = $row2{'details'};
			?>
                              <tr>
                                 <td> <?php echo $i ; ?></td>
                                 <td>   <?php echo $name ; ?></td>
                                 <td> <?php echo $mob ; ?></td>
                                 <td>  <?php echo $city ; ?></td>
                                 <td>  <?php echo $details ; ?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="status.php?p=<?php echo $sno ?>&q=college&r=colleges&s=inactive"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="status.php?p=<?php echo $sno ?>&q=college&r=colleges&s=active"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="delete.php?p=<?php echo $sno ?>&q=college&r=colleges"><i class="icon_close_alt2"></i></a>
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

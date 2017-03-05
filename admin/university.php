<?php include('head.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<section id="main-content">
    <section class="wrapper">
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Universities</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>University</li>
						<li><i class="fa fa-file-text-o"></i>Add University</li>
					</ol>
				</div>
			</div>
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Add University
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
							  <th>Sno</th>
                                 <th><i class="icon_profile"></i> University Name</th>
                                 <th><i class="icon_mobile"></i> City</th>
								                                  <th><i class="icon_cogs"></i> Action</th>

                              </tr>
							  
			<?php 
			$qry3="select * from university "; 
			$sql3=mysql_query($qry3);
			$i=1;
			while($row3=mysql_fetch_array($sql3)){
			$sno = $row3{'sno'};
			$result3 = $row3{'name'};
			$city = $row3{'city'};
			?>
							  
                              <tr>
                                 <td> <?php echo $i  ?></td>
                                 <td>  <?php echo $result3  ?></td>
                                 <td> <?php echo $city  ?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="status.php?p=<?php echo $sno ?>&q=university&r=university&s=inactive"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="status.php?p=<?php echo $sno ?>&q=university&r=university&s=active"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="delete.php?p=<?php echo $sno ?>&q=university&r=university"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
			 <?php $i++;
			  } ?>
                        </tbody>
                        </table>
                      </section>
                  </div>
              </div>	</section>
</section>
<?php include('footer.php'); ?>

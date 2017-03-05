<?php include('head.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php');
$i = 0;
$j = 0;
$k = 0;
$l = 0;
$sql1 = mysql_query("SELECT * FROM student");
while(mysql_fetch_array($sql1)){ $i++ ;}
$sql2 = mysql_query('SELECT * FROM employer');
while(mysql_fetch_array($sql2)){ $j++ ;}
$sql3 = mysql_query('SELECT * FROM projects');
while(mysql_fetch_array($sql3)){ $k++ ;}
$sql4 = mysql_query('SELECT * FROM feedbacks');
while(mysql_fetch_array($sql4)){ $l++ ;}





 ?>
<section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>						  	
					</ol>
				</div>
			</div>
              
          <div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box blue-bg">
						<i class="fa fa-users "></i>
						<div class="count"><?php echo $i ; ?></div>
						<div class="title">Students</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box brown-bg">
						<i class="fa fa-users"></i>
						<div class="count"><?php echo $j ; ?></div>
						<div class="title">Employers</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->	
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box dark-bg">
						<i class="fa fa-building-o"></i>
						<div class="count"><?php echo $k ; ?></div>
						<div class="title">Projects</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box green-bg">
						<i class="fa fa-graduation-cap"></i>
						<div class="count"><?php echo $l ; ?></div>
						<div class="title">Feedbacks</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
			</div><!--/.row-->
		
			

          </section>
      </section><?php include('footer.php'); ?>

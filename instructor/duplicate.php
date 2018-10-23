<?php
include('../include/db.php');
error_reporting(E_ALL);
$email = $_SESSION['email'];
$join = "SELECT * FROM student WHERE email = '$email'";
$res = $conn->query($join);
if ($res->num_rows > 0) {
while ($result = $res-> fetch_assoc()) {
           $name = $result['name'];
               $sch = $result['school']; 
            }
}

?>


<!DOCTYPE html>
<!-- 
Template Name: Educo
Version: 2.0.0
Author: 
Website: 
Purchase: 
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Begin Head -->
<head>
<meta charset="utf-8" />
<title>Highschool</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description"  content="Educo"/>
<meta name="keywords" content="Educo, html template, Education template" />
<meta name="author"  content="Kamleshyadav"/>
<meta name="MobileOptimized" content="320" />

<!--srart theme style -->
<link href="../css/main.css" rel="stylesheet" type="text/css"/>
<!-- end theme style -->
<!-- favicon links -->
<link rel="shortcut icon" type="image/png" href="../images/header/favicon.png" />
</head>
<body>
<!--Page main section start-->
<div id="educo_wrapper">
<!--Header start-->
  
	<?php include('stuloghead.php'); ?>	
 
 <!--header end -->
<!--Breadcrumb start-->

<!--Breadcrumb end-->
<!--single student detail start-->
<div class="ed_dashboard_wrapper">
	<div class="container">
		<div class="row">
			<?php include('dashlink.php'); ?>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<div class="ed_dashboard_tab">
				<div class="tab-content">
					<div class="tab-pane active" id="dashboard">
						<div class="ed_dashboard_tab_info">
						<h1>hello, <span><?php echo $name; ?></span></h1>
						<h1>welcome to dashboard</h1>
						<p>Hi <strong><?php echo $name; ?></strong>, here you have to see and update your profile, subscribed courses, activities, notifications and other things. All the above updates can be modified from the left panel provided.</p>
						</div>
					</div>
					<?php include('stucourse.php'); ?>
					<?php include('stuactivity.php'); ?>
					<?php include('stupronot.php'); ?>
					<?php include('stusettings.php'); ?>
					<div class="tab-pane" id="forums">
						<div class="ed_dashboard_inner_tab">
							<div role="tabpanel">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#started" aria-controls="started" role="tab" data-toggle="tab">topics started</a></li>
									<li role="presentation"><a href="#replies" aria-controls="replies" role="tab" data-toggle="tab">replies created</a></li>
									<li role="presentation"><a href="#favourite" aria-controls="favourite" role="tab" data-toggle="tab">favourite</a></li>
									<li role="presentation"><a href="#subscribed" aria-controls="subscribed" role="tab" data-toggle="tab">subscribed</a></li>
								</ul>
					
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="started">
									<div class="ed_dashboard_inner_tab">
										<h2>forum topics started</h2>
										<span>You have not created any topics.</span>
									</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="replies">
									<div class="ed_dashboard_inner_tab">
										<h2>forum replies created</h2>
										<span>You have not replied to any topics.</span>
									</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="favourite">
									<div class="ed_dashboard_inner_tab">
										<h2>favorite forum topics</h2>
										<span>You currently have no favourite topics.</span>
									</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="subscribed">
									<div class="ed_dashboard_inner_tab">
										<h2>subscribed forums</h2>
										<span>You are not currently subscribed to any forums.</span>
									</div>
									</div>
								</div>
					
							</div><!--tab End-->
						</div>
					</div>
				</div>
			</div>
			</div>
			
			
		</div>
	</div>
</div>
<!--single student detail end-->
<!--Footer Top section start-->
<?php include('footer.php');?>
<!--Footer Bottom section end-->
</div>
<!--Page main section end-->
<!--main js file start--> 
<script type="text/javascript" src="../js/jquery-1.12.2.js"></script> 
<script type="text/javascript" src="../js/bootstrap.js"></script> 
<script type="text/javascript" src="../js/modernizr.js"></script> 
<script type="text/javascript" src="../js/owl.carousel.js"></script> 
<script type="text/javascript" src="../js/jquery.stellar.js"></script> 
<script type="text/javascript" src="../js/smooth-scroll.js"></script> 
<script type="text/javascript" src="../js/plugins/revel/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="../js/plugins/revel/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="../js/plugins/revel/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="../js/plugins/revel/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="../js/plugins/revel/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="../js/plugins/countto/jquery.countTo.js"></script>
<script type="text/javascript" src="../js/plugins/countto/jquery.appear.js"></script>
<script type="text/javascript" src="../js/custom.js"></script> 

<!--main js file end-->
</body>
</html>
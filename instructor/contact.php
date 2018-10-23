<?php

if (isset($_POST["send"])) {
	# code...

$un=$_POST['username'];
$em=$_POST['useremail'];
$su=$_POST['useresubject'];
$msg=$_POST['mesg'];
if(trim($un)!="" && trim($msg)!="" && trim($su)!="" && trim($em)!="")
{
	if(filter_var($em, FILTER_VALIDATE_EMAIL))
	{
		$message="Hi Admin..<p>".$un." has sent a query having subject".$su."email id as ".$em."</p><p>Query is : ".$msg."</p>";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: <support@educo.com>' . "\r\n";

		if(mail('jhini.mehta@gmail.com','Query for Educo',$message,$headers ))
		{
		echo '1#<p style="color:green;">Mail has been sent successfully.</p>';
		}
		else
		{
		echo '2#<p style="color:red;">Please, Try Again.</p>';
		}
	}
	else
		echo '2#<p style="color:red">Please, provide valid Email.</p>';
}
else
{
echo '2#<p style="color:red">Please, fill all the details.</p>';
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
<title>highschool</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description"  content="Educo"/>
<meta name="keywords" content="Educo, html template, Education template" />
<meta name="author"  content="Kamleshyadav"/>
<meta name="MobileOptimized" content="320" />

<!--srart theme style -->
<link href="../css/main.css" rel="stylesheet" type="text/css"/>
<!-- end theme style -->
<!-- favicon links -->
<link rel="shortcut icon" type="image/png." href="images/header/favicon.png" />
</head>
<body>
<!--Page main section start-->
<div id="educo_wrapper">
<!--Header start-->
  
	<?php include('header.php'); ?>	
 
 <!--header end -->
<!--Breadcrumb start-->
<div class="ed_pagetitle" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" style="background-image: url(http://placehold.it/921X533);">
<div class="ed_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-4 col-sm-6">
				<div class="page_title">
					<h2>Contact Us</h2>
				</div>
			</div>
			<div class="col-lg-6 col-md-8 col-sm-6">
				<ul class="breadcrumb">
					<li><a href="index.php">home</a></li>
					<li><i class="fa fa-chevron-left"></i></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb end-->
<!--Section fourteen Contact form start-->
<div class="ed_transprentbg ed_toppadder80 ed_bottompadder80">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ed_heading_top">
					<h3>Send us a message</h3>
				</div>
			</div>
			<form method="POST"  action="#" >
			<div class="ed_contact_form ed_toppadder60">
				<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="form-group">
					<input type="text" name="username" id="uname" class="form-control"  placeholder="Your Name">
				</div>
				<div class="form-group">
					<input type="email" name="useremail" id="umail" class="form-control"  placeholder="Your Email">
				</div>
				<div class="form-group">
					<input type="text" name="useresubject" id="sub" class="form-control"  placeholder="Subject">
				</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="form-group">
					<textarea id="msg" name="mesg" class="form-control" rows="6" placeholder="Message"></textarea>
				</div>
				<button name="send" id="ed_submit" class="btn ed_btn ed_orange pull-right">send</button>
				<p id="err"></p>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<!--Section fourteen Contact form start-->
<!--Section fifteen Contact form start-->

<!--Section fifteen Contact form end-->
<!--Newsletter Section six start-->

<!--Newsletter Section six end-->
<!--Footer Bottom section start-->
<?php include ('footer.php'); ?>
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
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="../js/gmaps.js"></script>
<script type="text/javascript" src="../js/custom.js"></script> 
<script>
     var map;
    $(document).ready(function(){
      map = new GMaps({
        el: '#map',
        zoom: 16,
        lat: -12.043333,
        lng: -77.028333,
		scrollwheel: false,
		draggable:false,
		zoomControl: false,
		navigationControl: false,
		mapTypeControl: false,
		scaleControl: false,
		disableDoubleClickZoom: true,
		streetViewControl : false,
		overviewMapControl: false,
		panControl : false
      });
   
    });
  </script>
<!--main js file end-->
</body>
</html>
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

 if(!empty($_FILES['uploaded_file']))
  {
    $path = "files/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded<br>";
      $filename = basename( $_FILES['uploaded_file']['name']);
      echo $filename;
    } else{
        echo "There was an error uploading the file, please try again!";
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
<html lang="en" class="no-js">
<!--<![endif]-->

<!-- Begin Head -->
<head>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
<meta charset="utf-8" />
<title>Highschool</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description"  content="Educo"/>
<meta name="keywords" content="Educo, html template, Education template" />
<meta name="author"  content="Kamleshyadav"/>
<meta name="MobileOptimized" content="320" />

<!--srart theme style -->
<link href="../css/main.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="../css/component.css" />
<!-- end theme style -->
<!-- favicon links -->
<link rel="shortcut icon" type="image/png" href="../images/header/favicon.png" />
<style > .file-field.medium .file-path-wrapper {
  height: 3rem; }
  .file-field.medium .file-path-wrapper .file-path {
    height: 2.8rem; }

.file-field.big-2 .file-path-wrapper {
  height: 3.7rem; }
  .file-field.big-2 .file-path-wrapper .file-path {
    height: 3.5rem; }</style>
    <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
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
			<?php // include('dashlink.php'); ?>
			<div class="col-lg-12 col-md-12 col-sm-9 col-xs-12">
			<div class="ed_dashboard_tab">
				<div class="tab-content">
					<div class="tab-pane " id="dashboard">
						<div class="ed_dashboard_tab_info">
						<h1>hello, <span><?php echo $name; ?></span></h1>
						<h1>welcome to dashboard</h1>
						<p>Hi <strong><?php echo $name; ?></strong>, here you have to see and update your profile, subscribed courses, activities, notifications and other things. All the above updates can be modified from the left panel provided.</p>
						</div>
					</div>

					<!-- tested -->
					<div class="tab-pane active" id="courses">
	<div class="ed_dashboard_inner_tab">
		<div role="tabpanel">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#my" aria-controls="my" role="tab" data-toggle="tab">Activities</a></li>
				<li role="presentation"><a href="#result" aria-controls="result" role="tab" data-toggle="tab">Notifications</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="my">
					<div class="ed_inner_dashboard_info">

<!--form enctype="multipart/form-data" action="" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form-->



						<div class="row">
							<div class="container col-sm-12">
								<h4>Upload or Write through this textarea </h4>
								<div class="panel panel-default col-sm-9">
									<div class="panel-body">
										<form class="md-form" method="POST" action="#" enctype="multipart/form-data" >
											<div class="form-group">
												<label for="exampleFormControlTextarea1">write here or upload a file
													<textarea name="write"  class="form-control" id="exampleFormControlTextarea1" rows="3" cols="100%" ></textarea>
												</div>

												<div class="container">
													<div class="box">

<!--form enctype="multipart/form-data" action="" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form-->


														<input type="file" name="uploaded_file" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf"  />
														<label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
													</div>
												</div>
												<input name="sub" type="submit"  class="btn ed_btn ed_orange pull-right" value="submit" >
												<script src="../js/custom-file-input.js"></script>	
											</form>
										</div>
									</div>
									<div class="panel panel-default col-sm-3">
										<div class="panel-body">A Basic Panel</div>
									</div>
								</div>
							
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="result">
						<div class="ed_dashboard_inner_tab">
							<h2>result details</h2>
							<p>Nam id ligula tristique, porta dolor ac, pretium leo. Maecenas scelerisque vulputate dapibus. Quisque sodales tincidunt sapien, eu consequat erat tempus et. Nullam ipsum est, interdum quis posuere sed, imperdiet quis nisi. Proin quis justo est. Vestibulum imperdiet leo sit amet tortor suscipit, id cursus ligula pharetra. Uctus ac eros a, faucibus iaculis quam. Nam non iaculis justo. Donec maximus varius velit.</p>
						</div>
					</div>

				</div>

			</div><!--tab End-->
		</div>
	</div>
					<!-- end tested -->
					<!-- end tested-->
					<?php // include('stucourse.php'); ?>
					<?php // include('stuactivity.php'); ?>
					<?php // include('stupronot.php'); ?>
					<?php // include('stusettings.php'); ?>
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
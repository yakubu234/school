<<<<<<< HEAD
<?php  
include('include/db.php');error_reporting(E_ALL);
$sql = "SELECT * FROM schools ORDER BY id asc ";
			$query = $conn->query($sql);
			while ($lit = $query-> fetch_assoc()) {
			 $id = $lit['id'];
			$id = $id + 202 ;
			$id2 = "SCH_".$id;
			$_session['id_2'] = $id2;
			}
/*$sqlit = "SELECT * FROM teacher ORDER BY id asc ";
			$que = $conn->query($sqlit);
			while ($lit = $que-> fetch_assoc()) {
			echo $id = $lit['id'];
			$id = $id + 202 ;
			$ref = "REF_".$id."T";
			$_session['refcode'] = $ref;
			}*/

$schname = "";
if (isset($_POST['signup'])) {
	$name = $_POST['fullname'];
	$email =$_POST['email'];
	$pass = $_POST['password'];
	$role= $_POST['role'];
	$schname = $_POST['schname'];
	$id2 = $_session['id_2'];
	if ($schname == "") {
}else{
	$sel = " SELECT * FROM schools where name = '$schname'";
$select = $conn->query($sel);
if ($select->num_rows > 0 ) {
}else{
	$inse = "INSERT INTO schools (id_2,name) VALUES ('$id2','$schname') ";
	$rel = $conn->query($inse);
	echo $conn->error;
}
}
	switch ($role) {
    case "Teacher":
        $ins  = "INSERT INTO teacher (name,email,password,sch_code,school,type) VALUES('$name','$email','$pass','$id2','$schname','$role')" ;
        $res = $conn-> query($ins);
         if($res === TRUE)
    {
        echo "<script>
        alert('registration successful Please re-login');
        </script>";
       ?>
       				<meta http-equiv="refresh"  content="0;url='index.php'">
       				<?php
    }else{ echo "<script>
        alert('email already exist ');
        </script>";
        /*header('location:refresh:1;signup.php');*/
    }
        break;
    case "Student":
         $ins  = "INSERT INTO student (name,email,password,school,sch_code,type) VALUES('$name','$email','$pass','$schname','$id2','$role')" ;
        $res = $conn-> query($ins);
         if($res === TRUE)
    {
        echo "<script>
        alert('registration successful Please re-login');
        </script>";
           ?>
       				<meta http-equiv="refresh"  content="0;url='index.php'">
       				<?php
    }else{ echo "<script>
        alert('email already exist ');
        </script>";
      /*  header('location:refresh:0;signup.php');*/
    }
        break;
    case "Parent":
           $ins  = "INSERT INTO parent (name,email,password,school,type) VALUES('$name','$email','$pass','$schname','$role')" ;
        $res = $conn-> query($ins);
         if($res === TRUE)
    {
        echo "<script>
        alert('registration successful Please re-login');
        </script>";
        ?>
       				<meta http-equiv="refresh"  content="0;url='index.php'">
       				<?php
    }else{ echo "<script>
        alert('email already exist ');
        </script>";
      /*  header('location:refresh:0;signup.php');*/
    }
        break;
}
}
?>
=======
>>>>>>> 42db2460d906b0a76aaea5085437c570e951f23f
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
<<<<<<< HEAD
<title>highschool</title>
=======
<title>Educo Responsive HTML Template</title>
>>>>>>> 42db2460d906b0a76aaea5085437c570e951f23f
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description"  content="Educo"/>
<meta name="keywords" content="Educo, html template, Education template" />
<meta name="author"  content="Kamleshyadav"/>
<meta name="MobileOptimized" content="320" />

<!--srart theme style -->
<link href="css/main.css" rel="stylesheet" type="text/css"/>
<!-- end theme style -->
<!-- favicon links -->
<link rel="shortcut icon" type="image/png" href="images/header/favicon.png" />
</head>
<body>
<!--Page main section start-->
<div id="educo_wrapper">
<!--Header start-->
  
	<?php include('header.php'); ?>	
 
 <!--header end -->
<!--Breadcrumb start-->

<!--Breadcrumb end-->
<div class="ed_transprentbg ed_toppadder5 ed_bottompadder80">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
				<div class="ed_teacher_div">
					<div class="ed_heading_top">
						<h3>sign up</h3>
					</div>
					<form method="POST" action="#" class="ed_contact_form ed_toppadder40">
						<div class="form-group">
							<label class="control-label">Full Name :</label>
							<input type="text" name="fullname" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">Email :</label>
							<input type="email" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">Password :</label>
							<input type="password" name="password" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">Choose Role :</label>
							<select name="role" class="form-control">
								<option>Choose Role</option>
								<option value="Teacher" >Teacher</option>
								<option value="Student" >Student</option>
								<option value="Parent" >Parent</option>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label">School Name :</label>
							<input type="text" name="schname" class="form-control">
						</div>
						<input name="signup" type="submit"  class="btn ed_btn ed_orange pull-right" value="sign up" >
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- signup code -->
<<<<<<< HEAD

=======
<?php  
include('include/db.php');
$sql = "SELECT * FROM schools ORDER BY id asc ";
			$query = $conn->query($sql);
			while ($lit = $query-> fetch_assoc()) {
			 $id = $lit['id'];
			$id = $id + 202 ;
			$id2 = "SCH_".$id;
			$_session['id_2'] = $id2;
			}
/*$sqlit = "SELECT * FROM teacher ORDER BY id asc ";
			$que = $conn->query($sqlit);
			while ($lit = $que-> fetch_assoc()) {
			echo $id = $lit['id'];
			$id = $id + 202 ;
			$ref = "REF_".$id."T";
			$_session['refcode'] = $ref;
			}*/

$schname = "";
if (isset($_POST['signup'])) {
	$name = $_POST['fullname'];
	$email =$_POST['email'];
	$pass = $_POST['password'];
	$role= $_POST['role'];
	$schname = $_POST['schname'];
	$id2 = $_session['id_2'];
	$ref = $_session['refcode'];
	if ($schname == "") {
}else{
	$sel = " SELECT * FROM schools where name = $schname";
$select = $conn->query($sel);
if ($select->num_rows > 0 ) {
}else{
	$inse = "INSERT INTO schools (id_2,name) VALUES ('$id2','$schname') ";
	$rel = $conn->query($inse);
	echo $conn->error;
}
}
	switch ($role) {
    case "Teacher":
        $ins  = "INSERT INTO teacher (name,email,password,sch_code,school,type) VALUES('$name','$email','$pass','$id2','$schname','$role')" ;
        $res = $conn-> query($ins);
         if($res === TRUE)
    {
        echo "<script>
        alert('registration successful');
        </script>";
    }
        break;
    case "Student":
         $ins  = "INSERT INTO student (name,email,password,school,sch_code,type) VALUES('$name','$email','$pass','$schname','$id2','$role')" ;
        $res = $conn-> query($ins);
         if($res === TRUE)
    {
        echo "<script>
        alert('registration successful');
        </script>";
    }
        break;
    case "Parent":
           $ins  = "INSERT INTO parent (name,email,password,school,type) VALUES('$name','$email','$pass','$schname','$role')" ;
        $res = $conn-> query($ins);
         if($res === TRUE)
    {
        echo "<script>
        alert('registration successful');
        </script>";
    }
        break;
}
}

?>
>>>>>>> 42db2460d906b0a76aaea5085437c570e951f23f
<!-- end of signup code -->

<!--Footer Bottom section start-->
<?php include ('footer.php'); ?>
<!--Footer Bottom section end-->
</div>
<!--Page main section end-->



<!--main js file start--> 
<script type="text/javascript" src="js/jquery-1.12.2.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/modernizr.js"></script> 
<script type="text/javascript" src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/jquery.stellar.js"></script> 
<script type="text/javascript" src="js/smooth-scroll.js"></script> 
<script type="text/javascript" src="js/plugins/revel/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/plugins/revel/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/plugins/revel/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/plugins/revel/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/plugins/revel/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/plugins/countto/jquery.countTo.js"></script>
<script type="text/javascript" src="js/plugins/countto/jquery.appear.js"></script>
<script type="text/javascript" src="js/custom.js"></script> 
<!--main js file end-->
</body>
</html>
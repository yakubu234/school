<<<<<<< HEAD
	<!-- login code >

						  <?php
              include('include/db.php');
              error_reporting(E_ALL);
              if (isset($_POST['login'])) {
                 $email = $_POST['email'];
                 $pass = $_POST['pass'];
                 $role = $_POST['role'];
                switch ($role) {
           case "Teacher":
            $sel = "SELECT * FROM teacher WHERE email = '$email' and password = '$pass' and type = '$role' ";
            $res = $conn->query($sel);
            if ($res->num_rows > 0 ) {
              $_SESSION['email']= $email;
              ?>
              <meta http-equiv="refresh"  content="0;url='instructor/dashboard.php'">
              <?php
            }else{
                   echo "<script>
                  alert('No Record Found');
                   </script>";
                 /* header('location:refresh:0;index.php');*/
                 ?>
              <meta http-equiv="refresh"  content="0;url='index.php'">
              <?php
                }
              break;
          case "Student":
          $sel = "SELECT * FROM student WHERE email = '$email' and password = '$pass' and type = '$role' ";
            $res = $conn->query($sel);
            if ($res->num_rows > 0 ) {
              $_SESSION['email']= $email;
              ?>
              <meta http-equiv="refresh"  content="0;url='student/dashboard.php'">
              <?php
            }else{
                   echo "<script>
                  alert('No Record Found');
                   </script>";
                  ?>
              <meta http-equiv="refresh"  content="0;url='index.php'">
              <?php
                }
             break;
           case "Parent":
                      $sel = "SELECT * FROM parent WHERE email = '$email' and password = '$pass' and type = '$role' ";
            $res = $conn->query($sel);
            if ($res->num_rows > 0 ) {
              $_SESSION['email']= $email;
              ?>
              <meta http-equiv="refresh"  content="0;url='dashboard.php'">
              <?php
            }else{
                   echo "<script>
                  alert('No Record Found');
                   </script>";
                  ?>
              <meta http-equiv="refresh"  content="0;url='index.php'">
              <?php
                }
               break;
            }
                            }
              ?>

              <!-- end of login -->
=======
<!-- login code -->

							<?php
							include('include/db.php');
							if (isset($_POST['login'])) {
								 $email = $_POST['email'];
								 $pass = $_POST['pass'];
								 $role = $_POST['role'];
								switch ($role) {
   				 case "Teacher":
       			$sel = "SELECT * FROM teacher WHERE email = '$email' and password = '$pass' and type = '$role' ";
       			$res = $conn->query($sel);
       			if ($res->num_rows > 0 ) {
       				$_SESSION['email']= $email;
       				?>
       				<meta http-equiv="refresh"  content="0;url='dashboard.php'">
       				<?php
       			}else{
       						 echo "<script>
        					alert('No Record Found');
       						 </script>";
        					
  						  }
        			break;
    			case "Student":
    			$sel = "SELECT * FROM student WHERE email = '$email' and password = '$pass' and type = '$role' ";
       			$res = $conn->query($sel);
       			if ($res->num_rows > 0 ) {
       				$_SESSION['email']= $email;
       				?>
       				<meta http-equiv="refresh"  content="0;url='student/dashboard.php'">
       				<?php
       			}else{
       						 echo "<script>
        					alert('No Record Found');
       						 </script>";
        					echo $conn->error;
  						  }
       			 break;
   				 case "Parent":
   	           				$sel = "SELECT * FROM parent WHERE email = '$email' and password = '$pass' and type = '$role' ";
       			$res = $conn->query($sel);
       			if ($res->num_rows > 0 ) {
       				$_SESSION['email']= $email;
       				?>
       				<meta http-equiv="refresh"  content="0;url='dashboard.php'">
       				<?php
       			}else{
       						 echo "<script>
        					alert('No Record Found');
       						 </script>";
        					
  						  }
       				 break;
						}

														}

							?>

							<!-- end of login -->

>>>>>>> 42db2460d906b0a76aaea5085437c570e951f23f
<header id="ed_header_wrapper">
	<div class="ed_header_top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<p>welcome guest</p>
					<div class="ed_info_wrapper">
						<a href="#" id="login_button">Login</a>
							<div id="login_one" class="ed_login_form">
								<h3>log in</h3>
<<<<<<< HEAD
								<form class="form" method="POST" action="login.php">
=======
								<form class="form" method="POST" >
>>>>>>> 42db2460d906b0a76aaea5085437c570e951f23f
									<div class="form-group">
										<label class="control-label">Email :</label>
										<input type="email" name="email" class="form-control" >
									</div>
									<div class="form-group">
										<label  class="control-label">Password :</label>
										<input type="password" name="pass" class="form-control">
									</div>
									<div class="form-group">
										<label  class="control-label">Role :</label>
										<select name="role" class="form-control">
											<option value="Teacher" >Instructor</option>
											<option value="Student" >Student</option>
											<option value="Parent" >Parent</option>


										</select>
									</div>
									<div class="form-group">
										<button name="login" type="submit">login</button>
										<a href="signup.php" >sign up</a>	
									</div>
								</form>
							</div>
							
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ed_header_bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2">
					<div class="educo_logo"> <a href="index.php"><img src="images/header/Logo.png" alt="logo" /></a> </div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8">
					<div class="edoco_menu_toggle navbar-toggle" data-toggle="collapse" data-target="#ed_menu">Menu <i class="fa fa-bars"></i>
					</div>
					<div class="edoco_menu">
						<ul class="collapse navbar-collapse" id="ed_menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">about us</a></li>
							<li><a href="#">Forum</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2">
					<div class="educo_call"><i class="fa fa-phone"></i><a href="#">+234 8030960928</a></div>
				</div>
			</div>
		</div>
    </div>
</header>
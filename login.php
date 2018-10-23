<!-- login code -->

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

<?php 

  include 'app/database.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Deep Travels Login</title>


  <link href="css/all.min.css" rel="stylesheet" type="text/css">


  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="Post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="u_email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="u_password" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <button type="submit" name="loginbtn" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>


<?php 
  
  if (isset($_POST['loginbtn'])) {
      $email = $_POST['u_email'];
      $password = md5($_POST['u_password']);

      $sql = "SELECT * FROM adminlogin WHERE `u_email` = '$email' && `password` = '$password'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["FirstName"]; 
        session_start();
        $_SESSION["user"] = $row['u_email'];
      

         echo '<script language="javascript"> location.href = "index.php" </script>';

    }
    } else {
    echo "0 results";
}

  }


?>
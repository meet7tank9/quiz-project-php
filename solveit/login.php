<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SolveIt</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.10.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <?php
        include './db.inc.php';
          session_start();
          if(isset($_SESSION['IS_LOGIN'])){
            header("location: ./index.php");
          }
    ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>SolveIt</span>
      </a>

    </div>
  </header><!-- End Header -->


<!-- login form section   -->
<link rel="stylesheet" href="./signup.css">

    <form class="form-login" method="POST">
        
        <div class="heading" style="margin-bottom: 50px; margin-top: 30px;"> Login </div>
        <label class="label">Enter Username</label><br>
        
        <input type="text" name="username" placeholder="Enter Username" class="input" required><br>

        <label class="label"> Enter Password </label><br>

        <input type="password" name="password" placeholder="Enter Password" class="input" required><br><br>

        <input type="submit" name="submit" value="login" class="submit">
        <br><br>
        <div style="position:relative; left:20%;">Don't have an account? -><a href="./signup.php">Signup</a></div>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $que = "SELECT * FROM users where name = '$username' and password = '$password' ";
        $run = mysqli_query($con, $que);
        $result=mysqli_fetch_array($run);
        if($result['name']!=$username or $result['password']!=$password){?>
          <sctipt>
            <div class="alert alert-danger" role="alert">
              <h4 class="alert-heading"></h4>
              <p>username or password is wrong</p>
              <p class="mb-0"></p>
            </div>
          </script>
          <?php
          header("LOCATION: ./login.php");
        }
        else{
          $_SESSION['email'] = $email;
          $_SESSION['password'] = $password;
          $_SESSION['IS_LOGIN'] = 'yes';
          header("LOCATION: ./index.php");
        }
        
    }
    ?>
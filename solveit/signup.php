
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
                header("location: ./login.php");
            }
    ?>
    
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>SolveIt</span>
      </a>
      
      <div style="font-size:large; color:red;">
          you have to signup to enter our website
      </div>
    </div>
  </header><!-- End Header -->

<link rel="stylesheet" href="./signup.css">

<div>
    <form class="form" method="POST">

        <div class="heading" style="margin-bottom: 10px;"> Sign Up </div>
        
        <label class="label">Create Username</label><br>
        
        <input type="text" name="username" placeholder="Enter Username" class="input" required><br>
        
        <label class="label">Enter Email</label><br>

        <input type="email" name="email" placeholder="Enter Email" class="input" required><br>

        <label class="label"> Create Password </label><br>

        <input type="password" name="password" placeholder="Enter Password" class="input" id="pass" required><br><br>
        
        <input type="submit" name="submit" value="SignUp" class="submit" onclick="passwordchk()">
        <br><br>
        <div style="position:relative; left:17%;">do you already have an account? <a href="login.php">Login</a></div>
    </form>
</div>

    <?php
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
      

        if(strlen($password)>6){
          $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$username', '$email', '$password')";
          $run=mysqli_query($con,$query);
          
          if($run){
              header("LOCATION: ./login.php");
          }
        }else{
          echo "<script>alert('password length must be greater than 6 characters); </script>";
        }
      // }

    }
    ?>
<?php
include "./header.inc.php";

?>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

<div class="container" data-aos="fade-up">

  <header class="section-header">

    <p>Contact & Feedback</p>
  </header>

  <div class="row gy-4">

    <div class="col-lg-6">

      <div class="row gy-4">
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <p>101, Fortune Complex<br>Ahmedabad, 320008</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-telephone"></i>
            <h3>Call Us</h3>
            <p>+91 8945671299<br>+91 9456213789</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <p>info@solveit.com<br>contact@solveit.com</p>
          </div>
        </div>

      </div>

    </div>

    <div class="col-lg-6">
      <form method="post">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
          </div>

          <div class="col-md-6 ">
            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
          </div>

          <div class="col-md-12">
            <input type="mobile" class="form-control" name="mobile" placeholder="Your Mobile" required>
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
          </div>

          <div class="col-md-12 text-center ">


            <input type="submit" name="submit" value="submit" class="btn btn-primary">
          </div>

        </div>
      </form>

    </div>

  </div>

</div>

</section><!-- End Contact Section -->



<?php
include "./footer.inc.php";

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];
$que = "INSERT INTO `contact` ( `name`, `email`, `mobile`, `message`) VALUES ( '$name', '$email', '$mobile', '$message')";
$run = mysqli_query($con, $que);
}
?>
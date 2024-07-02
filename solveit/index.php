<?php
include "./header.inc.php";

session_start();
if(!isset($_SESSION['IS_LOGIN'])){
    header("location: ./login.php");
}

?>

<!-- ======= poster Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">SolveIt</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">Welcome to out website, here you can attend quiz of different topics </h2>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="./play_quiz.php" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Get Started</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/hero-img.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section><!-- poster  -->

  <!-- ======= social Section ======= -->
  <section id="socials">
  <div class="container">
    <header class="section-header">
      <p>Socials</p>
    </header>
    <div class="container me-3">
      <div class="row ml-3">
        <div class="col-md-2 p-3">
          <a href="https://twitter.com/" class="twitter"><i class="bi bi-twitter" style="font-size:30px;"></i></a>

        </div>
        <div class="col-md-2 p-3">
          <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook" style="font-size:30px;"></i></a>

        </div>
        <div class="col-md-2 p-3">
          <a href="https://www.instagram.com/accounts/login/" class="instagram"><i class="bi bi-instagram" style="font-size:30px;"></i></a>

        </div>
        <div class="col-md-2 p-3">
          <a href="https://www.linkedin.com/" class="linkedin"><i class="bi bi-linkedin" style="font-size:30px;"></i></a>

        </div>
        <div class="col-md-2 p-3">
          <a href="https://www.github.com/" class="github"><i class="bi bi-github" style="font-size:30px;"></i></a>

        </div>
      </div>
    </div>
  </div>
  </section>
  <!-- End social Section-->
</main><!-- End #main -->

<?php
include "./footer.inc.php";

?>
<?php
include "./header.inc.php";
$que = "SELECT * FROM quiz_details ORDER BY id DESC";
$run = mysqli_query($con, $que);
$count=1;
?>

<main id="main">
  <!-- ======= play quiz Section ======= -->
  <section class="about">

    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <hr style="background-color:red;">
        <p>All quiz</p>
        <hr style="background-color:red;">
      </header>
      <?php
      while ($result = mysqli_fetch_assoc($run)) {
        $quiz_id = $result['id'];
      ?>
      <div class="container me-3">
        <div class="row ml-3">
          <div class="col-md-2 p-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Quiz - <?= $count++; ?></h5>
                  <hr>
                  <h4 style="color:darkblue"><?php echo $result['name']; ?></h4>
                  <h6 class="card-subtitle mb-2 text-muted">Category : <?php echo $result['category']; ?> </h6>
                  <a href="./show_question.php?id=<?= $quiz_id ?>" class="card-link">Start Quiz</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php } ?>
    </div>

  </section><!-- End play quiz Section -->

</main><!-- End #main -->

<?php
include "./footer.inc.php";
?>
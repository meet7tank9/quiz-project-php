<?php
include "./header2.inc.php";
$qid = $_GET['id'];

$que = "SELECT * FROM questions where quiz_id=$qid";
$run = mysqli_query($con, $que);

$count = 1;

?>

<main id="main">
    <!-- ======= play quiz Section ======= -->
    <section id="play_quiz" class="about">

        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <hr style="background-color: red;">
                <p>Questions</p>
                <hr style="background-color: red;">
            </header>
            
            <?php
                while($result = mysqli_fetch_array($run)){
            ?>

                <div id="content">
                    <div class="container">

                        <form class="user" method="POST">
                            <div class="questions" id="ques">


                                <h4>Question : <?php echo $count++; ?></h4>
                                <div class="form-group">
                                    <label for="" class="form-label"><?php echo $result['question']; ?></label>

                                </div>
                                <div class="">
                                    <div class="form-group">
                                        <div for="" class="form-label"><span>
                                                <h3>A : </h3>
                                            </span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['option1']; ?></div>

                                    </div>
                                    <div class="form-group ">
                                        <div for="" class="form-label"><span>
                                                <h3>B : </h3>
                                            </span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['option2']; ?></div>

                                    </div>
                                    <div class="form-group">
                                        <div for="" class="form-label"><span>
                                                <h3>C : </h3>
                                            </span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['option3']; ?></div>

                                    </div>
                                    <div class="form-group">
                                        <div for="" class="form-label"><span>
                                                <h3>D : </h3>
                                            </span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['option4']; ?></div>

                                    </div>
                                    <div class="form-group col-12">
                                        <label for="" class="form-label">Answer:</label>
                                        <select name="uanswer" id="" class="form-control">
                                            <option value="<?php $result['ans1']; ?>">1</option>
                                            <option value="<?php $result['ans2']; ?>">2</option>
                                            <option value="<?php $result['ans3']; ?>">3</option>
                                            <option value="<?php $result['ans4']; ?>">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                           <hr>                            
                        </div>
                    </div>
                    <?php 
                }
                
                ?>
            <input type="submit" name="show_result" class="btn btn-success btn-user btn-block col-4" value="Show Result">
            </form>
            <br><br><br>
        </div>
    </section><!-- End play quiz Section -->
</main><!-- End #main -->

<?php
if (isset($_POST['show_result'])) {
    $que_select = "SELECT * from questions where quiz_id=$qid";
    $run = mysqli_query($con, $que_select);

    while ($result = mysqli_fetch_array($run)) {

        $uans = $_POST['uanswer'];
        $ans = $result['answer'];

        $que = "INSERT INTO `temporary_table` (`ans`, `user_ans`) VALUES ('$ans', '$uans');";
        $run2 = mysqli_query($con, $que);
    }
    echo "<script> window.location.href='./score.php'; </script>";
}
include "./footer.inc.php";
?>
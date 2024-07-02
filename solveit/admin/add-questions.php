<?php
include './head.inc.php';
session_start();
if (!isset($_SESSION['IS_LOGIN'])) {
    header("location: ./login.php");
}
$total_ques=0;
if (isset($_POST['create_quiz'])) {
    $name = $_POST['name'];
    
    $category = $_POST['category'];
    $time = $_POST['time'];
    $desc=$_POST['description'];

    $que = "INSERT INTO `quiz_details` (`name`,  `category`, `description`, `time`) VALUES ('$name', '$category', '$desc', '$time')";
    $run = mysqli_query($con, $que);
    

    $query= "SELECT * FROM quiz_details ORDER BY id DESC LIMIT 1";
    $run2 = mysqli_query($con, $query);
    $res = mysqli_fetch_array($run2);
    $_SESSION['id'] = $res['id'];
    

    

    if(!$run){
        echo "<script>alert('something went wrong');</script>";
        header("location:./add-quiz.php");
    }else{
        echo "<script>alert('here you can add questions');</script>";
        
    }
}

?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php
        include './sidebar.inc.php';
        ?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <h2 class="m-4 ">Add Questions</h2>
                <hr>
                <div class="container mt-4">

                    <form class="user" method="POST">
                        <div class="questions" id="ques">
                            <hr>

                            
                                <h4>Question</h4>
                                <div class="form-group">
                                    <label for="" class="form-label">Question:</label>

                                    <input type="text" name="question" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Question" required>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="" class="form-label">Option 1:</label>

                                        <input type="text" name="option1" class="form-control form-control-user" id="exampleInputPassword" placeholder="Option 1" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="" class="form-label">Option 2:</label>

                                        <input type="text" name="option2" class="form-control form-control-user" id="exampleInputPassword" placeholder="Option 2" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="" class="form-label">Option 3:</label>

                                        <input type="text" name="option3" class="form-control form-control-user" id="exampleInputPassword" placeholder="Option 3" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="" class="form-label">Option 4:</label>

                                        <input type="text" name="option4" class="form-control form-control-user" id="exampleInputPassword" placeholder="Option 4" required>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="" class="form-label">Answer:</label>
                                        <select name="answer" id="" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                        </div>



                        <input type="submit" name="add_question" class="btn btn-primary btn-user btn-block" value="Add Questions">
                        <br>
                        
                        
                        <hr>
                    </form>
                    <a href="./view-quiz.php" class="card-link" style="font-size:large;"><button class="btn btn-danger col-4"> Exit </button></a>
                </div>


                <?php
                include './topbar.inc.php';
                
                if (isset($_POST['add_question'])) {

                        $question = $_POST['question'];
                        $option1 = $_POST['option1'];
                        $option2 = $_POST['option2'];
                        $option3= $_POST['option3'];
                        $option4 = $_POST['option4'];
                        $answer = $_POST['answer'];

                        $qid=$_SESSION['id'];

                        $que = "INSERT INTO `questions` (`question`, `quiz_id`, `option1`, `option2`, `option3`, `option4`, `answer`, `ans1`,  `ans2`, `ans3`, `ans4`) VALUES ('$question', '$qid', '$option1', '$option2', '$option3', '$option4', '$answer', '1', '2', '3', '4')";
                        $run = mysqli_query($con, $que);
                    
                }
                        
                ?>
            </div>
        </div>
    </div>


    <?php
    include './footer.inc.php';
    ?>
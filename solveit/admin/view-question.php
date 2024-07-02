<?php
include "./head.inc.php";
session_start();
if (!isset($_SESSION['IS_LOGIN'])) {
    header("location: ./login.php");
}
// selectdata
$que = "SELECT * from questions";
$run = mysqli_query($con, $que);

if(isset($_GET['action'])){
    $action = $_GET['action'];
    $id = $_GET['id'];
    if($action == 'delete'){
        mysqli_query($con, "DELETE from questions where ques_id = $id");
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
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800 mt-4">Currently live Quiz</h1>
                
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Quiz Details</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Quiz_id</th>
                                        <th>Question</th>
                                        <th>Option1</th>
                                        <th>Option2</th>
                                        <th>Option3</th>
                                        <th>Option4</th>
                                        <th>Answer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Quiz_id</th>
                                        <th>Question</th>
                                        <th>Option1</th>
                                        <th>Option2</th>
                                        <th>Option3</th>
                                        <th>Option4</th>
                                        <th>Answer</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if( mysqli_num_rows($run) == 0){
                                        ?>


                                    <td colspan="6">No Data Found</td>
                                        <?php

                                    } else{
                                        while($row = mysqli_fetch_assoc($run)){

                                            ?>
                                            <tr>
                                                <td><?= $row['quiz_id']?></td>
                                                <td><?= $row['question']?></td>
                                                <td><?= $row ['option1'] ?></td>
                                                <td><?= $row ['option2'] ?></td>
                                                <td><?= $row ['option3'] ?></td>
                                                <td><?= $row ['option4'] ?></td>
                                                <td><?= $row ['answer'] ?></td>
                                                <td><a href="?id=<?= $row['ques_id']?>&action=delete" class="btn btn-primary"><i class='bx bxs-trash bx-tada' ></i> Delete</a></td>
                                            </tr>

<?php
                                    }
                                }
                                    ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
          

        </div>
    </div>
    </div>



    <?php
    include './footer.inc.php';
    ?>
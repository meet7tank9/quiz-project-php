<?php
include './head.inc.php';
session_start();
if (!isset($_SESSION['IS_LOGIN'])) {
    header("location: ./login.php");
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
                <h2 class="m-4 ">Add New Admin</h2>
                <hr>
                <div class="container mt-4">
                    <form class="user"  method="POST">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="" class="form-label">Admin Name : </label>
                                <input type="text" name="name" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter admin name" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="" class="form-label">Admin Email : </label>

                                <input type="email" name="email" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="" class="form-label">Admin Password : </label>

                                <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Create Password" required>
                            </div>
                        </div>
                        
                       

                        <input type="submit" name="add_admin" class="btn btn-success btn-user btn-block" value="Add Admin">

                        <hr>
                    </form>
                </div>


                <?php
                include './topbar.inc.php';
             

                ?>


            </div>
        </div>
    </div>


    <?php
    include './footer.inc.php';
    if (isset($_POST['add_admin'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password= $_POST['password'];
    
        $que = "INSERT INTO `admin` (`name`,  `email`, `password`) VALUES ('$name', '$email', '$password')";
        $run = mysqli_query($con, $que);

        if(!$run){
            echo "<script>alert('something went wrong');</script>";
            header("location:./add_admin.php");
        }else{
            echo "<script>alert('New Admin Created Successfully');</script>";
            
        }
    }
    ?>
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>
        Dashboard | Gauhati University | Department Of Computer Science
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" href="../../../pic/icon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/697cf64bbe.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../../css/style.css">

    <style>
        .intor-heading {

            width: fit-content;
        }

        .padding {
            justify-content: center;
        }

        .profile {
            color: #fff;
        }

        .intor-heading {
            margin-top: 1em;
            padding: 0.3em 0.7em;
            float: right;
            cursor: pointer;
        }

        .fas {
            margin-right: 5px;
        }
    </style>
</head>

<body style="font-family:serif;">


    <div class="container-fluid">

        <nav class="header-nav">
            <div class="logo">
                <img src="../../../pic/logo.png" alt="Logo">
            </div>

            <div class="login-link ">
                <div class="profile">PROFILE

                    <div class="profile-drop">
                        <a href="../../../script/logout.php">
                            <ul>
                                <li>Logout</li>
                            </ul>
                        </a>
                    </div>
                </div>
            </div>

        </nav>

        <div class="container-fluid row">
            <div class="col-lg-3 col-md-3">
                <nav class="side-nav">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link" id="v-pills-dashboard-tab" href="../../Dashboard/index.php">
                            Dashboard
                        </a>
                        <a class="nav-link active" id="v-pills-faculty-tab" href="../../Faculty/index.php">
                            Faculty

                        </a>
                        <a class="nav-link " id="v-pills-student-tab" href="../../Student/index.php">
                            Student

                        </a>
                        <a class="nav-link" id="v-pills-courses-tab" href="../../Courses/index.php">
                            Subjects

                        </a>
                        <a class="nav-link" id="v-pills-exam-tab" href="../../Exam/index.php">
                            Exam Schedule

                        </a>
                        <a class="nav-link" id="v-pills-profile-tab" href="../../Profile/index.php">
                            Sub Admin

                        </a>
                        <a class="nav-link" id="v-pills-password-tab" href="../../Reset/index.php">
                            Reset Password

                        </a>
                        <a class="nav-link" id="v-pills-logout-tab" href="../../../script/logout.php">
                            Logout

                        </a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 col-md-9">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php">Faculty</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Faculty</li>
                    </ol>
                </nav>

                <div class="login-cont">
                    <form method="post">
                        <div class="login-label-mt">Faculty Id</div>
                        <input type="text" name="id" id="name">

                        <div class="login-label-mt">Name</div>
                        <input type="text" name="name" id="name">

                        <div class="login-label-mt">Email</div>
                        <input type="email" name="email" id="email">

                        <div class="login-label-mt">Designation</div>
                        <select name="desig" id="">
                            <option value="">Select Designation</option>
                            <option value="Professor">Professor</option>
                            <option value="Associate Professor">Associate Professor</option>
                            <option value="Associate Faculty">Associate Faculty</option>
                            <option value="Associate Professor">Assistant Professor</option>
                        </select>

                        <div class="login-label-mt">Qualification</div>
                        <input type="text" name="qual" id="qual">

                        <div class="login-label-mt">Password</div>
                        <input type="password" name="password" id="password">

                        <div class="login-label-mt">
                            <button class="btn btn-success" value="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

</body>

</html>



<?php

include "../../../script/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' and ($_SESSION['login'] === 'admin' or $_SESSION['login'] === 'fadmin')) {

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $desig = mysqli_real_escape_string($conn, $_POST['desig']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $qual = mysqli_real_escape_string($conn, $_POST['qual']);
    $password = md5($_POST['password']);

    if ($id == "" or $name == "" or $email == "" or $qual == "" or $password == "" or $desig == "") {
        echo "<script>swal(\"Error!\", \"Empty Field Found!\", \"error\")</script>";
    } else {

        $sql = "INSERT INTO faculty(id,f_name,designation,qualification,email,pass) VALUES ($id,'$name','$desig','$qual','$email','$password')";

        $query = mysqli_query($conn, $sql);

        if ($query == true) {
            echo "<script>swal(\"Success!\", \"Faculty Inserted Succesfully!\", \"success\")</script>";
        } else {
            echo "<script>swal(\"Failed!\", \"Faculty Insertion Failed!\", \"error\")</script>";
        }
    }
}
?>
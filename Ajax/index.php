<?php
include "../../script/config.php";

session_start();

$sql = "SELECT * FROM faculty";

$query = mysqli_query($conn, $sql) or die("Query Failed!");


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
    <link rel="icon" href="../../pic/icon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/697cf64bbe.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../css/style.css">

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
                <img src="../../pic/logo.png" alt="Logo">
            </div>

            <div class="login-link ">
                <div class="profile">PROFILE

                    <div class="profile-drop">
                        <a href="../../script/logout.php">
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
                        <a class="nav-link" id="v-pills-dashboard-tab" href="../Dashboard/index.php">
                            Dashboard
                        </a>
                        <a class="nav-link active" id="v-pills-faculty-tab" href="../Faculty/index.php">
                            Faculty

                        </a>
                        <a class="nav-link " id="v-pills-student-tab" href="../Student/index.php">
                            Student

                        </a>
                        <a class="nav-link" id="v-pills-courses-tab" href="../Courses/index.php">
                            Subjects

                        </a>
                        <a class="nav-link" id="v-pills-exam-tab" href="../Exam/index.php">
                            Exam Schedule

                        </a>
                        <a class="nav-link" id="v-pills-profile-tab" href="../Profile/index.php">
                            Sub Admin

                        </a>
                        <a class="nav-link" id="v-pills-password-tab" href="../Reset/index.php">
                            Reset Password

                        </a>
                        <a class="nav-link" id="v-pills-logout-tab" href="../../script/logout.php">
                            Logout

                        </a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 col-md-9">
                <a href="./Add/index.php">
                    <div class="intor-heading">
                        <i class="fas fa-user-plus"></i>
                        ADD FACULTY
                    </div>
                </a>


                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Faculty ID</th>
                            <th>Faculty Name</th>
                            <th>Email</th>
                            <th>Designation</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row_users = mysqli_fetch_assoc($query)) {
                            echo "<tr id=".$row_users['id'].">
                            <td>" . ($row_users['id']) . "</td>
                            <td data-target='name'>" . ($row_users['f_name']) . "</td>
                            <td data-target='email'>" . ($row_users['email']) . "</td>
                            <td data-target='designation'>" . ($row_users['designation']) . "</td>
                            <td>

                                <a href='#' data-role='update' data-id=".$row_users['id'].">
                                    <i class='fas fa-edit' title='Edit'></i>
                                </a>

                                <a href='./Delete/delete.php?id=$row_users[id]'>
                                    <i class='fas fa-trash-alt' title='Delete'></i>
                                </a>
                            </td>
                        </tr>";
                        }
                        ?>
                    </tbody>
                </table>
                
            </div>


        </div>

    </div>

    



    <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Header</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                        <label>Faculty Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                        </div>

                        <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="desig" id="desig" class="form-control">
                        </div>
                        <input type="hidden" name="id" id="id" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
                    </div>
                    </div>

                </div>
                </div>



    <script>
    $(document).ready(function () {
        $(document).on('click','a[data-role=update]',function () {
            var id = $(this).data('id');
            var name = $('#'+id).children('td[data-target=name]').text();
            var email = $('#'+id).children('td[data-target=email]').text();
            var designation = $('#'+id).children('td[data-target=designation]').text();

            $('#id').val(id);
            $('#name').val(name);
            $('#email').val(email);
            $('#desig').val(designation);
            $('#myModal').modal('toggle');

          });
          $('#save').click(function () {
              var id=$('#id').val();
              var name = $('#name').val();
              var email = $('#email').val();
              var designation = $('#desig').val();

              $.ajax({
                  url: 'update.php',
                  method:'post',
                  data:{id:id , name:name , email:email , designation:designation },
                  success: function (params) {
                      $('#'+id).children('td[data-target=name]').text(name);
                      $('#'+id).children('td[data-target=email]').text(email);
                      $('#'+id).children('td[data-target=designation]').text(designation);
                      $('#myModal').modal('toggle');
                      updated();
                  }
              })
          });
    });

    function updated() {
        swal("Success!", "Faculty Details Updated!", "success");
    }
    </script>

</body>

</html>
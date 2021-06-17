

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>

  <style>

    #c1{
      margin-top : 40px;
      margin-left : 320px;
    }
     ul a:hover{
      background-color: black;
      color: white;
      padding: auto;
      height: 38px;
    }
    #b1{
      margin-top : 3px;
      margin-left: 8px;
    }
    .iconify{
      margin-right: 4px;
      margin-left : 4px;
    }
   



  </style>





</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Computer Science Dept</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><span class="iconify" data-icon="fe:arrow-left" data-inline="false"></span>Back
        </a>
      </li>
      </li>

      

      
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="view_students.php"><span class="iconify" data-icon="fe:eye" data-inline="false"></span>View Students
        </a>
      </li>
       </li>
       <li class="nav-item active">
        <a class="nav-link" href="manage_students.php"><span class="iconify" data-icon="ic:baseline-manage-accounts" data-inline="false"></span>Manage Students
        </a>
      </li>

     
    </ul>
  </div>
</nav>
  
 <div class="container">
   <div class="row">
     <div id = "c1" class="col-4">
       <form method="post">

                               <div class="form-group">
                               <label for="n1">Enter Student Name</label>
                                <input type="text" class="form-control" id="n1" name="n1"aria-describedby="emailHelp" >
                                </div>


                                <div class="form-group">
                               <label for="n2">Enter Student Mail</label>
                                <input type="email" class="form-control" id="n2" name="n2"aria-describedby="emailHelp" >
                                </div>


                                <div class="form-group">
                               <label for="exampleInputEmail1">Enter Student Phone Number</label>
                                <input type="text" class="form-control" id="n3" name="n3"aria-describedby="emailHelp" >
                                </div>




                                <div class="form-group">
                              <label for="n8">Enter Student Gender</label>
                            <select class="form-control"  name="n8" id="n8">
                               <option value="Male">Male</option>
                                <option value="Female">Female</option>
                               
                             </select>
                               </div>



                                <div class="form-group">
                               <label for="n4">Enter Student Qualification</label>
                                <input type="text" class="form-control" id="n4" name="n4"aria-describedby="emailHelp" >
                                </div>

                               <div class="form-group">
                              <label for="n5">Enter Student Semester</label>
                            <select class="form-control"  name="n5" id="n5">
                               <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                             </select>
                               </div>

                               <div class="form-group">
                              <label for="n7">Student Course</label>
                            <select class="form-control"  name="n7" id="n7">
                               <option value=1>Masters in Computer Science</option>
                                <option value=2>Masters in Information Technology</option>
                             </select>
                               </div>


                                <div class="form-group">
                               <label for="n6">Enter Student Password</label>
                                <input type="password" class="form-control" id="n6" name="n6" aria-describedby="emailHelp" >
                                </div>





                              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                               
                                 

                                </form>



                        </div>
     </div>
   </div>
 </div>





<?php



if(isset($_POST["submit"]))

{

include '../config/conn.php';

extract ($_POST);




if($cid = 1)
{
  $sql = "select code from subject where sem='$n5' and s_type='Core' and code like 'CSC%'";
}
else
{
  $sql = "select code from subject where sem='$n5' and s_type='Core' and code like 'INF%'";
}


$query = $conn->query($sql);

if ($row = mysqli_fetch_array($query))
{
  $sub1 = $row['code'];
}
else
{
  $sub1 = NULL;
}



if ($row = mysqli_fetch_array($query))
{
  $sub2 = $row['code'];
}
else
{
  $sub2 = NULL;
}




if ($row = mysqli_fetch_array($query))
{
  $sub3 = $row['code'];
}
else
{
  $sub3 = NULL;
}




if ($row = mysqli_fetch_array($query))
{
  $sub4 = $row['code'];
}
else
{
  $sub4 = NULL;
}



if ($row = mysqli_fetch_array($query))
{
  $sub5 = $row['code'];
}
else
{
  $sub5 = NULL;
}








$sql = "INSERT INTO students(sname,smail,smobile,spass,squalification,Current_semester,cid,gender,sub1,sub2,sub3,sub4,sub5)
VALUES ('$n1','$n2','$n3','$n6','$n4','$n5','$n7','$n8','$sub1','$sub2','$sub3','$sub4','$sub5')";

if ($conn->query($sql) === TRUE) {
  
     echo "<script>swal(\"Success\", \"Student Inserted Successfully\", \"success\")</script>";
  }
  else {
   
    echo "<script>swal(\"Error\", \"Student Not Inserted\", \"error\")</script>";
  
  
}



























$conn->close();

}


?>





</body>
</html>

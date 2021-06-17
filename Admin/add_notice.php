

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
      margin-top : 60px;
      margin-left : 320px;
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
       <li class="nav-item active">
        <a class="nav-link" href="manage_notices.php"><span class="iconify" data-icon="mdi:clipboard-edit" data-inline="false"></span>Manage Notices
        </a>
      </li>

    <li class="nav-item active">
        <a class="nav-link" href="add_event.php"><span class="iconify" data-icon="mdi:clipboard-edit" data-inline="false"></span>Add Event
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
                               <label for="t1">Notice Title</label>
                                <input type="text" class="form-control" id="t1" name="t1" >
                                </div>




                                <div class="form-group">
                               <label for="t2">Notice Date</label>
                                <input type="date" class="form-control" id="t2" name="t2">
                                </div>

                                <div class="form-group">
                               <label for="t3">Image</label>
                                <input type="file" class="form-control" id="t3" name="t3" >
                                </div>


                                <div class="form-group">
                               <label for="t4">Description</label>
                               <br><br>
                                <textarea class="form-control" id="t4" name="t4" > Write Your Description Here </textarea>
                                </div>


                                <div class="form-group">
                               <label for="t5">URL</label>
                                <input type="text" class="form-control" id="t5" name="t5">
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



$sql = "INSERT INTO Notices(ntitle,ndate,nimage,ndesc,nurl)
VALUES ('$t1','$t2','$t3','$t4','$t5')";

if ($conn->query($sql) === TRUE) {
  
     echo "<script>swal(\"Success\", \"Notice Added Successfully\", \"success\")</script>";
  }
  else {
   
    echo "<script>swal(\"Error\", \"Addition Failed\", \"error\")</script>";
  
  
}

$conn->close();

}


?>






</body>
</html>

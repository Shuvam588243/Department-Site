

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>

  <style>

    #c1{
      margin-top : 50px;
      margin-left : 320px;
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
        <a class="nav-link" href="index.php">Back
        </a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="exam_scheudule_search.php">Exam Schedule
        </a>
      </li>

    

     
    </ul>
  </div>
</nav>
  
 <div class="container">
   <div class="row">
     <div id = "c1" class="col-4">
       <form>

                               <div class="form-group">
                               <label for="exampleInputEmail1">Enter Course ID</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>


                                <div class="form-group">
                               <label for="exampleInputEmail1">Course Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
                                </div>




                                <div class="form-group">
                              <label for="t4">Select Semester</label>
                              <select class="form-control"  name="t4" id="t4">
                              <option value=1>Semester 1</option>
                              <option value=2>Semester 2</option>
                              <option value=3>Semester 3</option>
                              <option value=4>Semester 4</option>
                              <option value=5>Semester 5</option>
                              <option value=6>Semester 6</option>
                               </select>
                              </div>


                              <div class="form-group">
                              <label for="t4">Semester Subject</label>
                              <select class="form-control"  name="t4" id="t4">
                              <option value=1>.....</option>
                              <option value=2>.....</option>
                               </select>
                              </div>


                              <div class="form-group">
                              <label for="t4">Exam Type</label>
                              <select class="form-control"  name="t4" id="t4">
                              <option value=1>Sessional</option>
                              <option value=2>Final</option>
                              <option value=2>Practical</option>
                               </select>
                              </div>




                               


                                <div class="form-group">
                               <label for="exampleInputEmail1">Exam Date</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>





                              <button type="submit" onclick="Show()" name="submit" class="btn btn-primary">Add Exam</button>
                                 

                                </form>



                        </div>
     </div>
   </div>
 </div>



<script>
  function Show()
  {
    swal("Good job!", "You clicked the button!", "error");
  }
</script>


</body>
</html>



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
      margin-top : 90px;
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
      
    

     
    </ul>
  </div>
</nav>
  
 <div class="container">
   <div class="row">
     <div id = "c1" class="col-4">
       <form method="post" action="show_courses.php">

                               <label for="t1">Select Course Name</label>
                              <select class="form-control"  name="t1" id="t1">
                                <option value=1>MSc CS</option>
                                <option value=2>MSc IT</option>
                              </select>



                               <label for="t2">Enter Semester</label>
                              <select class="form-control"  name="t2" id="t2">
                                <option value=1>1</option>
                                <option value=2>2</option>
                                 <option value=3>3</option>
                                <option value=4>4</option>
                                 <option value=5>5</option>
                                <option value=6>6</option>
                              </select>



                               
                                <br>




                              <button type="submit"  name="submit" class="btn btn-primary">Search</button>
                                 

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



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
        <a class="nav-link" href="index.php"><span class="iconify" data-icon="mdi:clipboard-edit" data-inline="false"></span>Manage Events
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
                               <label for="exampleInputEmail1">Event Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>




                                <div class="form-group">
                               <label for="exampleInputEmail1">Event Date</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>

                                <div class="form-group">
                               <label for="exampleInputEmail1">Event Banner</label>
                                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>


                                <div class="form-group">
                               <label for="Describre">Description of the Event</label>
                               <br><br>
                                <textarea id="Describre" class="form-control"> Write Your Description Here </textarea>
                                </div>


                                <div class="form-group">
                               <label for="exampleInputEmail1">URL</label>
                                <input type="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                </div>
                                  

                              

                                





                               <a class="btn btn-primary btn-sm" role="button" target="top" onclick="notice_add()">ADD Event</a>
                               
                                 

                                </form>



                        </div>
     </div>
   </div>
 </div>

<script>
  function notice_add()
  {
    swal("Success", "Event Added Successfully", "success");
  }
</script>




</body>
</html>

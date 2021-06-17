<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
	<title></title>
  <style>
   
    #b1{
      margin-top: 3px;
      margin-left: 12px;
      margin-right:3px;

    }
    #myModal{
      margin-top: 160px;
    }
    ul li a:hover{
      background-color: black;
      color: white;
    }
    .iconify{
      margin-right: 4px;
      margin-left : 4px;
      margin-top : 6px;
    }
    a{
      margin-top : 2px;
    }
  
  </style>
	
</head>
	<img src="images/GU.png" alt="">


	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Computer Science Dept</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" target="_top"><span class="iconify" data-icon="ant-design:home-filled" data-inline="false" , style="margin-top: 1px"></span>Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item active">
        <!-- Button to Open the Modal -->
<button id="b1" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Search
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content" id="cv">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 id="ha",class="modal-title">COMPUTER SCIENCE DEPARTMENT ALUMNI</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post">
  <fieldset>

    <div class="form-group">
      <label for="exampleSelect1">Course Name</label>
      <select class="form-control"  name="t3" id="exampleSelect1">
        <option value="Petrol">Master's in Computer Science</option>
        <option value="Diesel">Masters in Information Technology</option>
      </select>
    </div>
   
    <div class="form-group">
      <label for="exampleInputEmail1">Search by Year</label>
      <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="t2">
    </div>
    </fieldset>
    <center>
    <a href="alumni_show.php"><button type="submit" name="submit" class="btn btn-primary">Search</button></a>
  
</center>
  </fieldset>
</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       
      </div>

    </div>
  </div>
</div>
      </li>
      <li class="nav-item active">
        <!-- Button to Open the Modal -->
<button id="b1" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
  Archives
</button>

<!-- The Modal -->
<div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 id="ha",class="modal-title">COMPUTER SCIENCE DEPARTMENT ALUMNI ARCHIVES</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        

                     <div >
                     <div class="card-header" align="center"><b><font size="4">PG Diploma in Computer Science and Application</font></b></div>
                     <div class="card-body">
                    <center><a href="https://drive.google.com/file/d/1_F-C8BEPs-nVR_Zsw3xBhGnZH8-LZ-yY/view?usp=sharing"><button type="button" class="btn btn-primary">View ListDetails</button></a>


                    <a href="https://drive.google.com/file/d/1_F-C8BEPs-nVR_Zsw3xBhGnZH8-LZ-yY/view?usp=sharing"><button type="button" class="btn btn-primary">View ListDetails</button></a>












                  </center>
                     
                   

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       
      </div>

    </div>
  </div>
</div>
      </li>
    </ul>
  </div>
</nav>
	
<br><br>



<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>



</body>
</html>
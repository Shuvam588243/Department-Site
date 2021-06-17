<?php session_start(); ?>
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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title></title>

  <style>
     #flo{
      margin-left: 950px;
    }
    ul li a:hover{
      background-color: black;
      color: white;
    }
    #flo{
      margin-left: 890px;
    }
    #b1{
      margin-left: 850px;
    }
    #myModal{
      margin-top : 80px;
      margin-left: 400px;
      width : 500px;
      height: 800px;
    }
    #ha{
      margin-left: 130px;
    }
    .iconify{
      margin-right: 4px;
      margin-left : 4px;
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
        <a class="nav-link" href="index.php" target="_top"><span class="iconify" data-icon="ant-design:home-filled" data-inline="false"></span>Home
        </a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="./Faculties/faculty_login.php" target="_top" id="flo"> <span class="iconify" data-icon="mdi:login" data-inline="false"></span>Faculty Login
        </a>
      </li>
      
    </ul>
  </div>
</nav>
	
<br><br>


	
<div class="container">
  <div class="row">
  


    
    <div class="col-3">

      <div class="card mb-3">
            <h4 align="center"class="card-header">Professor</h4>
                 <div class="card-body">
                  <center> <img  style="height: 150px; width: 80%; display: block;" src="Faculties/Anjana Kakoti Mahanta.png" alt="Card image"></center>
                  <br>
                    <h4 align="center" class="card-title">Anjana Kakoti Mahanta</h4>
                    <h6 align="center" class="card-subtitle text-muted">
                      <p>
                      MSc (Gauhati) PhD (Gauhati)<br>
                      Algorithms, Data mining<br>
                      Email : anjana@gauhati.ac.in<br>
                      </p>


                    </h6>
                 </div>
 
       </div>

    </div>

    <div class="col-3">

      <div class="card mb-3">
            <h4 align="center"class="card-header">Associate Professor(HOD)</h4>
                 <div class="card-body">
                  <center> <img  style="height: 150px; width: 80%; display: block;" src="Faculties/Abhijit Sarma.png" alt="Card image"></center>
                  <br>
                    <h4 align="center" class="card-title">Abhijit Sarma </h4>
                    <h6 align="center" class="card-subtitle text-muted">
                      <p>
                      MCA (Dibrugarh) PhD (IITG)<br>
                      Computer Networks<br>
                       Email : abhijit_gu@yahoo.com<br>
                      </p>
                    </h6>
                 </div>
 
       </div>

    </div>


    <div class="col-3">

      <div class="card mb-3">
            <h4 align="center"class="card-header">Assistant Professor</h4>
                 <div class="card-body">
                  <center> <img  style="height: 150px; width: 80%; display: block;" src="Faculties/Sanjib Kumar Kalita.png" alt="Card image"></center>
                  <br>
                    <h4 align="center" class="card-title">Sanjib Kumar Kalita</h4>
                    <h6 align="center" class="card-subtitle text-muted">
                      <p>
                      MCA (Gauhati) PhD (Gauhati)<br>
                      Speech Processing<br>
                      Email : sanjib959@gauhati.ac.in
                      </p>


                    </h6>
                 </div>
 
       </div>

    </div>

      




</div>




<div class="row">

    


  
     <div class="col-3">

      <div class="card mb-3">
            <h4 align="center"class="card-header">Assistant Professor</h4>
                 <div class="card-body">
                  <center> <img  style="height: 150px; width: 80%; display: block;" src="Faculties/Irani Hazarika.png" alt="Card image"></center>
                  <br>
                    <h4 align="center" class="card-title">Irani Hazarika</h4>
                    <h6 align="center" class="card-subtitle text-muted">
                      <p>
                      MSc (Gauhati)<br>
                      Data Mining<br>
                      Email : iranihazarika@gauhati.ac.in
                      </p>


                    </h6>
                 </div>
 
       </div>
     </div>





        <div class="col-3">

       <div class="card mb-3">
            <h4 align="center"class="card-header">Associated Faculty</h4>
                 <div class="card-body">
                  <center> <img  style="height: 150px; width: 80%; display: block;" src="Faculties/Dhruba Jyoti Borah.png" alt="Card image"></center>
                  <br>
                    <h4 align="center" class="card-title">Dhruba Jyoti Borah</h4>
                    <h6 align="center" class="card-subtitle text-muted">
                      <p>
                      MCA (Dibrugarh)<br>
                      Network Security<br>
                      dhrubajyotiborah209@gauhati.ac.in<br>
                      </p>


                    </h6>
                 </div>
 
       </div>
     </div>


      <div class="col-3">

      <div class="card mb-3">
            <h4 align="center"class="card-header">Associated Faculty</h4>
                 <div class="card-body">
                  <center> <img  style="height: 150px; width: 80%; display: block;" src="Faculties/Nibir Borpuzari.png" alt="Card image"></center>
                  <br>
                    <h4 align="center" class="card-title">Nibir Borpuzari</h4>
                    <h6 align="center" class="card-subtitle text-muted">
                      <p>
                      MSc (Gauhati)<br>
                      Computer Science<br>
                      nibir@gauhati.ac.in
                      </p>


                    </h6>
                 </div>
 
       </div>
    




</div>


</div>

    

       

     
   






</div>








</body>
</html>
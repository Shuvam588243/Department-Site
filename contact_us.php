
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
	<title></title>
	<style>
  

    .flip-card {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #158cba;
  color: white;
}

/* Style the back side */
.flip-card-back {
  background-color: #253B80;
  color: white;
  transform: rotateY(180deg);
}

























  </style>    
</head>
<body>
	<img src="../images/GU.png" alt="">


	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Computer Science Dept</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" target="_top">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
	
<br><br>


	<div class="container" style="margin-top: 90px">
   

        <div class="row">

          <div class="col-4">
           <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <span class="iconify" data-icon="carbon:phone-filled" data-inline="false" style="margin-top: 30px;font-size: 30px"></span>
      <h3 style="margin-top: 40px;color:white">Contact Us</h3>
    </div>
    <div class="flip-card-back">
     
    </div>
  </div>
</div>
          </div>  



          <div class="col-4">
           <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <span class="iconify" data-icon="fluent:location-12-filled" data-inline="false" style="margin-top: 30px;font-size: 30px"></span>
      <h3 style="margin-top: 40px;color:white">Address</h3>
    </div>
    <div class="flip-card-back">
      
    </div>
  </div>
</div>
          </div>  



          <div class="col-4">
           <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <span class="iconify" data-icon="ic:sharp-email" data-inline="false" style="margin-top: 30px;font-size: 30px"></span>
      <h3 style="margin-top: 40px;color:white">Email</h3>
    </div>
    <div class="flip-card-back">
      
    </div>
  </div>
</div>
          </div>  
</div>
</div>










</body>
</html>


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
      margin-left : 60px;
      height : 270px;
    }
    #c2{
      margin-top : 40px;
      margin-left : 60px;
      height : 270px;
    }
    #b1{
      margin-top: 3px;
      margin-left: 13px;
    }
     #b2{
      margin-top: 3px;
      margin-left: 24px;
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
        <a class="nav-link" href="student_index.php"><span class="iconify" data-icon="eva:arrow-ios-back-fill" data-inline="false"></span>Back
        </a>
      </li>
     <li class="nav-item active">
        <!-- Button to Open the Modal -->
<button id="b1" onlick="exam_form()" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  <span class="iconify" data-icon="clarity:form-line" data-inline="false"></span>Exam Form
</button>

<script>
   function exam_form()
   {
    swal("Good job!", "You clicked the button!", "success");
   }
 </script>


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 id="ha",class="modal-title">EXAM FORM</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         
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
<button id="b2" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  <span class="iconify" data-icon="bi:card-text" data-inline="false"></span>Admit Card
</button>


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 id="ha",class="modal-title">ADMIT CARD</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <h3> Admit Card not out yet </h3>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
      </li>

    

     
    </ul>
  </div>
</nav>
  




</body>
</html>

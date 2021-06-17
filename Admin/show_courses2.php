
<?php

session_start();

include '../config/conn.php';

$id = $_GET['id'];

$query = "SELECT * FROM subject where cid='$id'";
$data = mysqli_query($conn, $query);
$total= mysqli_num_rows($data);

if($total !=0)
{
  ?>
  <html>
  <head>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  
  </head>
  <center>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin-top: 0px !important;">
  <a class="navbar-brand" href="#">Computer Science Dept</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><span class="iconify" data-icon="ic:baseline-arrow-back-ios-new" data-inline="false"></span>Back
        </a>
      </li>
      </li>

     
    </ul>
  </div>
</nav>
  
  
<br> 
<br> 
<br> 
<div class="container" style="margin-left: 86px">
<div class="col-12"> 
 <table border=1  class="table table-hover">
 <tr class="table-primary">
 <th>Cid</th>
 <th>Subject Code</th>
 <th>Subject Name</th>
  <th>Subject Type</th>
 <th>Semester</th>
 <th>Faculty</th>



 
 
 
 </tr>


  
  
  
  
  
  <?php
  
  while($result = mysqli_fetch_assoc($data))
  {
    echo "<tr id=".$result['cid'].">
 <td align='center'>".$result['cid']."</td>
 <td align='center' data-target='code'>".$result['code']."</td>
 <td align='center' data-target='s_name'>".$result['s_name']."</td>
 <td align='center' data-target='ctotsem'>".$result['s_type']."</td>
 <td align='center' data-target='sem'>".$result['sem']."</td>
 <td align='center' data-target='fid'>".$result['fid']."</td>
 
 






 
 
 
 </tr>";
 }
}
else
{
  echo "no record found";
}

  
?>
</table> 
 </div> 
 </div>


<div class="modal" id="myModal" style="max-width: 400px; margin-left : 440px">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 id="ha",class="modal-title bg-primary text-white">Course Update</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
  <fieldset>

   
      


     <div class="form-group">
        <label for="t1">Subject Code </label>
        <input type="email" class="form-control" id="t1" name="t1">

        <label for="t2">Subject Name</label>
        <input type="email" class="form-control" id="t2" name="t2">


        <label for="t2">Subject Type</label>
        <input type="email" class="form-control" id="t2" name="t2">

     

     

         <label for="t4">Semester </label>
        <input type="text" class="form-control" id="t4" name="t4">

         <label for="t5">Alloted Faculty </label>
        <input type="text" class="form-control" id="t5" name="t5">

        <label for="t6">Exam Date </label>
        <input type="date" class="form-control" id="t6" name="t6">



         <input type="hidden" class="form-control" id="id" name="id">


        </div>


    

    </fieldset>
    <center>
    <a href="#" id="save" class="btn btn-primary pull-right">Schedule</a>


  
</center>
  </fieldset>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       
      </div>

    </div>
  </div>
</div>
<script>
    $(document).ready(function () {
        $(document).on('click','a[data-role=update]',function () {
            var id = $(this).data('id');
            var cname = $('#'+id).children('td[data-target=cname]').text();
            var cshort = $('#'+id).children('td[data-target=cshort]').text();
            var ctotsem = $('#'+id).children('td[data-target=ctotsem]').text();
            var ctotcapacity = $('#'+id).children('td[data-target=ctotcapacity]').text();
            var ctotfees = $('#'+id).children('td[data-target=ctotfees]').text();
            var csemfees = $('#'+id).children('td[data-target=csemfees]').text();

            $('#id').val(id);
            $('#t1').val(cname);
            $('#t2').val(cshort);
             $('#t3').val(ctotsem);
            $('#t4').val(ctotcapacity);
             $('#t5').val(ctotfees);
            $('#t6').val(csemfees);
            $('#myModal').modal('toggle');

          });
          $('#save').click(function () {
              var id=$('#id').val();
              var cname = $('#t1').val();
              var cshort = $('#t2').val();
              var ctotsem = $('#t3').val();
              var ctotcapacity = $('#t4').val();
              var ctotfees = $('#t5').val();
              var csemfees = $('#t6').val();

              $.ajax({
                  url: 'course_update.php',
                  method:'post',
                  data:{id:id ,  cname:cname , cshort:cshort , ctotsem:ctotsem , ctotcapacity:ctotcapacity , ctotfees:ctotfees , csemfees:csemfees },
                  success: function (params) {
                    $('#'+id).children('td[data-target=fmail]').text(email);
                    $('#'+id).children('td[data-target=designation]').text(designation);
                    $('#myModal').modal('toggle');
                    updated();
                  }
              });
          });
    });

    function updated() {
        swal("Success!", "Course Details Updated!", "success");
    }
    </script>

    <script>
    $(document).ready(function () {
        $(document).on('click','a[data-role=delete]',function () {
            var id = $(this).data('id');
            

            $('#id').val(id);
            

          });
          $('#delete').click(function () {
              var id=$('#id').val();
             

              $.ajax({
                  url: 'delete_faculties.php',
                  method:'post',
                  data:{id:id},
                  success: function (params) {
                   
                    deleted();
                  }
              });
          });
    });

    function deleted() {
        swal("Warning", "Faculty Deleted!", "warning");
    }
    </script>








</body>
</center>
</html>
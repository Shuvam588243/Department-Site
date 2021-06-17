
<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDB = "Web_Project";

extract ($_POST);

$conn = mysqli_connect($servername,$username,$password,$myDB);

if(!$conn)
{
  die("Connection Failed :" . mysqli_connect_error());
}

$query = "SELECT * FROM course";
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
 <th>Course ID</th>
 <th>Course Name</th>
 <th>Course Code</th>
 <th>Total Semester</th>
 <th>Total Year</th>
  <th>Total Seats</th>
 <th>Course Total Fees</th>
  <th>Semester Fees</th>
  <th>Edit</th>
  <th>Delete</th>
  <th>Subjects</th>
 
 
 
 </tr>


  
  
  
  

  
  <?php
  
  while($result = mysqli_fetch_assoc($data))
  {
    echo "<tr id=".$result['cid'].">
 <td align='center'>".$result['cid']."</td>
 <td align='center' data-target='cname'>".$result['cname']."</td>
 <td align='center' data-target='cshort'>".$result['cshort']."</td>
 <td align='center' data-target='ctotsem'>".$result['ctotsem']."</td>
 <td align='center' data-target='ctotyear'>".$result['ctotyear']."</td>
 <td align='center' data-target='ctotcapacity'>".$result['ctotcapacity']."</td>
<td align='center' data-target='ctotfees'>".$result['ctotfees']."</td>
 <td align='center' data-target='csemfees'>".$result['csemfees']."</td>
 <td align='center'> <a id='b1' type='button' class='btn btn-primary' data-id=".$result['cid']." data-role='update'> Update </a></td>
<td align='center'><a href='del_course.php?id=$result[cid]' target='_top'><button type='submit' name='submit' class='btn btn-danger'>Delete</button></a></td>
<td align='center'><a href='show_courses2.php?id=$result[cid]' target='_top'><button type='submit' name='submit' class='btn btn-success'>View</button></a></td>






 
 
 
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
        <label for="t1">Course Name </label>
        <input type="email" class="form-control" id="t1" name="t1">

        <label for="t2">Course Code </label>
        <input type="email" class="form-control" id="t2" name="t2">

        <label for="t3">Total Semesters</label>
      <select class="form-control"  name="t3" id="t3">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
      </select>

     

         <label for="t4">Total Seats </label>
        <input type="text" class="form-control" id="t4" name="t4">

         <label for="t5">Course Total Fees </label>
        <input type="text" class="form-control" id="t5" name="t5">

        <label for="t6">Semester Fees </label>
        <input type="text" class="form-control" id="t6" name="t6">



         <input type="hidden" class="form-control" id="id" name="id">


        </div>


    

    </fieldset>
    <center>
    <a href="#" id="save" class="btn btn-primary pull-right">Update</a>


  
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
                    $('#'+id).children('td[data-target=fmail]').text(cname);
                    $('#'+id).children('td[data-target=designation]').text(cshort);
                     $('#'+id).children('td[data-target=fmail]').text(ctotsem);
                    $('#'+id).children('td[data-target=designation]').text(ctotcapacity);
                     $('#'+id).children('td[data-target=fmail]').text(ctotfees);
                    $('#'+id).children('td[data-target=designation]').text(csemfees);
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

   






</body>
</center>
</html>
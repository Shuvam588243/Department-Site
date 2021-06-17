
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

$query = "SELECT * FROM faculties";
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
 <th>Faculty Image</th>
 <th>Faculty ID</th>
 <th>Faculty Name</th>
 <th>Designation</th>
 <th>Faculty Qualification</th>
 <th>Faculty Phone</th>
  <th>Faculty Mail</th>
 <th>Address</th>
 <th>Update</th>
  <th>Delete</th>
 
 
 
 </tr>


  
  
  
  
  
  <?php
  
  while($result = mysqli_fetch_assoc($data))
  {
    echo "<tr id=".$result['fid'].">
 <td align='center' >".$result['fimage']."</td>
 <td align='center'>".$result['fid']."</td>
 <td align='center'>".$result['fname']."</td>
  <td align='center' data-target='designation'>".$result['fdesig']."</td>
 <td align='center'>".$result['fqualification']."</td>
 <td align='center'>".$result['fphone']."</td>
 <td align='center' data-target='fmail'>".$result['femail']."</td>
<td align='center'>".$result['faddress']."</td>
 <td align='center'>

<a id='b1' type='button' class='btn btn-primary' data-id=".$result['fid']." data-role='update'> Update </a>



 </td> </td>
 <td align='center'><a id='delete' type='button' class='btn btn-danger' data-id=".$result['fid']." data-role='delete'> Delete </a></td> </td>






 
 
 
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


 <!-- The Modal -->
<div class="modal" id="myModal" style="max-width: 350px; margin-left : 500px">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 id="ha",class="modal-title">Faculty Update</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
  <fieldset>

   
      <div class="form-group">
      <label for="t1">Faculty Designation</label>
      <select class="form-control"  name="t1" id="t1">
        <option value="Professor">Professor</option>
        <option value="Assistant Professor">Assistant Professor</option>
        <option value="Associate Faculty">Associate Faculty</option>
        <option value="Associate Professor">Associate Professor</option>
      </select>
    </div>


     <div class="form-group">
        <label for="t2">Faculty Email</label>
        <input type="email" class="form-control" id="t2" name="t2"aria-describedby="emailHelp" >
        </div>


         <input type="hidden" class="form-control" id="id" name="id">


    </fieldset>
    <center>
    <a href="#" id="save" class="btn btn-primary pull-right">Update</a>

    <script>
  function sub_add()
  {
    swal("Good job!", "You clicked the button!", "success");
  }
  function course_add()
  {
    swal("Success", "Course Added Successfully", "success");
  }
</script>
  
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
            var email = $('#'+id).children('td[data-target=fmail]').text();
            var designation = $('#'+id).children('td[data-target=designation]').text();

            $('#id').val(id);
            $('#t2').val(email);
            $('#t1').val(designation);
            $('#myModal').modal('toggle');

          });
          $('#save').click(function () {
              var id=$('#id').val();
              var email = $('#t2').val();
              var designation = $('#t1').val();

              $.ajax({
                  url: 'update.php',
                  method:'post',
                  data:{id:id ,  email:email , designation:designation },
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
        swal("Success!", "Faculty Details Updated!", "success");
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
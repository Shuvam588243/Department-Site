

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
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  
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
 <th>Allocate Subject</th>

 
 
 
 </tr>


  
  
  
  
  
  <?php
  
  while($result = mysqli_fetch_assoc($data))
  {
    echo "<tr id=".$result['fid'].">
 <td align='center' ><img src='".$result['fimage']."' height='100' width='100'/></td>
 <td align='center' data-target='fid'>".$result['fid']."</td>
 <td align='center'>".$result['fname']."</td>
  <td align='center' data-target='designation'>".$result['fdesig']."</td>
 <td align='center'>".$result['fqualification']."</td>

 <td align='center'>

<a id='b1' type='button' class='btn btn-primary' data-id=".$result['fid']." data-role='update'> Allocate </a>



 </td> </td>
</td>






 
 
 
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
        <h4 id="ha",class="modal-title">Faculty Allocation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post">
      
  <fieldset>


 

     <div class="form-group">
        <label for="t1">Faculty ID</label>
        <input type="text" class="form-control" id="t1" name="t1">
        </div>



         <label for="t2">Select Course</label>
      <select class="form-control"  name="t2" id="t2">
        <option value="">Select Course</option>
        <option value=1>MSc CS</option>
        <option value=2>MSc IT</option>
      </select>


       <label for="t3">Selection Semester</label>
      <select class="form-control"  name="t3" id="t3">
        <option value="">Select Semester</option>
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
      </select>


        <label for="t4">Select Subject</label>
      <select class="form-control"  name="t4" id="t4">
        <option value="">Select Semester</option>
        
      
      </select>















       


         <input type="hidden" class="form-control" id="id" name="id">


    </fieldset>
    <center>
      <br>
    <input type="submit" name="submit"  class="btn btn-primary pull-right" value="Allocate">

    
  
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



<script>
    $(document).ready(function () {
      $(document).on('click','a[data-role=update]',function () {
            var id = $(this).data('id');
            $('#t1').val(id);
            $('#myModal').modal('toggle');

          });

        $('#t3').change(function()
        {
          var sem = $('#t3').val();
          var cid = $('#t2').val();
          console.log(sem,cid);
          $('#t4').html('');
          $.ajax({
            url:'allocate.php',
            method : 'post',
            data : {sem : sem,cid : cid},
            success : function(allocate)
            {
              $('#t4').html(allocate);
            }

          });


        });
    });
    </script>



<?php

if(isset($_POST["submit"]))

{

extract ($_POST);


include '../config/conn.php';



if($t1!="" && $t2!="" && $t4!="")
{

$sql = "UPDATE subject set fid='$t1' where cid='$t2' and code='$t4'";

if ($conn->query($sql) === TRUE) {
  
     echo "<script>swal(\"Success\", \"Subject Updated Successfully\", \"success\")</script>";
  }
  else {
   
    echo "<script>swal(\"Error\", \"Updation Failed\", \"error\")</script>";
  
  
}


$conn->close();

}

else

{
  echo "<script>swal(\"Error\", \"Field Cant be Empty\", \"error\")</script>";
}



}


?>










</body>
</center>
</html>
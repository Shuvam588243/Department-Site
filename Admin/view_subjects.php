
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

$query = "SELECT * FROM subject";
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
 <th>Course Id</th>
 <th>Subject Code</th>
 <th>Subject Name</th>
 <th>Subject Type</th>
 <th>Faculty Allocated</th>
 <th>Update</th>
  <th>Delete</th>
 
 
 
 </tr>


  
  
  
  
  
  <?php
  
  while($result = mysqli_fetch_assoc($data))
  {
    echo "<tr id=".$result['cid'].">
  <td align='center' data-target='cid'>".$result['cid']."</td>
 <td align='center' data-target='code'>".$result['code']."</td>
 <td align='center' data-target='s_name'>".$result['s_name']."</td>
 <td align='center' data-target='s_type'>".$result['s_type']."</td>
  <td align='center' data-target='fid'>".$result['fid']."</td>
 <td align='center'>

<a id='b1' type='button' class='btn btn-primary' data-id=".$result['cid']." data-role='update'> Update </a>



 </td> </td>
 <td align='center'><a href='del_sub.php?id=$result[code]' target='_top'><button type='submit' name='submit' class='btn btn-danger'>Delete</button></a></td> </td>






 
 
 
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
        <h4 id="ha",class="modal-title">Course Subject Update</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
  <fieldset>

   
      <div class="form-group">
                               <label for="t6">Course ID</label>
                                <input type="text" class="form-control" id="t1" name="t1"aria-describedby="emailHelp" disabled>
                                </div>

                                 <div class="form-group">
                               <label for="t2">Course Name</label>
                                <input type="text" class="form-control" id="t2" name="t2"aria-describedby="emailHelp" disabled>
                                </div>

                                 <div class="form-group">
                          <label for="t3">Select Semester</label>
                            <select class="form-control"  name="t3" id="t3">
                              <option value=1>Semester 1</option>
                              <option value=2>Semester 2</option>
                              <option value=3>Semester 3</option>
                              <option value=4>Semester 4</option>
                              <option value=5>Semester 5</option>
                              <option value=6>Semester 6</option>
                            </select>
                          </div>




                                <div class="form-group">
                               <label for="t4">Subject Code</label>
                                <input type="text" class="form-control" id="t4" name="t4" aria-describedby="emailHelp" >
                                </div>


                                <div class="form-group">
                               <label for="t5">Enter Subject Name</label>
                                <input type="text" class="form-control" id="t5" name="t5" aria-describedby="emailHelp" >
                                </div>


                                <div class="form-group">
                          <label for="t6">Select Semester Type</label>
                            <select class="form-control"  name="t6" id="t6">
                              <option value="Core">Core</option>
                              <option value="Elective">Elective</option>
                            </select>
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
            var cid = $(this).data('cid');
            var code = $('#'+id).children('td[data-target=code]').text();
            var s_name = $('#'+id).children('td[data-target=s_name]').text();
            var s_type = $('#'+id).children('td[data-target=s_type]').text();
            var fid = $('#'+id).children('td[data-target=fid]').text();
            

            $('#cid').val(cid);
            $('#code').val(code);
            $('#s_name').val(s_name);
            $('#s_type').val(s_type);
            $('#fid').val(fid);
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

    














</body>
</center>
</html>
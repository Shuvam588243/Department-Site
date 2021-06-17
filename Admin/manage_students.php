
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

$query = "SELECT * FROM students";
$data = mysqli_query($conn, $query);
$total= mysqli_num_rows($data);

if($total !=0)
{
  ?>
  <html>
  <head>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  </head>

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
<div class="container">
<div class="col"> 
 <table border=1  class="table table-hover">
 <tr class="table-primary">
 <th>Photo</th>
 <th>Student Id</th>
 <th>Student Name</th>
 <th>Student Mail</th>
 
 <th>Address</th>
  <th>Contact</th>

  <th>Current Semester</th>
 
  <th>Delete</th>
 
 
 
 </tr>


  
  
  
  
  
  <?php
  
  while($result = mysqli_fetch_assoc($data))
  {
    echo "<tr>
 <td align='center'>".$result['Simage']."</td>
 <td align='center'>".$result['sid']."</td>
 <td align='center'>".$result['sname']."</td>
 <td align='center'>".$result['smail']."</td>
 
 <td align='center'>".$result['saddress']."</td>
 <td align='center'>".$result['smobile']."</td>

 <td align='center'>".$result['Current_semester']."</td>
 
 <td align='center'><button type='submit' name='submit' class='btn btn-danger'> Delete </button></td> </td>






 
 
 
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

</body>

</html>
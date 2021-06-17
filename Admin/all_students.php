
<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDB = "car";

extract ($_POST);

$conn = mysqli_connect($servername,$username,$password,$myDB);

if(!$conn)
{
  die("Connection Failed :" . mysqli_connect_error());
}

$query = "SELECT * FROM vehicle";
$data = mysqli_query($conn, $query);
$total= mysqli_num_rows($data);

if($total !=0)
{
  ?>
  <html>
  <head>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  
  </head>
  <center>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Computer Science Dept</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Back
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
<div class="col-11"> 
 <table border=1  class="table table-hover">
 <tr class="table-primary">
 <th>Course Id</th>
 <th>Course Name</th>
 <th>Course Total Semester</th>
  <th>Course Duration</th>
 <th>Course Capacity</th>
 
 
 
 </tr>


  
  
  
  
  
  <?php
  
  while($result = mysqli_fetch_assoc($data))
  {
    echo "<tr>
 <td align='center'>".$result['Vehicle_id']."</td>
 <td align='center'>".$result['BName']."</td>
 <td align='center'>".$result['VName']."</td>
 <td align='center'>".$result['PDay']."</td>
 <td align='center'>".$result['Capacity']."</td>

 
 
 
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
</center>
</html>
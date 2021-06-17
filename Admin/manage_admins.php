
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

$query = "SELECT * FROM admin";
$data = mysqli_query($conn, $query);
$total= mysqli_num_rows($data);

if($total !=0)
{
  ?>
  <html>
  <head>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <style>
    .iconify{
      margin-right: 4px;
      margin-left : 4px;
    }
   
  </style>
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
<div class="container" style="margin-left: 58px">
<div class="col-12"> 
 <table border=1  class="table table-hover">
 <tr class="table-primary">
 <th>Admin Id</th>
 <th>Admin Mail</th>
 <th>Create Admin</th>
 <th>Create Course</th>
  <th>Create Student</th>
 <th>Create Faculty</th>
  <th>Manage Student</th>
 <th>Manage Course</th>
  <th>Manage Faculty</th>
 <th>Manage Exam</th>
  <th>Edit</th>
 <th>Delete</th>

  
 
 
 
 </tr>


  
  
  
  
  
  <?php
  

  while($result = mysqli_fetch_assoc($data))
  {
    echo "<tr>
 <td align='center'>".$result['aid']."</td>
 <td align='center'>".$result['amail']."</td>
 <td align='center'>".$result['createadmin']."</td>
 <td align='center'>".$result['createcourse']."</td>
<td align='center'>".$result['createstudent']."</td>
 <td align='center'>".$result['createfaculty']."</td>
 <td align='center'>".$result['managestudent']."</td>
 <td align='center'>".$result['managecourse']."</td>
 <td align='center'>".$result['managefaculty']."</td>
 <td align='center'>".$result['manageexam']."</td>

 <td align='center'><a href='edit_admin.php?id=$result[aid]&hn=$result[amail]&f=$result[createadmin]&g=$result[createcourse]&l=$result[createfaculty]&n=$result[managestudent]&x=$result[managecourse]&z=$result[managefaculty]&o=$result[manageexam]' target='_top'><button type='submit' name='submit' class='btn btn-primary'>Edit</button></a></td>


  <td align='center'><a href='del_admin.php?id=$result[aid]' target='_top'><button type='submit' name='submit' class='btn btn-danger'>Delete</button></a></td>

 








 
 
 
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
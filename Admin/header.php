<?php



$query="select * from admin where amail='$t1'";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{

  $t4=$row["createadmin"];
  $t5=$row["createcourse"];
  $t6=$row["createstudent"];
  $t7=$row["createfaculty"];
  $t8=$row["managestudent"];
  $t9=$row["managecourse"];
  $t10=$row["managefaculty"];
  $t11=$row["manageexam"];
  $t12=$row["role"];


}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
	<title></title>

  <style>

    #nt{
       margin-left: 850px;
       position:fixed;

    }
    #lout{
      margin-left: 990px;
      position:fixed;
    }
    ul a:hover{
      background-color: black;
      color: white;
      padding: auto;
      height: 38px;
    }
     .iconify{
      margin-right: 4px;
      margin-left : 4px;
    }
  </style>
	
</head>
	<img src="images/GU.png" alt="">


	<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin-top: 0px;">
  <a class="navbar-brand" href="#">Computer Science Dept</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="iconify" data-icon="ant-design:home-filled" data-inline="false"></span>Home
        </a>
      </li>





      <?php if($t4 == "Yes"): ?>
       <li class="nav-item active">
        <a class="nav-link" href="admin_add.php"><span class="iconify" data-icon="subway:admin-1" data-inline="false"></span> Admin
        </a>
      
      </li>
      <?php endif ?>



      <?php if($t8 == "Yes" && $t12!="super"): ?>
       <li class="nav-item active">
        <a class="nav-link" href="manage_students.php"><span class="iconify" data-icon="subway:admin-1" data-inline="false"></span> Manage Student
        </a>
      
      </li>
      <?php endif ?>




      <?php if($t9 == "Yes" && $t12!="super"): ?>
       <li class="nav-item active">
        <a class="nav-link" href="view_courses.php"><span class="iconify" data-icon="subway:admin-1" data-inline="false"></span> Manage Course
        </a>
      
      </li>
      <?php endif ?>



       <?php if($t10 == "Yes" && $t12!="super"): ?>
       <li class="nav-item active">
        <a class="nav-link" href="faculty_show.php"><span class="iconify" data-icon="subway:admin-1" data-inline="false"></span> Manage Faculties
        </a>
      
      </li>
      <?php endif ?>



      <?php if($t11 == "Yes" && $t12!="super"): ?>
       <li class="nav-item active">
        <a class="nav-link" href="exam.php"><span class="iconify" data-icon="subway:admin-1" data-inline="false"></span> Manage Exam
        </a>
      
      </li>
      <?php endif ?>



       <li class="nav-item active">
        <a class="nav-link" href="home_page.php"><span class="iconify" data-icon="subway:admin-1" data-inline="false"></span> Manage Home Page
        </a>
      
      </li>


















      <?php if($t4 == "Yes"): ?>
      <li class="nav-item active">
        <a class="nav-link" href="courses.php"><span class="iconify" data-icon="carbon:folder-details" data-inline="false"></span> Courses
        </a>
      </li>
      <?php endif ?>










       <?php if($t5 == "Yes"): ?>
      <li class="nav-item active">
        <a class="nav-link" href="students_add.php"><span class="iconify" data-icon="carbon:folder-details" data-inline="false"></span> Students
        </a>
      </li>
      <?php endif ?>






        <?php if($t6 == "Yes"): ?>
      <li class="nav-item active">
        <a class="nav-link" href="exam.php"><span class="iconify" data-icon="bx:bxs-calendar-edit" data-inline="false"></span>Exam
        </a>
      </li>
         <?php endif ?>






         <?php if($t7 == "Yes"): ?>
      <li class="nav-item active">
        <a class="nav-link" href="faculties.php"><span class="iconify" data-icon="foundation:results" data-inline="false"></span>Faculties
        </a>
      </li>
      <?php endif ?>








      <?php if($t6 == "Yes"): ?>
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="iconify" data-icon="foundation:results-demographics" data-inline="false"></span>Result
        </a>
      </li>
        <?php endif ?>






      <li id="nt" , class="nav-item active">
        <a class="nav-link" href="add_notice.php"><span class="iconify" data-icon="codicon:bell-dot" data-inline="false"></span>Events & Notices
        </a>
      </li>
       <li id="lout" , class="nav-item active">
        <a class="nav-link" href="../index.php"><span class="iconify" data-icon="ri:logout-circle-r-fill" data-inline="false"></span>Logout
        </a>
      </li>

     
    </ul>
  </div>
</nav>
	



</body>
</html>
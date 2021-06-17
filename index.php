<?php 

include("header.php");

include './config/conn.php';


$query="select * from home_page";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
 

  $t3=$row["vision"];
 
  $t5=$row["mission"];

  $t6=$row["history"];

 
  
  
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="./css/mystyle.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>

  <style>
    #f1{
      margin-top: 20px;
    }
   
    

  </style>
</head>

<body>

  <br><br>

  <div class="container">


    <div class="row">

      <div class="col-4">

        <div class="card mb-3" style="max-width: 30rem;">
          <div>
            <div class="card-header" align="center">
              <font size="4"><b>NOTIFICATIONS</b></font>
            </div>
            <div class="card-body" style="min-height: 400px">

              <h4 class="card-title" align="center">
                <hr>
              </h4>
              <p class="card-text">

                <marquee direction="up" height="100%" scrolldelay="400" align="center">


                  <div class="alert alert-dismissible alert-primary">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong> <span class="iconify" data-icon="gridicons:notice" data-inline="false"></span>Admission Going On for Msc CS </strong>
                  </div>



                  <div class="alert alert-dismissible alert-primary">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><span class="iconify" data-icon="gridicons:notice" data-inline="false"></span> Admission Going On for Msc IT </strong>
                  </div>




                  <div class="alert alert-dismissible alert-primary">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><span class="iconify" data-icon="gridicons:notice" data-inline="false"></span> Admission Going On for Phd Scholars </strong>
                  </div>

                  <div class="alert alert-dismissible alert-primary">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong> <span class="iconify" data-icon="gridicons:notice" data-inline="false"></span>Election On 25<sup>th</sup> February '21 </strong>
                  </div>




                </marquee>

              </p>



            </div>
          </div>




        </div>



      </div>



      <div class="col-8">

        <h2>VISION</h2>

        <p><?php echo "$t3" ?></p>



        <h2>MISSION</h2>

        <p><?php echo "$t5" ?>
        </p>


        <h2>BRIEF HISTORY OF THE DEPARTMENT</h2>

        <p><?php echo "$t6" ?></p>


      </div>





    </div>



<?php include("footer.php") ?>
  

</body>

</html>
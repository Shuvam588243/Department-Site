<?php include("header.php") ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="./css/mystyle.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
    $(document).ready(function() {
      $(".1").click(function() {
        $(".CompLab").toggleClass("hide")
      })
      $(".2").click(function() {
        $(".EmLab").toggleClass("hide")
      })
      $(".3").click(function() {
        $(".RUSA").toggleClass("hide")
      })
      $(".4").click(function() {
        $(".library").toggleClass("hide")
      })
      $(".5").click(function() {
        $(".Digi").toggleClass("hide")
      })

    });
  </script>

</head>

<body>

  <br><br>

  <div class="container">


    <div class="row">

      <div class="col-2">

      </div>

      <div class="col-9">




        <h1 align="center">Facilities</h1>

        <br>

        <ul class="course">
          <li class="1">
            <div class="point"> Computing Laboratories</div>

            <div class="CompLab hide course-content">
              <p>
                <font size=3>The department maintains two full fledged computer laboratories which are well equipped with the following computing equipments and supporting tools.It has its own Intranet Web Server and Mail Servers. All PCs in both the laboratories are connected with LAN/Wifi and high speed Internet connections.</font>
              <p>

                <hr>

                <br>

              <p>
                <font size="3">Servers : 03<br>

                  PCs : 50<br>

                  Printer/Scanner : 05<br>

                  Online UPS : 03<br>

                  LAN Trainer Kit : 01<br>

            </div>
          </li>
          <li class="2">
            <div class="point">Embedded Laboratory</div>

            <div class="EmLab hide course-content">
              <p>
                <font size=3>There is one hardware-cum-embedded system laboratory which was recently upgraded from grant received from Govt of Assam. Equipments available in this laboratory includes the following:<br><br>

                  LPKF PCB prototyping machine : Circuit board plotter for the production of prototype PCB's and small series, working area 229 mm x 305 mm x 38 mm, high speed spindle motor, adjustable 10.000 - 62.000 rpm. Appropriate for the production of RF -and Microwave boards. Incl. Software package consisting of Circuit Cam PCB (conversion/ insulation software) and Board Master (machine control software). <br><br>

                  Special specifications: automatic tool change with 10 stations acoustic cabinet (machine hood) included head lighting motorized Z-axis drive development. Using this machine we can design and create sophisticated PCBs which can be embedded into the circuit. <br><br>

                  German Waller WSD81: Temperature Controlled Station With Digital display, consisting of PUD 81 power & control unit, WSP80 Soldering pencil 24V, 80W, Soldering Tips</font>
              </p><br><br>


              <p>
                <font size=3>a) LT-B chisel Soldering Tip 2.4 mm<br>
                  b) LT-K Long chisel soldering Tip 1.2 mm<br>
                  c) LT-GW SMD soldering Tip</font>
              </p>
            </div>
          </li>
          <li class="5">
            <div class="point">Digital Video Microscope Model DMS 233</div>

            <div class="Digi hide course-content">
              <p>
                <font size=3>KEIL MCBx51 Evaluation Board: ATMEL AT89C51 micro controller base evaluation board and allows you to create and test working programs for this advanced architecture.

                  Rapid Development Kit for phyCORE: Xscale/PXA270 PXA270m 520MHz,64MB SDRAM, 32 MB Flash, 4 KB EEPROM, 100 M/S Ethernet, MMC,12c,12c-RTC, no GPIO Expander, Basic (Linux) RDK Kit, LCD/Touch Panel with Bare PCB expansion Board. Part No.: KPCM-027-LCD/TP Linux</font>
              </p>

            </div>
          </li>
          <li class="3">
            <div class="point">RUSA ( Rashtriya Uchchatar Shiksha Abhiyan) funded Laboratory</div>

            <div class="RUSA hide course-content">
              RUSA has funded a state-of-art laboratory in the year 2017 with 15 PCs, 1-GPU enables workstation, 1 wall mounted LCD TV with projection facilities. The lab is equipped with LAN and high speed Leased Line Internet connections.
            </div>
          </li>
          <li class="4">
            <div class="point">Library Facilities</div>

            <div class="library hide course-content">
              A well-equipped Departmental Library with more than 3000 books available in different fields of Computer Science & IT.
            </div>
          </li>
        </ul>
















































      </div>
    </div>
  </div>

  <br><br><br><br><br><br><br><br>

 

</body>

</html>
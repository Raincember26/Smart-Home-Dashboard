<?php

include "connect.php";

?>

<!DOCTYPE html>
<html>
<title>SMART HOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">SMART HOME</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="foto1.jpeg" class="w3-circle w3-margin-right" style="width:60px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Galih Putra</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Views</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Traffic</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Geo</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Orders</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  General</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-flash w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>Rp72.890,-</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Listrik</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-tint w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>Rp58.609,-</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Air</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-dashboard w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>Normal</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Energy</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>4 Orang</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <h5>Regions</h5>
        <img src="gambar3.png" style="width:100%" alt="Google Regional Map">
      </div>
      <div class="w3-twothird">
        <h5>Feeds</h5>
        <table border="1" class="w3-table w3-striped w3-white">
        <tr>
        <td><i class="fa fa-lightbulb-o w3-text-red w3-large"></i></td>
            <td>Lampu</td>
            <td>
            
            <?php
                       $data = mysqli_query($mysqli, "SELECT statue from saklar WHERE id='1'");
       
                           if($val=mysqli_fetch_array($data)) {
                               $hasil = $val ['statue'];
                                   if($hasil == 1) {
                                       $status = "MENYALA";
                                       }
                                   else {
                                       $status = "MATI";
                                       }
                                   echo " ";
                                   echo $status;
                                   }
                   ?>

            </td>
            <td><i>
            
            <button class="btn btn-success" onclick="window.location.href='control.php?id=1&statue=1'">ON</button>
    <button class="btn btn-danger" onclick="window.location.href='control.php?id=1&statue=0'">OFF</button>

            </i></td>
          </tr>
          <tr>
          <td><i class="fa fa-asterisk w3-text-green w3-large"></i></td>
            <td>Kipas</td>
            <td>
            
            <?php
                $data = mysqli_query($mysqli, "SELECT statue from saklar WHERE id='2'");

                    if($val=mysqli_fetch_array($data)) {
                        $hasil = $val ['statue'];
                            if($hasil == 1) {
                                $status = "MENYALA";
                                }
                            else {
                                $status = "MATI";
                                }
                            echo "";
                            echo $status;
                            }
            ?>

            </td>
            <td><i>
            
            <button class="btn btn-success" onclick="window.location.href='control.php?id=2&statue=1'">ON</button>
        <button class="btn btn-danger" onclick="window.location.href='control.php?id=2&statue=0'">OFF</button>

            </i></td>
          </tr>
          <tr>
          <td><i class="fa fa-leaf w3-text-blue w3-large"></i></td>
            <td>AC</td>
            <td>
            
            <?php
                $data = mysqli_query($mysqli, "SELECT statue from saklar WHERE id='3'");

                    if($val=mysqli_fetch_array($data)) {
                        $hasil = $val ['statue'];
                            if($hasil == 1) {
                                $status = "MENYALA";
                                }
                            else {
                                $status = "MATI";
                                }
                            echo "";
                            echo $status;
                            }
             ?>

            </td>
            <td><i>
            
            <button class="btn btn-success" onclick="window.location.href='control.php?id=3&statue=1'">ON</button>
        <button class="btn btn-danger" onclick="window.location.href='control.php?id=3&statue=0'">OFF</button>

            </i></td>
          </tr>
          <tr>
          <td><i class="fa fa-tv w3-text-red w3-large"></i></td>
            <td>Proyektor</i></td>
            <td>
            
            <?php
                       $data = mysqli_query($mysqli, "SELECT statue from saklar WHERE id='4'");
       
                           if($val=mysqli_fetch_array($data)) {
                               $hasil = $val ['statue'];
                                   if($hasil == 1) {
                                       $status = "MENYALA";
                                       }
                                   else {
                                       $status = "MATI";
                                       }
                                   echo " ";
                                   echo $status;
                                   }
                   ?>

            </td>
            <td><i>
            <button class="btn btn-success" onclick="window.location.href='control.php?id=4&statue=1'">ON</button>
    <button class="btn btn-danger" onclick="window.location.href='control.php?id=4&statue=0'">OFF</button>
            </i></td>
          </tr>
          <tr>
          <td><i class="fa fa-tint w3-text-green w3-large"></i></td>
            <td>Kran Air</i></td>
            <td>
            
            <?php
                       $data = mysqli_query($mysqli, "SELECT statue from saklar WHERE id='5'");
       
                           if($val=mysqli_fetch_array($data)) {
                               $hasil = $val ['statue'];
                                   if($hasil == 1) {
                                       $status = "MENYALA";
                                       }
                                   else {
                                       $status = "MATI";
                                       }
                                   echo " ";
                                   echo $status;
                                   }
                   ?>

            </td>
            <td><i>
            <button class="btn btn-success" onclick="window.location.href='control.php?id=5&statue=1'">ON</button>
    <button class="btn btn-danger" onclick="window.location.href='control.php?id=5&statue=0'">OFF</button>
            </i></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Penggunaan Listrik Tertinggi</h5>
    <p>Lampu</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:75%">+75%</div>
    </div>

    <p>AC</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
    </div>

    <p>Kipas</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">25%</div>
    </div>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Bagian Rumah</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr>
        <td>Kamar Depan</td>
        <td>65%</td>
      </tr>
      <tr>
        <td>Kamar Belakang</td>
        <td>15.7%</td>
      </tr>
      <tr>
        <td>Ruang Tamu</td>
        <td>5.6%</td>
      </tr>
      <tr>
        <td>Kamar Mandi</td>
        <td>2.1%</td>
      </tr>
      <tr>
        <td>Dapur</td>
        <td>1.9%</td>
      </tr>
      <tr>
        <td>Teras</td>
        <td>1.5%</td>
      </tr>
    </table><br>
    <button class="w3-button w3-dark-grey">Bagian Lain  <i class="fa fa-arrow-right"></i></button>
  </div>


  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>FOOTER</h4>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>

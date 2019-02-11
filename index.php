<?php

include "connect.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Saklar Online</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    </head>

    <style>
        tr, td{
            text-align:center;
        }
    </style>

    <body>
        <h3>Saklar Online</h3>

        <br>

<table border="2px" style="width:100%">
  <tr>
    <th>Nama Perangkat</th>
    <th>Status</th> 
    <th>Saklar</th>


  <!--Lampu-->
  </tr>
  <tr>
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
    <td>
    <button class="btn btn-success" onclick="window.location.href='control.php?id=1&statue=1'">ON</button>
    <button class="btn btn-danger" onclick="window.location.href='control.php?id=1&statue=0'">OFF</button>
    </td>
  </tr> 


  <!--Kipas-->
  <tr>
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
            ?></td> 
    <td>
        <button class="btn btn-success" onclick="window.location.href='control.php?id=2&statue=1'">ON</button>
        <button class="btn btn-danger" onclick="window.location.href='control.php?id=2&statue=0'">OFF</button>
    </td>
  </tr>

   <!--AC-->
   </tr>
  <tr>
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
    <td>
        <button class="btn btn-success" onclick="window.location.href='control.php?id=3&statue=1'">ON</button>
        <button class="btn btn-danger" onclick="window.location.href='control.php?id=3&statue=0'">OFF</button>
    </td>
  </tr>
  
   <!--Proyektor-->
   </tr>
  <tr>
    <td>Proyektor</td>
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
    <td>
    <button class="btn btn-success" onclick="window.location.href='control.php?id=4&statue=1'">ON</button>
    <button class="btn btn-danger" onclick="window.location.href='control.php?id=4&statue=0'">OFF</button>
    </td>
  </tr> 

   <!--Kran Air-->
   </tr>
  <tr>
    <td>Kran Air</td>
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
    <td>
    <button class="btn btn-success" onclick="window.location.href='control.php?id=5&statue=1'">ON</button>
    <button class="btn btn-danger" onclick="window.location.href='control.php?id=5&statue=0'">OFF</button>
    </td>
  </tr> 

</table>
<br>
<button class="btn btn-success" onclick="window.location.href='all-control.php?&statue=1'">ALL ON</button>
<button class="btn btn-danger" onclick="window.location.href='all-control.php?&statue=0'">ALL OFF</button>

    </body>
</html>
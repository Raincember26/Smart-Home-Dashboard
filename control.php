<?php
include "connect.php";
$id = $_GET['id'];
$statue = $_GET['statue'];

mysqli_query($mysqli, "UPDATE saklar SET statue='$statue' WHERE id='$id'");
header("location:index2.php");

?>
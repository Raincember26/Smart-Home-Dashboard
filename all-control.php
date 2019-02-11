<?php
include "connect.php";
$statue = $_GET['statue'];

mysqli_query($mysqli, "UPDATE saklar SET statue='$statue'");
header("location:index.php");

?>
<?php
     $con = mysqli_connect('localhost', 'root', '', 'data');
     $id = $_GET['user'];
     mysqli_query($con, "DELETE FROM info WHERE id=$id");
     header('location: Data.php');
?>
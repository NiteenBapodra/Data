<?php
     $con = mysqli_connect('localhost', 'root', '', 'data');
     $name = $_POST['name'];
     $add = $_POST['address'];
     if($con){
          if ($_POST['submit'] == 'add') {
               mysqli_query($con, "insert into info values(null, '$name', '$add')");
          }
          elseif ($_POST['submit'] == 'Edit') {
               $id = $_POST['id'];
               mysqli_query($con, "UPDATE info set name='$name', address='$add' WHERE id=$id");
          }
          header('location: Data.php');
     }
?>
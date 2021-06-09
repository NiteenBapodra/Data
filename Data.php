<!DOCTYPE html>
<html lang="en">

<head>
     

     <title>Data</title>
     <style>
          table {
              
               width: 50%;
               margin: auto;
               margin-top: 5%;
          }

          th,
          td {
               padding: 15px;
               text-align: left;
               text-transform: capitalize;
          }

          button {
               background-color: #FF0000;
               color: white;
               padding: 12px 20px;
               border: none;
               border-radius: 4px;
               cursor: pointer;
          }
     </style>
</head>

<body>
     <table border="1">
          <tr>
               <th colspan="4" style="text-align: center;">
                    <span style="font-size: 35px; ">Information</span>
               </th>
               <th style="text-align: center;"><a href="Add_data.php"><button>Add</button></a></th>
          </tr>
          <tr>
               <th>id</th>
               <th>name</th>
               <th>address</th>
               <th>update</th>
               <th>delete</th>
          </tr>
          <?php
          $con = mysqli_connect('localhost', 'root', '', 'data');
          $result = mysqli_query($con, "SELECT * FROM info");
          $i = 1;
          $count = mysqli_num_rows($result);
          if ($count != 0) {
               while ($row = mysqli_fetch_row($result)) {
          ?>
                    <tr>
                         <td><?= $i ?></td>
                         <td><?= $row[1] ?></td>
                         <td><?= $row[2] ?></td>
                         <td><a href="Edit_data.php?user=<?= $row[0] ?>"><button>update</button></a></td>
                         <td><a href="Delete_data.php?user=<?= $row[0] ?>"><button>Delete</button></a></td>
                    </tr>
               <?php
                    $i++;
               }
          } else {
               ?>
               <tr>
                    <td colspan="8">
                         <h1 style="text-align: center;"> .........</h1>
                    </td>
               </tr>
          <?php
          }
          ?>
     </table>
</body>

</html>
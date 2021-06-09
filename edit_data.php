<!DOCTYPE html>
<html lang="en">

<head>
     
     <title>Form </title>
     
     <style>
          * {
               box-sizing: border-box;
          }

          label {
               padding: 12px 12px 12px 0;
               display: inline-block;
          }

          input,
          select {
               width: 100%;
               padding: 12px;
               border: 1px solid #ccc;
               border-radius: 4px;
               resize: vertical;
          }

          button {
               background-color: #0000e6d4;
               color: white;
               padding: 12px 20px;
               border: none;
               border-radius: 4px;
               cursor: pointer;
               margin-top: 20px;
          }

          .container {
               border-radius: 3px;
               background-color: #00FFFF;
               padding: 20px;
               width: 60%;
               margin: auto;
               margin-top: 5%;
          }

          h2{
               text-align: center;
          }
     </style>
</head>

<body>
     <div class="container">
          <form action="Data_process.php" method="post">
               <h2>Information</h2>
               <div>
                    <label for="Name">Name</label>
                    <input type="text" name="name" id="Name">
               </div>
               <div>
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address">
               </div>
               
               <div>
                   <input type="hidden" name="id" value="<?= $_GET['user'] ?>">
                    <button type="submit" name="submit" value="Edit">Edit</button>
               </div>
          </form>
     </div>
</body>

</html>
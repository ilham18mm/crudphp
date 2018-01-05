<?php
  include_once("../models/config.php");

  if(isset($_POST['update'])){
    $id= $_POST['id'];
    $name= $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $alamat = $_POST['alamat'];
    $result = mysqli_query($mysqli, "UPDATE users SET name = '$name', email ='$email', age ='$age', alamat = '$alamat' WHERE id='$id' ");
    header("Location: ../index.php");
  }
 ?>
 <?php

 $id = $_GET['id'];

 $result = mysqli_query($mysqli, "SELECT * FROM users WHERE id= $id");

 while ($user_data = mysqli_fetch_array($result)) {
   $name = $user_data['name'];
   $email = $user_data['email'];
   $age =   $user_data['age'];
   $alamat =$user_data['alamat'];
 }
  ?>

  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>edit</title>
    </head>
    <body>
      <div class="container">
        <div class="header">
          <h3><a href="../index.php">home</a></h3>
        </div>
        <div class="conten">
          <form class="update_users" action="edit.php" method="post">
            <table>
              <tr>
                <td>name:</td>
                <td> <input type="text" name="name" value=<?php echo $name;?>> </td>
              </tr>
              <tr>
                <td>email:</td>
                <td> <input type="text" name="email" value=<?php echo $email;?>> </td>
              </tr>
              <tr>
                <td>age:</td>
                <td> <input name="age" value=<?php echo $age; ?>> </td>
              </tr>
              <tr>
                <td>Alamat:</td>
                <td> <input type="text" name="alamat" value=<?php echo $alamat;?>> </td>
              </tr>
              <tr>
                <td> <input type="hidden" name="id" value=<?php echo $_GET['id'];?>> </td>
                <td> <input type="submit" name="update" value="UPDATE"> </td>
              </tr>
            </table>

          </form>
        </div>

      </div>

    </body>
  </html>

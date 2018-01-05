<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>add users</title>
  </head>
  <body>
    <div class="container">
      <div class="">
        <h3><a href="../index.php">Go to home</a></h3>
        <div class="conten">
          <form action= "add.php" method="post" name = "from1">
            <table>
              <tr>
                <td>name:</td>
                <td><input type="text" name= "name"></td>
              </tr>
              <tr>
                <td>email:</td>
                <td><input type="text" name= "email"></td>
              </tr>
              <tr>
                <td>age:</td>
                <td><input  name= "age"></td>
              </tr>
              <tr>
                <td>alamat:</td>
                <td><input type="text" name= "alamat"></td>
              </tr>

              <tr>
                <td></td>
                <td><input type="submit" name= "Submit" value="Add"></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>

    <?php
    if(isset($_POST['Submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $age = $_POST['age'];
      $alamat = $_POST['alamat'];

      include_once("../models/config.php");

      $result = mysqli_query($mysqli, "INSERT INTO users(name,email,age,alamat) VALUES('$name','$email','$age','$alamat')");

      echo "Users add successfully. <a href= '../index.php'> views users<a>";

    };
     ?>
  </body>
</html>

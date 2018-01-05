<?php
  include_once("models/config.php");

  $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <div class="container">
      <div class="linkAddUsers">
        <a href="routes/add.php"> Add New Users</a>
        <br>
        <br>
      </div>
      <div class="conten">
        <table>
          <tr>
            <th>name</th>
            <th>email</th>
            <th>age</th>
            <th>alamat</th>
          </tr>
          <?php
          while ($user_data = mysqli_fetch_array($result)) {
            echo "<br>";
            echo "<td>". $user_data['name']."</td>";
            echo "<td>". $user_data['email']."</td>";
            echo "<td>". $user_data['age']."</td>";
            echo "<td>". $user_data['alamat']."</td>";
            echo "<td><a href = 'routes/edit.php?id=$user_data[id]'>Edit</a> | <a href='routes/delete.php?id=$user_data[id]'>Delete</a></td></tr>";
          }
           ?>
        </table>
      </div>
    </div>
  </body>
</html>

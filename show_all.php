<?php
  include("DataBase.php");

  $data_base = new DataBase();
  $conn = $data_base->getConnection();

  $sql = "SELECT * FROM usuario";
  $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Seeing all</title>
  </head>
  <body>
    <table border="1" style="text-align: center;">
      <tr>
        <td>ID</td>
        <td>Username</td>
        <td>Email</td>
        <td>Update</td>
        <td>Delete</td>
      </tr>
        <?php
          while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $nome = $row['nome'];
            $email = $row['email'];
            echo "<tr>
                    <td>$id</td>
                    <td>$nome</td>
                    <td>$email</td>
                    <td><a href='update_user.php?id=$id'><button type='button' name='update'>Update</button></a></td>
                    <td><a href='delete_user.php?id=$id'><button type='button' name='delete'>Delete</button></a></td>
                  </tr>";
          }
        ?>
    </table>
    <button type="button" onclick="window.location.href='index.html'" name="button">Back to index</button>
  </body>
</html>
<?php
  $data_base->closeConnection();
?>

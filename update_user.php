<?php
  include 'DataBase.php';

  $data_base = new DataBase();
  $conn = $data_base->getConnection();

  $result;

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuario WHERE id = $id";
    $result = $conn->query($sql);
  } else {
    header("Location: show_all.php");
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="save_updated_data.php" method="post">
      <?php
        $row = $result->fetch_assoc();
        $id = $row['id'];
        $nome = $row['nome'];
        $email = $row['email'];
       ?>
       <input type="text" name="id" value="<?php echo $id ?>" readonly><br />
       <input type="text" name="username" value="<?php echo $nome ?>"><br />
       <input type="email" name="email" value="<?php echo $email ?>"><br />
       <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
<?php
  $data_base->closeConnection();
?>

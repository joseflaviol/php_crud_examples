<?php
  include 'DataBase.php';

  $data_base = new DataBase();
  $conn = $data_base->getConnection();

  $id = $_POST['id'];
  $nome = $_POST['username'];
  $email = $_POST['email'];

  $sql = "UPDATE usuario SET nome = '$nome', email = '$email' WHERE id = $id";
  if ($conn->query($sql) === TRUE) {
    echo "User has been updated";
  } else {
    echo "Something goes wrong";
  }
?>

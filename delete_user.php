<?php

  include 'DataBase.php';

  $data_base = new DataBase();
  $conn = $data_base->getConnection();

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM usuario WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
      echo "User has been deleted";
    } else {
      echo "Something goes wrong";
    }
  }

  $data_base->closeConnection();
?>

<?php

  include 'DataBase.php';

  $data_base = new DataBase();
  $conn = $data_base->getConnection();

  if (isset($_POST['username']) && isset($_POST['email'])) {//verify if the fields has values
    $username = $_POST['username'];//get the value of the field
    $email = $_POST['email'];//get the value of the field

    $sql = "INSERT INTO usuario(nome, email) VALUES('$username', '$email')";
    if ($conn->query($sql) === TRUE) {
      echo "User has been inserted";
    } else {
      echo "Something goes wrong";
    }
  }

  $data_base->closeConnection();

?>

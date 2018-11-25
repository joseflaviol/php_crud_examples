<?php

  class DataBase{

    private $connection;

    function __construct(){
      $host = "localhost";
      $user = "root";
      $password = "vertrigo";
      $db_name = "example";
      $this->connection = new mysqli($host, $user, $password, $db_name);

      $sql = "CREATE TABLE IF NOT EXISTS usuario(id int auto_increment primary key, nome varchar(255) not null, email varchar(255) not null)";
      $this->connection->query($sql);
    }

    public function getConnection(){
      return $this->connection;
    }

    public function closeConnection(){
      $this->connection->close();
    }
  }

?>

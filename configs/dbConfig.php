<?php
    $servername = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $database = "registration";
    $db_name = "user";
    $connection = new mysqli($servername, $username, $password, $database);
    if($connection->connect_error){
        die("Connection failed");
    }
    $create = "CREATE TABLE IF NOT EXISTS $db_name (id int(11) AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    address varchar(255) NOT NULL,
    dob date NOT NULL)";
    $run = $connection->query($create);
    if(!$run){
        die("Cannot create");;
    }
?>
<?php include('../configs/dbConfig.php')?>
<?php include('../views/create.php')?>
<?php
    if(isset($_POST['add_button'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];

    if(empty($name) || empty($email) || empty($address) || empty($dob)){
        header('location:../views/create.php?message=All fields are required');
    }
    else{
        $query = "INSERT INTO user (name, email, address, dob) VALUES ('$name', '$email', '$address', '$dob' )";
        $result = $connection->query($query);
        if(!$result){
            die("Query failed");
        }
        header('location:../index.php');
        }  
    }
?>
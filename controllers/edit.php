<?php include('../configs/dbConfig.php')?>
<?php include('../views/update.php')?>
<?php
if(isset($_POST['update_button'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $query = "UPDATE user set name = '$name', email = '$email', address = '$address', dob = '$dob' WHERE id=$id";       
    $result = $connection->query($query);
        if(!$result){
            header('location:../views/update.php?message=All fields are required');
            die("Query invalid");
        }
        header('location:../index.php');
}
?>
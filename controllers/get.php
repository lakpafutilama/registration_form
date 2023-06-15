<?php include('configs/dbConfig.php')?>

<?php
    $query = 'SELECT * FROM user';
    $result = $connection->query($query);
    if(!$result){
        die("invalid query");
    }
?>
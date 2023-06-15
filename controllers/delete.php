<?php include('../configs/dbConfig.php')?>

<?php
if(isset($_GET['id'])){
        $id = $_GET['id'];
        echo $id;
        $query = "DELETE FROM user WHERE id=$id";
        $result = $connection->query($query);
        if(!$result){
            die("Query invalid");
        }
        
        header('location:../index.php');
}
?>
<?php include('../helpers/footer.php')?>
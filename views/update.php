<?php include('../configs/dbConfig.php');?>
<?php include('../helpers/header.php');?>

<form action="/project/controllers/edit.php" method="post">
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query1 = "SELECT * FROM user WHERE id=$id";
    $response = $connection->query($query1);
    if(!$response){
        die("Query invalid");
    }
    $row = $response->fetch_assoc();
}
?>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Id</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="id" value=<?php echo $id?> readonly>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="name" value=<?php echo $row['name']?>>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="email" value=<?php echo $row['email']?>>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Address</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="address" value=<?php echo $row['address']?>>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">DOB</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="dob" value=<?php echo $row['dob']?>>
        </div>
    </div>
    <div class="row mb-3">                
        <div class="offset-sm-3 col-sm-3 d-grid">
            <button type="submit" class="btn btn-success" name="update_button" onclick="return alert('Updated successfully!!!')">Update</button>
        </div>
        <div class="col-sm-3 d-grid">
            <a class="btn btn-secondary" href="/project/index.php" onclick="return confirm('Do you want to cancel the edit?')" role="button">Cancel</a>
        </div>
    </div>
</form>
<?php include('../helpers/footer.php');?>    
<?php include('controllers/get.php');?>
<?php include('helpers/header.php');?>

<div class="row">                
    <div class="col-mb-6">
        <a class="btn btn-success" href="/project/controllers/post.php" role="button">Add User</a>
    </div>
    <div class="col" style="text-align:right;">
        <label class="col mb-6">Search Name</label>
    </div>
    <div class="col-sm-2">
        <input type="text" class="form-control" name="search_name" value="">
    </div>
</div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>ADDRESS</th>
                <th>DOB</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = $result->fetch_assoc()){
                echo "
                <tr>
                <td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[email]</td>
                <td>$row[address]</td>
                <td>$row[dob]</td>
                <td>
                    <a class='btn btn-primary btn-sm' href='/project/controllers/edit.php?id=$row[id]'>Edit</a>
                    <a class='btn btn-danger btn-sm' href='/project/controllers/delete.php?id=$row[id]' onclick=\"return confirm('Do you want to delete the data?');\">Delete</a>
                </td>
                </tr>   
                ";
            }
            ?>               
        </tbody>
    </table>
<?php include('helpers/footer.php');?>
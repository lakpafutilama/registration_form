<?php include('../helpers/header.php');?>
<form action="/project/controllers/post.php" method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">DOB</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" name="dob" value="">
                </div>
            </div>
            <div class="row mb-3">                
                <div class="offset-sm-3 col-sm-3 d-grid">
                   <input type="submit" class="btn btn-success" name="add_button" onclick="return alert('Successfully added!!!')" value="Add">
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-secondary" onclick="return confirm('Do you want to cancel the registration?')" href="/project/index.php" role="button">Cancel</a>
                </div>
                <div class="alert alert-warning" role="alert">
                <?php
                    if(isset($_GET['message'])){
                        echo $_GET['message'];
                    }
                ?>
                </div>
            </div>
        </form>
<?php include('../helpers/footer.php');?>    
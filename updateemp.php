<?php

    include_once('functions.php');

    $updateempdata = new DB_ple();

    if (isset($_POST['update'])) {

        $userid = $_GET['emp_id']; 
        $emp_firstname = $_POST['emp_firstname'];
        $emp_lastname = $_POST['emp_lastname'];
        $emp_email = $_POST['emp_email'];
        $emp_phone = $_POST['emp_phone'];
        $emp_address = $_POST['emp_address'];
        $prefix_id = $_POST['prefix_id'];

        $sql = $updateempdata->updateemp($emp_firstname, $emp_lastname, $emp_email, $emp_phone, $emp_address, $prefix_id);
        
        if ($sql){
            echo "<script>alert('Updated Successfully!');</script>";
            echo "<script>window.location.href='fromemp.php'</script>";
        } else {
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='updateemp.php'</script>";
        }
    }

?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updateemp Page</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <a href="fromemp.php" class="btn btn-primary">Go back</a> 
        <hr>
        <h1 class="mt-5">Updateemp Page</h1>
        <hr>
        <?php

             $userid = $_GET['emp_id'];  
             $updateempuser = new DB_ple();
             $sql = $updateempuser->fetchemponerecord($userid);
            while($row = mysqli_fetch_array($sql)) {
    ?>

    <form action="" method="post">
            <div class="mb-3">
                <label for="emp_firstname" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" name="emp_firstname" 
                    value="<?php echo $row['emp_firstname']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="emp_lastname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" name="emp_lastname" 
                    value="<?php echo $row['emp_lastname']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="emp_email">อีเมล</label>
                <input type="email" class="form-control" name="emp_email" 
                    value="<?php echo $row['emp_email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="emp_phone">โทรศัพท์</label>
                <input type="text" class="form-control" name="emp_phone" 
                    value="<?php echo $row['emp_phone']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="emp_address">ที่อยู่</label>
                <textarea name="emp_address" cols="30" rows="10" class="form-control" required><?php echo $row
                ['emp_address']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="prefix_id">คำนำหน้า</label>
                <input type="text" class="form-control" name="prefix_id" 
                    value="<?php echo $row['prefix_id']; ?>" required>
            <?php } ?>
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </form>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
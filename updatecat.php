<?php

    include_once('functions.php');

    $updatecatdata = new DB_cat();

    if (isset($_POST['update'])) {

        $userid = $_GET['category_id']; 
        $category_name = $_POST['category_name'];

        $sql = $updatecatdata->updatecat($category_name);
        
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
    <title>Updatecat Page</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <a href="fromcat.php" class="btn btn-primary">Go back</a> 
        <hr>
        <h1 class="mt-5">Updatecat Page</h1>
        <hr>
        <?php

             $userid = $_GET['category_id'];  
             $updatecatuser = new DB_cat();
             $sql = $updatecatuser->fetchcatonerecord($userid);
            while($row = mysqli_fetch_array($sql)) {
    ?>

    <form action="" method="post">
            <div class="mb-3">
                <label for="category_name" class="form-label">ชื่อหมวด</label>
                <input type="text" class="form-control" name="category_name" 
                    value="<?php echo $row['category_name']; ?>" required>
            <?php } ?><p>
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </form>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
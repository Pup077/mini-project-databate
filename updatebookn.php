<?php

    include_once('functions.php');

    $updatebnkdata = new DB_bnk();

    if (isset($_POST['update'])) {

        $userid = $_GET['book_name_id']; 
        $book_name = $_POST['book_name'];
        $book_unit_id = $_POST['book_unit_id'];
        $category_id = $_POST['category_id'];

        $sql = $updatebnkdata->updatebnk($book_name, $book_unit_id, $category_id);
        
        if ($sql){
            echo "<script>alert('Updated Successfully!');</script>";
            echo "<script>window.location.href='from.php'</script>";
        } else {
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='update.php'</script>";
        }
    }

?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updatebookname Page</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

    <div class="container"> 
        <a href="frombookn.php" class="btn btn-primary">Go back</a>
        <hr>
        <h1 class="mt-5">Updatebookname Page</h1>
        <hr>
        <?php

             $userid = $_GET['book_name_id'];  
             $updatebnkuser = new DB_bnk();
             $sql = $updatebnkuser->fetchbnkonerecord($userid);
            while($row = mysqli_fetch_array($sql)) {
    ?>

    <form action="" method="post">
            <div class="mb-3">
                <label for="book_name" class="form-label">ชื่อหนังสือ</label>
                <input type="text" class="form-control" name="book_name" 
                    value="<?php echo $row['book_name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="book_unit_id" class="form-label">จำนวนหนังสือ</label>
                <input type="text" class="form-control" name="book_unit_id" 
                    value="<?php echo $row['book_unit_id']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="category_id">เลขคลังสินค้า</label>
                <input type="text" class="form-control" name="category_id" 
                    value="<?php echo $row['category_id']; ?>" required>
            </div>
            <?php } ?>
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </form>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
<?php

    include_once('functions.php');

    $updateoffdata = new DB_elp();

    if (isset($_POST['update'])) {

        $userid = $_GET['offer_price_id ']; 
        $offer_name = $_POST['offer_name'];
        $offer_adderss = $_POST['offer_adderss'];
        $offer_date = $_POST['offer_date'];
        $offer_amount = $_POST['offer_amount'];
        $offer_note = $_POST['offer_note'];
        $offer_deadline = $_POST['offer_deadline'];
        $book_name_id = $_POST['book_name_id'];

        $sql = $updateoffdata->updateoff($offer_name, $offer_adderss, $offer_date, $offer_amount, $offer_note, $offer_deadline, $book_name_id);
        
        if ($sql){
            echo "<script>alert('Updated Successfully!');</script>";
            echo "<script>window.location.href='fromoff.php'</script>";
        } else {
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='updateoff.php'</script>";
        }
    }

?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updateoff Page</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

    <div class="container"> 
        <a href="fromoff.php" class="btn btn-primary">Go back</a>
        <hr>
        <h1 class="mt-5">Updateoff Page</h1>
        <hr>
        <?php

             $userid = $_GET['offer_price_id'];  
             $updateoffuser = new DB_elp();
             $sql = $updateoffuser->fetchoffonerecord($userid);
            while($row = mysqli_fetch_array($sql)) {
    ?>

    <form action="" method="post">
            <div class="mb-3">
                <label for="offer_name" class="form-label">ชื่อบริษัท</label>
                <input type="text" class="form-control" name="offer_name" 
                    value="<?php echo $row['offer_name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="offer_adderss" class="form-label">ที่อยู่</label>
                <input type="text" class="form-control" name="offer_adderss" 
                    value="<?php echo $row['offer_adderss']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="offer_date">เวลาที่ส่ง</label>
                <input type="text" class="form-control" name="offer_date" 
                    value="<?php echo $row['offer_date']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="offer_amount">จำนวนที่ส่ง</label>
                <input type="text" class="form-control" name="offer_amount" 
                    value="<?php echo $row['offer_amount']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="offer_note">บันทึก</label>
                <input type="text" class="form-control" name="offer_note" 
                    value="<?php echo $row['offer_note']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="offer_deadline">เวลาสิ้นสุด</label>
                <input type="text" class="form-control" name="offer_deadline" 
                    value="<?php echo $row['offer_deadline']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="book_name_id">เลขชื่อหนังสือ</label>
                <input type="text" class="form-control" name="book_name_id" 
                    value="<?php echo $row['book_name_id']; ?>" required>
            <?php } ?>
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </form>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
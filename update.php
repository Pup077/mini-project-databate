<?php

    include_once('functions.php'); //เอาคำสั่งจากfunction

    $updatedata = new DB_con(); //ตั้งตัวแปรใหม่

    if (isset($_POST['update'])) { //รับค่าจากปุ่ม

        $userid = $_GET['borrow_id']; 
        $bor_want_date = $_POST['bor_want_date'];
        $bor_date = $_POST['bor_date'];
        $bor_back = $_POST['bor_back'];
        $bor_amount = $_POST['bor_amount'];
        $emp_id = $_POST['emp_id'];
        $person_id = $_POST['person_id'];
        $bookasset_id = $_POST['bookasset_id'];
        $price_id = $_POST['price_id'];

        $sql = $updatedata->update($bor_want_date, $bor_date, $bor_back, $bor_amount, $emp_id, $person_id, $bookasset_id, $price_id ,$userid); //เรียกฟังคชั่นและส่งค่า
        
        if ($sql){ //เช็คความถูกต้อง
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
    <title>Update Page</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

    <div class="container"> 
        <a href="index.php" class="btn btn-primary">Go back</a>
        <hr>
        <h1 class="mt-5">Update Page</h1>
        <hr>
        <?php

             $userid = $_GET['borrow_id'];  
             $updateuser = new DB_con();
             $sql = $updateuser->fetchonerecord($userid); //รับข้อมูลและหาuserนั้นๆ
            while($row = mysqli_fetch_array($sql)) {
    ?>

    <form action="" method="post">
            <div class="mb-3">
                <label for="bor_want_date" class="form-label">เวลาที่ต้องการ</label>
                <input type="text" class="form-control" name="bor_want_date" 
                    value="<?php echo $row['bor_want_date']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="bor_date" class="form-label">เวลาเช่า</label>
                <input type="text" class="form-control" name="bor_date" 
                    value="<?php echo $row['bor_date']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="bor_back">เวลาคืน</label>
                <input type="text" class="form-control" name="bor_back" 
                    value="<?php echo $row['bor_back']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="bor_amount">จำนวนที่เช่า</label>
                <input type="text" class="form-control" name="bor_amount" 
                    value="<?php echo $row['bor_amount']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="emp_id">เลขพนักงาน</label>
                <input type="text" class="form-control" name="emp_id" 
                    value="<?php echo $row['emp_id']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="person_id">เลขคนเช่า</label>
                <input type="text" class="form-control" name="person_id" 
                    value="<?php echo $row['person_id']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="bookasset_id">เลขหนังสือ</label>
                <input type="text" class="form-control" name="bookasset_id" 
                    value="<?php echo $row['bookasset_id']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="price_id">หน่วยราคา</label>
                <input type="text" class="form-control" name="price_id" 
                    value="<?php echo $row['price_id']; ?>" required>
            </div>
            <?php } ?>
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </form>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
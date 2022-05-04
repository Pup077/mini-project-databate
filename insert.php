<?php

    include_once('functions.php'); //เอาคำสั่งจากfunction

    $insertdata = new DB_con(); //ตั้งตัวแปรใหม่

    if (isset($_POST['insert'])) { //เช็ตเมื่อกดปุ่ม รับค่าเก็บไว้ในตัวแปล
        $bor_want_date = $_POST['bor_want_date'];
        $bor_date = $_POST['bor_date'];
        $bor_back = $_POST['bor_back'];
        $bor_amount = $_POST['bor_amount'];
        $emp_id = $_POST['emp_id'];
        $person_id = $_POST['person_id'];
        $bookasset_id = $_POST['bookasset_id'];
        $price_id = $_POST['price_id'];

        $sql = $insertdata->insert($bor_want_date, $bor_date, $bor_back, $bor_amount, $emp_id, $person_id, $bookasset_id, $price_id); //เรียกคำสั่งและส่งค่า

        if ($sql){ //เช็คความถูกต้อง
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='from.php'</script>";
        } else {
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body bgcolor="#33CCCC" text="#CC99CC" background="/SWU/img/G4.jpg">

    <div class="container">
        <a href="index.php" class="btn btn-primary">Go back</a>
        <hr>
        <h1 class="mt-5 text-primary">เช่าหนังสือ</h1>
        <hr>
        <form action="" method="post">
                    <div class="mb-3">
                <label for="bor_want_date" class="form-label ">เวลาที่ต้องการ</label>
                <input type="text" class="form-control" name="bor_want_date" required>
            </div>
            <div class="mb-3">
                <label for="bor_date" class="form-label ">เวลาเช่า</label>
                <input type="text" class="form-control" name="bor_date" required>
            </div>
            <div class="mb-3">
                <label for="bor_back">เวลาคืน</label>
                <input type="text" class="form-control" name="bor_back" required>
            </div>
            <div class="mb-3">
                <label for="bor_amount">จำนวนที่เช่า</label>
                <input type="text" class="form-control" name="bor_amount" required>
            </div>
            <div class="mb-3">
                <label for="emp_id">เลขพนักงาน</label>
                <input type="text" class="form-control" name="emp_id" required>
            </div>
            <div class="mb-3">
                <label for="person_id">เลขคนเช่า</label>
                <input type="text" class="form-control" name="person_id" required>
            </div>
            <div class="mb-3">
                <label for="bookasset_id">เลขหนังสือ</label>
                <input type="text" class="form-control" name="bookasset_id" required>
            </div>
            <div class="mb-3">
                <label for="price_id">หน่วยราคา</label>
                <input type="text" class="form-control" name="price_id" required>
            </div>
            <button type="submit" name="insert" class="btn btn-success">Insert</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
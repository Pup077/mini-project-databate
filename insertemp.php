<?php

    include_once('functions.php');

    $insertempdata = new DB_ple();

    if (isset($_POST['insert'])) {
        $emp_firstname = $_POST['emp_firstname'];
        $emp_lastname = $_POST['emp_lastname'];
        $emp_email = $_POST['emp_email'];
        $emp_phone = $_POST['emp_phone'];
        $emp_address = $_POST['emp_address'];
        $prefix_id = $_POST['prefix_id'];

        $sql = $insertempdata->insertemp($emp_firstname, $emp_lastname, $emp_email, $emp_phone, $emp_address, $prefix_id);

        if ($sql){
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='fromemp.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='insertemp.php'</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertemp Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body bgcolor="#33CCCC" text="#CC99CC" background="/SWU/img/G4.jpg">

    <div class="container">
        <a href="fromemp.php" class="btn btn-primary">Go back</a>
        <hr>
        <h1 class="mt-5">Insertemp Page</h1>
        <hr>
        <form action="" method="post">
                    <div class="mb-3">
                <label for="emp_firstname" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" name="emp_firstname" required>
            </div>
            <div class="mb-3">
                <label for="emp_lastname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" name="emp_lastname" required>
            </div>
            <div class="mb-3">
                <label for="emp_email">อีเมล</label>
                <input type="email" class="form-control" name="emp_email" required>
            </div>
            <div class="mb-3">
                <label for="emp_phone">โทรศัพท์</label>
                <input type="text" class="form-control" name="emp_phone" required>
            </div>
            <div class="mb-3">
                <label for="emp_address">ที่อยู่</label>
                <textarea name="address" cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="prefix_id">คำนำหน้า</label>
                <input type="text" class="form-control" name="prefix_id" required>
            <button type="submit" name="insert" class="btn btn-success">Insert</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
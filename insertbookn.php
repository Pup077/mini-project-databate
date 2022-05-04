<?php

    include_once('functions.php');

    $insertbnkdata = new DB_bnk();

    if (isset($_POST['insert'])) {
        $book_name = $_POST['book_name'];
        $book_unit_id  = $_POST['book_unit_id'];
        $category_id = $_POST['category_id'];

        $sql = $insertbnkdata->insertbnk($book_name, $book_unit_id, $category_id);

        if ($sql){
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
    <title>Insertbookname Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body bgcolor="#33CCCC" text="#CC99CC" background="/SWU/img/G4.jpg">

    <div class="container">
        <a href="frombookn.php" class="btn btn-primary">Go back</a>
        <hr>
        <h1 class="mt-5">Insertbookname Page</h1>
        <hr>
        <form action="" method="post">
                    <div class="mb-3">
                <label for="book_name" class="form-label">ชื่อหนังสือ</label>
                <input type="text" class="form-control" name="book_name" required>
            </div>
            <div class="mb-3">
                <label for="book_unit_id" class="form-label">จำนวน</label>
                <input type="text" class="form-control" name="book_unit_id" required>
            </div>
            <div class="mb-3">
                <label for="category_id">เลขคลัง</label>
                <input type="text" class="form-control" name="category_id" required>
            </div>
            <button type="submit" name="insert" class="btn btn-success">Insert</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
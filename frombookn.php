<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>frombookname Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body  background="/book/img/G8.jpg">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <a href="#" class="navbar-brand">ปั๊บเช่าหนังสือ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="insert.php" class="nav-link">เช่าหนังสือ</a>
                    </li>
                    <li class="nav-item">
                        <a href="from.php" class="nav-link">ดูข้อมูลการเช่าหนังสือ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenu" data-toggle="dropdown">ตัวเลือก</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenu">
                            <li><a href="fromemp.php" class="dropdown-item">ข้อมูลบุคคล</a></li>
                            <li><a href="fromoff.php" class="dropdown-item">ข้อมูลบริษัท</a></li>
                            <li><a href="frombookn.php" class="dropdown-item">ข้อมูลหนังสือ</a></li>
                            <li><a href="fromcat.php" class="dropdown-item">ระเภทหนังสือ</a></li>
                            <li><a href="fromdog.php" class="dropdown-item">สถานะหนังสือ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    
    <div class="container">
    <a href="index.php" class="btn btn-primary">Go back</a>
    <hr>
    <h1 class="mt-5 text-info">ชื่อหนังสือ</h1>    
    <table id="mytable" class="table table-bordered table-striped table-hover table-secondary">
        <thead>
            <th>#</th>
            <th class="bg-info text-white">bookname</th>
            <th class="bg-warning text-white">bookunitid</th>
            <th class="bg-success text-white">categoryid</th>
            <th class="bg-info text-white">Edit</th>
            <th class="bg-warning text-white">Delete</th>
            <a href="insertbookn.php" class="btn btn-success">เพึ่มหนังสือ</a><p>
        </thead>

        <tbody>
            <?php

                include_once('functions.php');
                $fetchbnkdata = new DB_bnk();
                $sql = $fetchbnkdata->fetchbnkdata();
                while($row = mysqli_fetch_array($sql)) {
                        
              ?>

                    <tr>
                        <td><?php echo $row['book_name_id']; ?></td>
                        <td><?php echo $row['book_name']; ?></td>
                        <td><?php echo $row['book_unit_id']; ?></td>
                        <td><?php echo $row['category_id']; ?></td>
                        <td><a href="updatebookn.php?book_name_id=<?php echo $row['book_name_id']; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="deletebookn.php?book_name_id=<?php echo $row['book_name_id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

              <?php


                    }
              ?>
        </tbody>
    </table>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
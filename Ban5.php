<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
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
    <h1 class="mt-5 text-info">ปั๊บเช่าหนังสือ</h1>
    <a href="insert.php" class="btn btn-success">เช่าหนังสือ</a> <a href="from.php" class="btn btn-success">ดูข้อมูลการเช่าหนังสือ</a>
    <hr>
    <table id="perid" class="table table-bordered table-striped table-hover table-dark">
        <thead>
            <th class="bg-warning text-white"><a href="fromemp.php">ข้อมูลบุคคล</th>
            <th><a href="fromoff.php">ข้อมูลบริษัท</th>
            <th class="bg-danger text-white"><a href="frombookn.php">ข้อมูลหนังสือ</th>
            <th><a href="fromcat.php">ประเภทหนังสือ</th>
            <th class="bg-success text-white"><a href="fromdog.php">สถานะหนังสือ</th>
        </thead>
    </table>
    </div>

    <img src="https://images-se-ed.com/ws/Storage/Originals/978616/081/9786160815203L.jpg?h=2b2f0cb936379bc573318e51294b6579" 
    width="25%" class="mx-auto d-block" alt="">
    <p><div class="row justify-content-center">
        <div class="col-5">
        <h4>รายละเอียด : จัดการฐานข้อมูลเซิร์ฟเวอร์ด้วย Transact-SQL</h4>
        การจัดการกับฐานข้อมูลเซิร์ฟเวอร์ จะต้องใช้โปรแกรม Transact-SQL ที่รวมเอาภาษา SQL ที่เป็นภาษากลางเข้าด้วยกัน และมีการทำงานทีละขั้นตอน คำสั่ง Transact SQL 
        ที่กล่าวในหนังสือนี้ เป็นส่วนที่ใช้บ่อยๆ ในระดับการทำงานพื้นฐาน ที่ทำงานกับฐานข้อมูลโดยตรง ยังไม่ครอบคลุมถึงการปรับแต่งความปลอดภัย หรือการกำหนดสิทธิผู้ใช้ 
        ถึงแม้ว่าคำสั่งในหนังสือนี้จะอ้างอิงตาม Microsoft SQL แต่สามารถใช้กับ MySQL ได้ ในการนำเสนอนอกจากคำอธิบายแล้ว ยังแสดงถึงการเขียนคำสั่ง 
        และรูปแสดงผลของคำสั่งนั้นๆ ด้วย


<h4>สารบัญ : จัดการฐานข้อมูลเซิร์ฟเวอร์ด้วย Transact-SQL</h4>
-บทที่ 1 การใช้คำสั่ง Transact-SQL
<br>-บทที่ 2 ชนิดข้อมูลและตัวแปร
<br>-บทที่ 3 ไวยากรณ์ Transact-SQL
<br>-บทที่ 4 การสร้างตารางใหม่และปรับปรุง
<br>-บทที่ 5 คำสั่ง SQL แบบเลือกข้อมูลการทำงาน
<br>-บทที่ 6 Join Table
<br>-บทที่ 7 การแต่งข้อมูลด้วยฟังก์ชั่น
<br>-บทที่ 8 ฟังก์ชั่นตอนที่ 1
<br>-บทที่ 9 ฟังก์ชั่นตอนที่ 2
<br>-บทที่ 10 การสร้าง ปรับปรุง View และ Procedure
<br>-บทที่ 11 การสร้างและปรับปรุงฟังก์ชั่น
<br>-บทที่ 12 การดูโครงสร้าง
<br>-บทที่ 13 การควบคุมเคอร์เซอร์เพื่อแสดงผล และการอ่านข้อมูลทีละข้อมูล
<br>-บทที่ 14 การตั้งค่าทำงาน
<br><a href="index.php" class="btn btn-primary">Go back</a>
</div>
</div></p>
    <p><h4 align = 'center' class="bg-info text-white">ร้านหนังสือเปิดบริการทุกวัน จันทร์-ศุกร์ เวลา 8.00-16.00 , วันเสาร์-อาทิตร์ เวลา 12.00-16.00</h4></p>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
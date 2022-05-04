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

    <img src="https://images-se-ed.com/ws/Storage/Originals/129487/773/1294877732426L.jpg?h=7c0e66b4d37444a6e21a38cdb2ce7f8f" 
    width="25%" class="mx-auto d-block" alt="">
    <p><div class="row justify-content-center">
        <div class="col-5">
        <h4>รายละเอียด : ตารางฝึกคัดอักษรเกาหลี</h4>
ฝึกคัดเพียงวันละ 1 หน้า ก็เก่งได้ ด้วยสมุดตารางฝึกคัดอักษรเกาหลีเล่มนี้

ฝึกคัดทั้งพยัญชนะและสระ พร้อมตัวอย่างลำดับการลากเส้น

ขนาดเล็ก พกพาสะดวก นำติดตัวไปฝึกคัดได้ทุกที่ ฝึกคัดทุวันให้จำได้ขึ้นใจ
<br><a href="index.php" class="btn btn-primary">Go back</a>
</div>
</div></p>
    <p><h4 align = 'center' class="bg-info text-white">ร้านหนังสือเปิดบริการทุกวัน จันทร์-ศุกร์ เวลา 8.00-16.00 , วันเสาร์-อาทิตร์ เวลา 12.00-16.00</h4></p>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
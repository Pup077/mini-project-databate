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
                        <a href="#" class="nav-link active" aria-current="page">Home</a>
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

    <P><div id="carouselExample" stlye="height :500px; overflow: hidden;" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/book/img/P1.jpg" width="100%" alt="">
            </div>
            <div class="carousel-item ">
                <img src="/book/img/P2.jpg" width="100%" alt="">
            </div>
            <div class="carousel-item ">
                <img src="/book/img/P3.jpg" width="100%" alt="">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div></P>

        <div class="row"> 
            <div class="col-md-4">
                <div class="card">
                    <img src="https://storage.naiin.com/system/application/bookstore/resource/product/202101/518570/1000238611_front_XXXL.jpg?imgname=%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%99%E0%B8%B4%E0%B8%A2%E0%B8%B2%E0%B8%A2%E0%B8%8D%E0%B8%B5%E0%B9%88%E0%B8%9B%E0%B8%B8%E0%B9%88%E0%B8%99-Japanese-Fairy-Tales" width="50%" alt="">
                    <div class="card-body">
                        <h5 class="card-title">เทพนิยายญี่ปุ่น</h5>
                        <p class="card-text">ราคา 242.25 ยาท</p>
                        <p class="card-text">หมวด : นิยาย</p>
                        <a href="Ban1.php" class="btn btn-primary">รายละเอียด</a>
                    </div>
               </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://storage.naiin.com/system/application/bookstore/resource/product/202104/525234/1000240709_front_XXXL.jpg?imgname=KAIJYU-No.-8-%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%A1-1" width="50%" alt="">
                    <div class="card-body">
                        <h5 class="card-title">KAL JYU NO.8</h5>
                        <p class="card-text">ราคา 95 บาท</p>
                        <p class="card-text">หมวด : การ์ตูน</p>
                        <a href="Ban2.php" class="btn btn-primary">รายละเอียด</a>
                    </div>
               </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://storage.naiin.com/system/application/bookstore/resource/product/202105/526656/1000241173_front_XXXL.jpg?imgname=%E0%B8%95%E0%B8%B4%E0%B8%A7%E0%B9%80%E0%B8%82%E0%B9%89%E0%B8%A1-%E0%B8%9B.6-%E0%B8%97%E0%B8%B8%E0%B8%81%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2-%E0%B8%9E%E0%B8%B4%E0%B8%8A%E0%B8%B4%E0%B8%95%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%AA%E0%B8%AD%E0%B8%9A%E0%B9%80%E0%B8%95%E0%B9%87%E0%B8%A1-100%-%E0%B8%97%E0%B8%B8%E0%B8%81%E0%B8%A0%E0%B8%B2%E0%B8%84%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99" width="50%" alt="">
                    <div class="card-body">
                        <h5 class="card-title">ติวเข้มป.6 ทุกวิชา</h5>
                        <p class="card-text">ราคา 221.10 บาท</p>
                        <p class="card-text">หมวด : การศึกษา</p>
                        <a href="Ban3.php" class="btn btn-primary">รายละเอียด</a>
                    </div>
               </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://images-se-ed.com/ws/Storage/Originals/978616/530/9786165303255L.jpg?h=0d68fefa0407ece09bf745abcdeed3f5" width="50%" alt="">
                    <div class="card-body">
                        <h5 class="card-title">อาหารว่าง</h5>
                        <p class="card-text">ราคา 190.00 บาท</p>
                        <p class="card-text">หมวด : ความรู้รอบตัว</p>
                        <a href="Ban4.php" class="btn btn-primary">รายละเอียด</a>
                    </div>
               </div>
            </div>
            <div class="col-md-4">
                <div class="card" >
                    <img src="https://images-se-ed.com/ws/Storage/Originals/978616/081/9786160815203L.jpg?h=2b2f0cb936379bc573318e51294b6579" width="50%" alt="">
                    <div class="card-body">
                        <h5 class="card-title">จัดการฐานข้อมูลเซิร์ฟเวอร์ด้วย Transact-SQL</h5>
                        <p class="card-text">ราคา 171.00 บาท</p>
                        <p class="card-text">หมวด : การศึกษา</p>
                        <a href="Ban5.php" class="btn btn-primary">รายละเอียด</a>
                    </div>
               </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://images-se-ed.com/ws/Storage/Originals/129487/773/1294877732426L.jpg?h=7c0e66b4d37444a6e21a38cdb2ce7f8f" width="50%" alt="">
                    <div class="card-body">
                        <h5 class="card-title">ตารางฝึกคัดอักษรเกาหลี</h5>
                        <p class="card-text">ราคา 19.00 บาท</p>
                        <p class="card-text">หมวด : การศึกษา</p>
                        <a href="Ban6.php" class="btn btn-primary">รายละเอียด</a>
                    </div>
               </div>
            </div>

    <p><h4 align = 'center' class="bg-info text-white">ร้านหนังสือเปิดบริการทุกวัน จันทร์-ศุกร์ เวลา 8.00-16.00 , วันเสาร์-อาทิตร์ เวลา 12.00-16.00</h4></p>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
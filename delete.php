<?php

    include_once('functions.php'); //เอาคำสั่งจากfunction

    if (isset($_GET['borrow_id'])) { //รับค่า user
        $userid = $_GET['borrow_id']; 
        $deletedata = new DB_con(); //ตั้งตัวแปรใหม่
        $sql = $deletedata->delete($userid); //เข้าถึงฟังกชั่น delet และลบข้อมูล

        if ($sql){ //เช็คความถูกต้อง
            echo "<script>alert('Record Deleted Successfully!');</script>";
            echo "<script>window.location.href='from.php'</script>";
        }
    }

?>
<?php

    include_once('functions.php');

    if (isset($_GET['book_name_id'])) {
        $userid = $_GET['book_name_id'];
        $deletebnkdata = new DB_bnk();
        $sql = $deletebnkdata->deletebnk($userid);

        if ($sql){
            echo "<script>alert('Record Deleted Successfully!');</script>";
            echo "<script>window.location.href='frombookn.php'</script>";
        }
    }

?>
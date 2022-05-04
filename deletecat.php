<?php

    include_once('functions.php');

    if (isset($_GET['category_id'])) {
        $userid = $_GET['category_id'];
        $deletecatdata = new DB_cat();
        $sql = $deletecatdata->deletecat($userid);

        if ($sql){
            echo "<script>alert('Record Deleted Successfully!');</script>";
            echo "<script>window.location.href='fromcat.php'</script>";
        }
    }

?>
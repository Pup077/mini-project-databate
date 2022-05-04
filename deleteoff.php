<?php

    include_once('functions.php');

    if (isset($_GET['offer_price_id'])) {
        $userid = $_GET['offer_price_id'];
        $deleteoffdata = new DB_elp();
        $sql = $deleteoffdata->deleteoff($userid);

        if ($sql){
            echo "<script>alert('Record Deleted Successfully!');</script>";
            echo "<script>window.location.href='fromoff.php'</script>";
        }
    }

?>
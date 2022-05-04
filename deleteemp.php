<?php

    include_once('functions.php');

    if (isset($_GET['emp_id'])) {
        $userid = $_GET['emp_id'];
        $deleteempdata = new DB_ple();
        $sql = $deleteempdata->deleteemp($userid);

        if ($sql){
            echo "<script>alert('Record Deleted Successfully!');</script>";
            echo "<script>window.location.href='fromemp.php'</script>";
        }
    }

?>
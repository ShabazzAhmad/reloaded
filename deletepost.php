<?php

    require_once 'db/conn.php';
    if (!isset($_POST['delete'])) {
        include 'includes/erromessage.php';
    } else {
        $id = $_POST['id'];
        $calldelete = $crud->deleterecord($id);
        echo "<script>alert('deleted')</script>";
        if (!$calldelete) {
            include 'includes/erromessage.php';
        } else {
            include 'includes/successmessage.php';
            header('location:viewall.php');
        }
        
        // echo $id;
    }
    
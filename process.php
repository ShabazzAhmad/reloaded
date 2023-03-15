<?php
    require_once 'db/conn.php';

    if (!isset($_POST['submit'])) {
        // echo 'error';
        include 'includes/erromessage.php';
    } else {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        // $fname = $_POST['firstname'];
        //  = $_POST['first'];
        // echo $fname;
        // echo $lname;
        // echo $phone;
        // echo $email;
        // echo $gender;
        $isSuccess = $crud->insertrec($fname,$lname,$phone,$email,$gender);
        if (!$isSuccess) {
            // echo 'erro'
            include 'includes/erromessage.php';
        } else {
            // header('location:attend.php');
            include 'includes/successmessage.php';
            header('location:viewall.php');
        }
        
    }
    
?>
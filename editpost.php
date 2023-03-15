<?php

    require_once 'db/conn.php';


    if (!isset($_POST['submit'])) {

            echo 'not';
        // include 'includes/erromessage.php';
    } else {
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        $result = $crud->editrecord($id, $fname, $lname, $phone, $email, $gender);
        if (!$result) {
            // echo 'not';
            // include 'includes/erromessage.php';
        } else {
            include 'includes/successmessage.php';
            header('location:viewall.php');
        }
         
    }
   
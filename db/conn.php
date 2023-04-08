<?php

//MySQL DB Name			MySQL User Name ||MySQL Password	MySQL Host Name	PHPMyAdmin
//epiz_33814775_reloaded_db	epiz_33814775	(Your vPanel Password)	sql311.epizy.com	






    $host = 'localhost';
    $db = 'reloaded_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';


    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new pdo($dsn,$user,$pass);
        // echo 'Good';
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage());
    }



    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud ($pdo);
    $vuser = new user ($pdo);

//   $vuser->insertuser("Admin", "password");
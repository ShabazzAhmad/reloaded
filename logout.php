<?php
    include_once 'includes/session.php';
    
    // destroy the session
    session_destroy();
    header('location:login.php');
?>
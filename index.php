<?php
    $title = 'Reloaded-Home';
    $titleI = 'active';
    include_once 'includes/header.php';
    include_once 'db/conn.php';
    echo '<b><center>' .$title. '</b></center>';
?>


<?php
    // $result = $vuser->getuser($username, $password);
    if (isset($_SESSION['userid'])) {
        //  = $username;
?>
        <div class="alert alert-success">
            <h1>Hello! <?php echo $_SESSION['username']; ?> 
        </h1>
        </div>
<?php  } ?>







<?php
    include_once 'includes/footer.php';
?>
<?php
    $title = 'Reloaded-Login';
    $login = 'active';
    include_once 'includes/header.php';
    require_once 'db/conn.php';
    echo '<b><center>' .$title. '</b></center>';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];
        $new_password = md5($password.$username);
        
        $result = $vuser->getuser($username, $password);
        if (!$result) {
            echo '<div class="alert alert-danger">username or password not correct</div>';
        } else {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $result['id'];
            header('location:index.php');
        }
        
        
    }
?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <table class="table-sm">
        <tr>
            <td><label for="username">Username: *</label></td>
            <td><input type="text" name="username" id="username" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>"></td>
        </tr>
        <tr>
            <td><label for="password">Password: *</label></td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
    </table><br>
    <input type="submit" value="login">
    <a href="#">Forget Password</a>
</form>
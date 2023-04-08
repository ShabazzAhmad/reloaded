<?php
    $title = 'Reloaded-Login';
    $login = 'active';
    include_once 'includes/header.php';
    require_once 'db/conn.php';
    echo '<b><center>' .$title. '</b></center>';
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];
        $new_password = md5($password.$username);
        $result = $vuser->getuser($username, $new_password);
        if (!$result) {
            echo '<div class="alert alert-danger">Username or password not correct</div>';
        } else {
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $result['id'];
            header('location:index.php');
        }
        
    } else {
        echo '<div class="alert alert-danger">Form was not submit</div>';
    }
        
?>

<?php if ($_SERVER['REQUEST_METHOD'] == 'POST')  echo $_POST['username']; ?>
<form action="<?php htmlentities($_SERVER['PHP_SELF'])  ?>" method="post">
    <h1>Login</h1>
    <table>
        <tr>
            <td>Username: </td>
            <td><input type="text" name="username" id="" placeholder="Enter email Address" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST')  echo $_POST['username']; ?>"></td>
        </tr>
        <tr>
            <td>password: </td>
            <td><input type="password" name="password" id="" placeholder="Enter Password"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Login" name="submit"></td>
            <td><a href="#">Forgot Password</a></td>
        </tr>
    </table>
    
    
</form>
<?php
    $title = 'Reloaded-Edit Record';
    include_once 'includes/header.php';
    require_once 'db/conn.php';

    if (!isset($_GET['id'])) {
        include 'includes/erromessage.php';
    } else {
        $id = $_GET['id'];
        $result = $crud->getone($id);
        echo '<b><center>' .$title.' for '. $result['firstname'].' '.$result['lastname'].'</b></center>';
?>

    <form action="editpost.php" method="post">
        <h3>Edit Record</h3>
        <input type="hidden" name="id" value="<?php echo $result['id']; ?>" id="" placeholder="ID">
        <input type="text" name="fname" value="<?php echo $result['firstname']; ?>" id="" placeholder="First Name">
        <input type="text" name="lname" value="<?php echo $result['lastname']; ?>" id="" placeholder="Last Name">
        <input type="text" name="phone" value="<?php echo $result['phone']; ?>" id="" placeholder="Phone">
        <input type="text" name="email" value="<?php echo $result['email']; ?>" id="" placeholder="Email">
        <select name="gender" value="<?php echo $result['gender']; ?>" id="">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Trans">Trans</option>
        </select>
        <input type="submit" value="submit" name="submit">
    </form>
<?php } ?>
<?php
    include_once 'includes/footer.php';
?>
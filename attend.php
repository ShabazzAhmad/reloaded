<?php
    $title = 'Reloaded-Attend';
    $titleII = 'active';
    include_once 'includes/header.php';
    require_once 'db/conn.php';
    echo '<b><center>' .$title. '</b></center>';
?>
<form action="process.php" method="post">
    <h1>APPLY</h1>
    <input type="text" name="fname" placeholder="First Name" id="">
    <input type="text" name="lname" placeholder="Last Name" id="">
    <input type="text" name="phone" placeholder="Phone Number" id="">
    <input type="text" name="email" placeholder="Email" id="">
    <select name="gender" id="">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Trans">Trans</option>
    </select>
    <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT">
</form>


<?php
    include_once 'includes/footer.php';
?>
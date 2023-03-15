<?php 
    $title = 'Reloaded-Detail Record';

    require_once 'db/conn.php';
    include_once 'includes/header.php';
    
    
    if (!isset($_GET['id'])) {
        echo 'erro';
    } else {
        $id = $_GET['id'];
        $result = $crud->getone($id);
        echo '<b><center>' .$title.' for '. $result['firstname'].' '.$result['lastname'].'</b></center>';
?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">NAME: <?php echo $result['firstname'].' '.$result['lastname']; ?></h5>
            <h6 class="card-title">ID#: <?php echo $result['id']; ?></h6>
            <h6 class="card-title">GENDER: <?php echo $result['gender']; ?></h6>
            <p class="card-text">EMAIL: <?php echo $result['email']; ?></p>
            <p class="card-text">PHONE: <?php echo $result['phone']; ?></p>
        </div>
    </div>
<?php } ?>
<?php 
    include_once 'includes/footer.php';
?>

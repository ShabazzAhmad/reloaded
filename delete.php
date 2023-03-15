<?php
    $title = 'Reloaded-Delete Record';
    include_once 'includes/header.php';
    require_once 'db/conn.php';
    echo '<b><center>' .$title. '</b></center>';

    //calling delete function
    //$predelete = $crud->deleterecord($id);


    if (!isset($_GET['id'])) {
        include 'includes/erromessage.php';
    } else {
        $id = $_GET['id'];

        $predelete = $crud->getone($id);
    // deleterecord($id)
?>

    <form action="deletepost.php" method="post">
    <div class="card border-danger mb-3">
        <div class="card-body">
            <h6 class="card-title text-danger">You are about to delete a record</h6>
            <h4 class="card-title">NAME: 
                <?php echo $predelete['firstname'].' '.$predelete['lastname']; ?>
                <input type="hidden" name="fname" value="<?php echo $predelete['firstname']; ?>">
                <input type="hidden" name="lname" value="<?php echo $predelete['lastname']; ?>">
            </h4>
            <h6 class="card-title">ID#: 
                <?php echo $predelete['id']; ?>
                <input type="hidden" name="id" value="<?php echo $predelete['id']; ?>">
            </h6>
            <h6 class="card-title">GENDER: 
                <?php echo $predelete['gender']; ?>
                <input type="hidden" name="gender" value="<?php echo $predelete['gender']; ?>">
            </h6>
            <p class="card-text">EMAIL: 
                <?php echo $predelete['email']; ?>
                <input type="hidden" name="email" value="<?php echo $predelete['email']; ?>">
            </p>
            <p class="card-text">PHONE: 
                <?php echo $predelete['phone']; ?>
                <input type="hidden" name="phone" value="<?php echo $predelete['phone']; ?>">
            </p>
        </div>
        <input onclick="return confirm('Are you sure you want to delete this');" type="submit" value="Delete" name="delete" class="btn btn-danger">
        <a href="viewall.php" class="btn btn-primary">cancel</a>
    </div>
    </form>    
<?php } ?>
<script></script>
<?php
    include_once 'includes/footer.php';
?>


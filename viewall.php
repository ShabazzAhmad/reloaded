<?php
    $title = 'Reloaded-Full Records';
    $titleIII = 'active';
    include_once 'includes/header.php';
    require_once 'db/conn.php';
    echo '<b><center>' .$title. '</b></center>';
    $result = $crud->getall();
?>
<table class="table">
    <tr>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>GENDER</th>
        <th>ACTION</th>
    </tr>
<?php while($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>    
    <tr>
        <td><?php echo $r['id']; ?></td>
        <td><?php echo $r['firstname']; ?></td>
        <td><?php echo $r['lastname']; ?></td>
        <td><?php echo $r['gender']; ?></td>
        <td>
            <a href="viewone.php?id=<?php echo $r['id']; ?>" class="btn btn-primary">Details</a>
            <a href="edit.php?id=<?php echo $r['id']; ?>" class="btn btn-warning">Edit</a>
            <a href="delete.php?id=<?php echo $r['id']; ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    <?php } ?>  
</table>
<?php
    include_once 'includes/footer.php';
?>
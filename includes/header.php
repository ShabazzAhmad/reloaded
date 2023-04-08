<?php
  include_once 'includes/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon link here-->
    <link rel="shortcut icon" href="photo/favicon.png" type="image/x-icon">

    <!-- bootstrap link -->
    <link rel="stylesheet" href="../../bootstrap files/bootstrap-css.css">
    <title><?php echo $title; ?></title>
</head>
<body class="container">

    <!-- Nav=I] -->
    
  <!--Navigation-->
<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
  <!--<div class="container-fluid">-->
    <a href="index.php" class="navbar-brand"><img src="photo/logo.png" class="img-fluid"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarnav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>

    </button>
    <div class="collapse navbar-collapse" id="navbarnav">
      <ul class="navbar-nav">
        <li class="nav-item <?php echo $titleI; ?>">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item <?php echo $titleII; ?>">
          <a href="attend.php" class="nav-link">Registry</a>
        </li>
        <li class="nav-item <?php echo $titleIII; ?>">
          <a href="viewall.php" class="nav-link">View Full Record</a>
        </li>
        <!-- 
        <li class="nav-item <?php echo $titleIV; ?>"> 
          <a href="team.html" class="nav-link">Team</a>
        </li>
        <li class="nav-item <?php echo $titleV; ?>">
          <a href="contactus.html" class="nav-link">Contact Us</a>
        </li>
      </ul>
      <form action="" class="form-inline ml-auto">
        <input type="text" class="form-control m-2" placeholder="search...">
        <button class="btn btn-outline-primary">Search</button>
      </form>-->
      <div class="navbar-nav ml-auto">
<?php
    if (!isset($_SESSION['username'])) {
?>  
      <a href="login.php" class="nav-link">Login <span class="sr-only">(current)</span></a>
<?php 
    }else { ?>

      <a href="#" class="nav-link">Hello! <?php echo $_SESSION['username']; ?><span class="sr-only">(current)</span></a>
      <a href="logout.php" class="nav-link">Logout <span class="sr-only">(current)</span></a>

<?php  } ?>
          
      </div>
    </div>
  <!--</div>-->
</nav>
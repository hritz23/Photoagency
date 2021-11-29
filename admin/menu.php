<!DOCTYPE html>
<?php 
session_start();
error_reporting(0);
if(!$_SESSION['admin']){
  header("Location: login.php");
} 
      else { ?>
<html>
<head>
  <title>VDA | Admin</title>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link href="../assets/css/admin.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


 <link href="../assets/img/logo1.png" rel="icon">
  <link href="../assets/img/logo1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
<img src="../assets/img/logo2.png" class="imglog">
            
<div id="mySidenav" class="sidenav">
  <a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
  <a href="package.php"><i class="fa fa-bars"></i> Packages</a>
  <a href="product.php"><i class="fa fa-bars"></i> Products</a>
  <a href="user.php"><i class="fa fa-users"></i> Users</a>
  <a href="enquiry.php"><i class="fa fa-list-alt"></i> Enquiries</a>
  <a href="admin.php"><i class="fa fa-user-plus"></i> Admin</a>
  <a href="comment.php"><i class="fa fa-comment"></i> Reviews</a>
</div>
<div class="main">
    <h1 style="padding:20px; font-size: 2.5rem; font-weight: 800;">VEDANT DIGI ALBUM</h1>
    <hr>
        <div style="float: right;">
          <h3><i class="fa fa-user"></i> <?php echo $_SESSION['admin'];?></b>
  <a href="logout.php" tite="Logout"><i class="fa fa-sign-out" style="font-size:23px"></i></a><?php }?></h3>
        </div>
</div>
</div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>




   
</body>
</html> 

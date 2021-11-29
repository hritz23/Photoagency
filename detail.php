<?php 
include 'config.php';
include 'header1.php';
session_start();
if(!$_SESSION['user']){
      echo '<script>alert("Please Login first");</script>';
header("Location: login.php");
}
else { ?>
<section></section>
<section>
<?php
 $package_id = $_GET['package_id'];
$records = mysqli_query($conn,"SELECT * FROM `packages` WHERE package_id='$package_id' "); // fetch data from database

while($data = mysqli_fetch_array($records))
{

?>

<div class="package_c overflow-x:auto">
<section data-aos="fade-up">
<div class="panel panel-default">
  <div class="panel-heading">
    <h2><?php echo $data['package_name']; ?></h2></div><hr>
    <img src="admin/<?php echo $data['package_img']; ?>" class="img_detail">
    <div id="view-details">
      <h3 class="panel-body">Details:</h3>
      <li> <?php echo $data['Package_type']; ?></li>
      <p><?php echo $data['Package_detail']; ?></p>
    </div>
  
</div>

<a href="contact.php#contact"><button class="button_View"><span>Send Enquiry</span></button></a>

   </section> 
    </section>
<?php
}
}
include 'footer.php';
?>
